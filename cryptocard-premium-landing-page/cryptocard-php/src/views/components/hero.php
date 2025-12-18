<section class="relative pt-32 pb-20 lg:pt-48 lg:pb-40 overflow-hidden bg-white">
  <!-- Subtle Background elements -->
  <div class="absolute top-0 right-0 -mr-20 -mt-20 w-[600px] h-[600px] bg-lime-100/30 rounded-full blur-[120px] -z-10"></div>
  
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <div class="max-w-2xl">
        <div class="animate-slide-up inline-flex items-center gap-2 px-3 py-1 rounded-full bg-lime-100 text-black text-[10px] font-bold uppercase tracking-widest mb-8 border border-lime-200">
          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-lime-600"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
          O Futuro dos Pagamentos
        </div>
        
        <h1 class="animate-slide-up delay-100 text-6xl lg:text-8xl font-black leading-[0.9] text-black mb-8 tracking-tighter uppercase">
          SUA CRIPTO, <br />
          NO CARTÃO.
        </h1>
        
        <p class="animate-slide-up delay-200 text-xl text-slate-600 mb-12 leading-relaxed max-w-lg font-medium">
          Gaste seus ativos digitais em qualquer lugar do mundo com conversão instantânea e <span class="text-black font-bold">zero taxas abusivas.</span>
        </p>
        
        <div class="animate-slide-up delay-300 flex flex-col sm:flex-row gap-4">
          <button class="bg-accent text-black px-10 py-5 rounded-2xl text-lg font-black hover:bg-black hover:text-white transition-all flex items-center justify-center gap-2 active:scale-95 group shadow-lg shadow-lime-100">
            Começar agora
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:translate-x-1 transition-transform"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </button>
          <button class="bg-white text-black border-2 border-slate-100 px-10 py-5 rounded-2xl text-lg font-black hover:border-black transition-all flex items-center justify-center active:scale-95">
            Ver Planos
          </button>
        </div>

        <div class="animate-slide-up delay-400 mt-12 flex items-center gap-6">
          <div class="flex -space-x-3">
            <?php foreach([1, 2, 3, 4] as $i): ?>
              <img src="https://picsum.photos/seed/<?= $i + 20 ?>/64/64" alt="user" class="w-10 h-10 rounded-full border-4 border-white shadow-sm" />
            <?php endforeach; ?>
          </div>
          <div class="h-8 w-px bg-slate-200"></div>
          <p class="text-sm font-bold text-slate-500 uppercase tracking-tighter">Confiança de +15k usuários</p>
        </div>
      </div>

      <div class="relative animate-slide-up delay-500">
        <!-- Main Card -->
        <div class="relative z-10 w-full aspect-[1.586/1] max-w-lg mx-auto bg-black rounded-[2.5rem] p-10 text-white crypto-card-glow transform transition-all duration-700 hover:rotate-0 hover:scale-105 overflow-hidden group rotate-3">
          <div class="absolute top-0 right-0 w-48 h-48 bg-accent/20 blur-[80px] group-hover:bg-accent/30 transition-all"></div>
          
          <div class="flex justify-between items-start mb-16">
            <div class="w-14 h-11 bg-gradient-to-br from-slate-200 to-slate-400 rounded-lg flex items-center justify-center">
               <div class="w-10 h-7 border border-black/20 rounded-md"></div>
            </div>
            <div class="flex flex-col items-end">
              <span class="text-[10px] font-black opacity-40 uppercase tracking-[0.3em]">CRYPTO CARD</span>
              <div class="text-3xl font-black italic tracking-tighter text-accent">BLACK</div>
            </div>
          </div>

          <div class="mb-10">
            <div class="text-2xl font-mono tracking-[0.25em] opacity-80">**** **** **** 0042</div>
          </div>

          <div class="flex justify-between items-end">
            <div>
              <div class="text-[10px] uppercase opacity-40 font-bold mb-1 tracking-widest">PROPRIETÁRIO</div>
              <div class="text-xl font-bold tracking-tight">AUGUSTO MEIRELES</div>
            </div>
            <div class="flex items-center gap-5">
               <div class="text-[10px] uppercase opacity-40 text-right font-bold leading-none">
                VALID<br/>12/29
               </div>
               <div class="flex -space-x-4">
                 <div class="w-12 h-12 bg-white/10 rounded-full backdrop-blur-sm border border-white/20"></div>
                 <div class="w-12 h-12 bg-accent/80 rounded-full backdrop-blur-sm"></div>
               </div>
            </div>
          </div>
        </div>
        
        <!-- Floating Pop-ups -->
        <div class="animate-bounce duration-[3000ms] absolute -bottom-8 -left-8 z-20 bg-white p-5 rounded-3xl shadow-2xl border border-slate-100 flex items-center gap-4">
          <div class="w-12 h-12 bg-accent text-black rounded-full flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
          </div>
          <div>
            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Cashback</p>
            <p class="font-black text-black text-lg">+4.5% BTC</p>
          </div>
        </div>

        <div class="absolute -top-10 -right-4 z-20 bg-black text-white p-5 rounded-3xl shadow-2xl flex items-center gap-4">
          <div class="w-12 h-12 bg-accent text-black rounded-full flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/></svg>
          </div>
          <div>
            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Segurança</p>
            <p class="font-black text-white text-lg">Proteção 24/7</p>
          </div>
        </div>

        <div class="absolute top-1/2 -right-12 z-20 bg-white p-4 rounded-2xl shadow-xl border border-slate-100 flex items-center gap-3">
          <div class="w-10 h-10 bg-lime-100 text-lime-600 rounded-full flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
          </div>
          <div>
            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Conversão</p>
            <p class="font-bold text-black">Instantânea</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
