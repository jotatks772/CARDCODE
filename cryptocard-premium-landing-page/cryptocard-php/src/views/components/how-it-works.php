<?php
$steps = [
  [
    "number" => "01",
    "title" => "Cadastro Instantâneo",
    "description" => "Baixe o app e verifique sua identidade em segundos. Sem burocracia bancária."
  ],
  [
    "number" => "02",
    "title" => "Deposite sua Cripto",
    "description" => "Envie BTC, ETH ou stablecoins para sua carteira segura com um clique."
  ],
  [
    "number" => "03",
    "title" => "Poder de Compra",
    "description" => "Use seu cartão físico ou virtual em milhões de lojas. É simples assim."
  ]
];
?>
<section id="how-it-works" class="py-24 lg:py-40 bg-slate-50 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="text-center mb-24 animate-slide-up">
      <h2 class="text-5xl font-black text-black mb-6 tracking-tighter uppercase">Simplicidade Radical</h2>
      <p class="text-xl text-slate-500 max-w-xl mx-auto font-medium">
        Três passos separam você da nova era do dinheiro.
      </p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      <?php foreach($steps as $index => $step): ?>
        <div class="bg-white p-12 rounded-[3rem] border border-slate-100 shadow-sm relative overflow-hidden group hover:shadow-xl transition-all animate-slide-up delay-<?= ($index+1)*200 ?>">
          <div class="text-8xl font-black text-slate-50 absolute -right-4 -top-4 select-none group-hover:text-accent/20 transition-colors">
            <?= $step['number'] ?>
          </div>
          <div class="relative z-10">
            <div class="w-16 h-16 rounded-2xl bg-black text-accent flex items-center justify-center text-2xl font-black mb-8">
              <?= $step['number'] ?>
            </div>
            <h3 class="text-2xl font-black text-black mb-4 uppercase tracking-tighter"><?= $step['title'] ?></h3>
            <p class="text-slate-500 leading-relaxed font-medium"><?= $step['description'] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
