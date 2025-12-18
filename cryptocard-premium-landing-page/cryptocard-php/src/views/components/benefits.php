<?php
$floatingIcons = [
    ["src" => "https://cdn.prod.website-files.com/668fc11cc73a66df17137589/67b59d2eb955ff78c2e70a74_da.png", "pos" => "top-10 -left-12", "delay" => "0s"],
    ["src" => "https://cdn.prod.website-files.com/668fc11cc73a66df17137589/668fedfe178e921807d08916_teather%20icon.png", "pos" => "bottom-20 -left-16", "delay" => "0.5s"],
    ["src" => "https://cdn.prod.website-files.com/668fc11cc73a66df17137589/66960e4b65c8722b22ab94b4_eth%20icon.svg", "pos" => "top-20 -right-12", "delay" => "1s"],
    ["src" => "https://cdn.prod.website-files.com/668fc11cc73a66df17137589/67b59d8b681995fb850f27b4_fsd.png", "pos" => "bottom-10 -right-8", "delay" => "1.5s"],
];
?>
<section id="benefits" class="py-24 lg:py-40 bg-white overflow-hidden">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-24 items-center">
      
      <!-- Texto à Esquerda -->
      <div class="order-2 lg:order-1 animate-slide-up">
        <h2 class="text-5xl lg:text-7xl font-black text-black mb-8 uppercase tracking-tighter leading-[0.9]">
          Recarga gratuita <br />
          de criptomoedas <br />
          <span class="text-slate-200 uppercase">e Fiat</span>
        </h2>
        <p class="text-xl lg:text-2xl text-slate-500 leading-relaxed font-medium max-w-xl">
          Recarga fácil, processamento rápido. <span class="text-black font-black underline decoration-accent decoration-4">0% de comissão.</span>
        </p>
        
        <div class="mt-12 flex items-center gap-6">
          <div class="h-px w-20 bg-slate-200"></div>
          <p class="text-xs font-black uppercase tracking-[0.3em] text-slate-400">Processamento Instantâneo</p>
        </div>
      </div>

      <!-- Imagem à Direita com Ícones Flutuantes -->
      <div class="relative order-1 lg:order-2 flex justify-center animate-slide-up delay-200">
        <!-- Glow Background -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120%] h-[120%] bg-accent/10 rounded-full blur-[120px] -z-10"></div>
        
        <div class="relative">
          <!-- iPhone Mockup -->
          <img 
            src="https://cdn.prod.website-files.com/668fc11cc73a66df17137589/67b849a16e09523869bf7e16_%5BMockup%5D%20iPhone%2019%20(2).png" 
            alt="iPhone Mockup Karta Recarga" 
            class="w-full max-w-[380px] h-auto object-contain drop-shadow-[0_35px_35px_rgba(0,0,0,0.15)]"
          />

          <!-- Ícones Flutuantes -->
          <?php foreach($floatingIcons as $icon): ?>
            <div
              class="absolute <?= $icon['pos'] ?> w-16 h-16 lg:w-20 lg:h-20 bg-white rounded-3xl p-4 shadow-2xl border border-slate-50 flex items-center justify-center animate-float"
              style="animation-delay: <?= $icon['delay'] ?>"
            >
              <img src="<?= $icon['src'] ?>" alt="Crypto Icon" class="w-full h-full object-contain" />
            </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </div>
</section>
