<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Dotenv\Dotenv;

// Verify Method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

// Load Env if not loaded (redundant if using index.php router but safe)
$dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->safeLoad();

// Get Input
$input = json_decode(file_get_contents('php://input'), true);
$profile = $input['profile'] ?? '';

if (empty($profile)) {
    http_response_code(400);
    echo json_encode(['error' => 'Profile is required']);
    exit;
}

$apiKey = $_ENV['GEMINI_API_KEY'] ?? '';

if (empty($apiKey)) {
    http_response_code(500);
    echo json_encode(['error' => 'API Key not configured']);
    exit;
}

// Prompt Construction
$prompt = "Analise o seguinte perfil de usuário para recomendar um dos nossos planos de cartão cripto (Essential, Pro, ou Black Elite).

Perfil do Usuário: \"$profile\"

Regras de Planos:
1. Essential: Para iniciantes, 1% cashback, limite de $1k/mês.
2. Pro: Para investidores frequentes, 2.5% cashback, benefícios em aeroportos, limite de $10k/mês.
3. Black Elite: Para baleias/high net worth, 5% cashback, concierge 24h, limites ilimitados.

Retorne APENAS um JSON (sem markdown, sem ```json) com: planName, reason (curta em PT-BR), highlightBenefit.";

// Call Gemini API (using cURL for broader compatibility if Guzzle is missing)
$url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=$apiKey";

$payload = [
    "contents" => [
        [
            "parts" => [
                ["text" => $prompt]
            ]
        ]
    ],
    "generationConfig" => [
        "responseMimeType" => "application/json"
    ]
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json'
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if (curl_errno($ch)) {
    http_response_code(500);
    echo json_encode(['error' => 'Curl Error: ' . curl_error($ch)]);
    curl_close($ch);
    exit;
}
curl_close($ch);

if ($httpCode !== 200) {
    http_response_code(500);
    echo json_encode(['error' => 'API Error', 'details' => $response]);
    exit;
}

// Parse Gemini Response to extract text
$responseData = json_decode($response, true);
try {
    $text = $responseData['candidates'][0]['content']['parts'][0]['text'];
    // Clean markdown if present
    $text = str_replace(['```json', '```'], '', $text);
    echo $text; // Return the JSON directly to frontend
} catch (Exception $e) {
    echo json_encode(['error' => 'Failed to parse AI response']);
}
