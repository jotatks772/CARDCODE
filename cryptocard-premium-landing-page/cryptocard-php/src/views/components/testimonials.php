<?php
$testimonials = [
    [
        "name" => "Ricardo Oliveira",
        "role" => "Investidor de Cripto",
        "content" => "O CryptoCard mudou minha relação com meus lucros. Agora posso usar os rendimentos das minhas moedas sem precisar transferir para bancos tradicionais.",
        "image" => "https://picsum.photos/seed/p1/64/64"
    ],
    [
        "name" => "Ana Beatriz",
        "role" => "Nômade Digital",
        "content" => "O melhor cartão para quem viaja. As taxas de conversão de stablecoins são muito melhores do que qualquer casa de câmbio que já usei.",
        "image" => "https://picsum.photos/seed/p2/64/64"
    ],
    [
        "name" => "Marcos Vinicius",
        "role" => "Desenvolvedor",
        "content" => "Interface impecável e suporte rápido. A sensação de pagar um jantar com Ethereum é simplesmente indescritível.",
        "image" => "https://picsum.photos/seed/p3/64/64"
    ]
];
?>
<section class="py-24 bg-slate-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16">
      <h2 class="text-3xl font-bold text-slate-900 mb-4">O que dizem nossos usuários</h2>
      <div class="flex justify-center gap-1">
        <?php for($i=0; $i<5; $i++): ?>
            <!-- Star Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#facc15" stroke="#facc15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round class="text-yellow-400"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        <?php endfor; ?>
      </div>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      <?php foreach($testimonials as $t): ?>
        <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100">
          <p class="text-slate-600 italic mb-8 leading-relaxed">"<?= $t['content'] ?>"</p>
          <div class="flex items-center gap-4">
            <img src="<?= $t['image'] ?>" alt="<?= $t['name'] ?>" class="w-12 h-12 rounded-full object-cover" />
            <div>
              <h4 class="font-bold text-slate-900"><?= $t['name'] ?></h4>
              <p class="text-xs text-slate-500"><?= $t['role'] ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
