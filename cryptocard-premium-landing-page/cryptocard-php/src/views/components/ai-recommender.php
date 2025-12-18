<!-- AI Card Recommender Component -->
<section class="py-24 bg-white" id="ai-recommender">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-slate-50 rounded-[3rem] p-10 lg:p-16 border border-slate-100 animate-slide-up">
      <div class="flex flex-col items-center text-center gap-4 mb-12">
        <div class="w-16 h-16 bg-black rounded-2xl flex items-center justify-center text-accent">
          <!-- Sparkles -->
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/><path d="M5 3v4"/><path d="M9 17v4"/><path d="M3 21h4"/></svg>
        </div>
        <div>
          <h2 class="text-3xl font-black text-black uppercase tracking-tighter">Match Inteligente</h2>
          <p class="text-slate-500 font-medium">Nossa IA escolhe o melhor nível de privilégio para você.</p>
        </div>
      </div>

      <div class="space-y-8">
        <div class="relative">
          <label class="block text-xs font-black text-slate-400 uppercase tracking-widest mb-3 ml-2">
            Conte-nos sobre sua rotina financeira
          </label>
          <textarea
            id="ai-profile"
            placeholder="Ex: Viajo muito a trabalho, invisto em ETH e gasto cerca de 8k por mês em restaurantes."
            class="w-full h-40 px-8 py-6 rounded-3xl border-2 border-slate-200 bg-white focus:ring-4 focus:ring-accent/20 focus:border-black transition-all outline-none text-black font-medium resize-none text-lg shadow-sm"
          ></textarea>
        </div>

        <button
          id="ai-submit"
          class="w-full bg-black text-white py-6 rounded-3xl font-black text-xl flex items-center justify-center gap-3 hover:bg-accent hover:text-black transition-all disabled:opacity-50 active:scale-[0.98]"
        >
          <span id="ai-btn-text">Analisar Perfil</span>
          <span id="ai-btn-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/><path d="M5 3v4"/><path d="M9 17v4"/><path d="M3 21h4"/></svg>
          </span>
          <!-- Loader (Hidden by default) -->
          <svg id="ai-loader" class="hidden animate-spin h-6 w-6 text-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
          </svg>
        </button>

        <!-- Result Container (Hidden by default) -->
        <div id="ai-result" class="hidden mt-12 p-8 bg-white rounded-3xl border-2 border-accent shadow-xl shadow-accent/10 animate-slide-up">
          <div class="flex justify-between items-start mb-6">
            <span class="text-xs font-black uppercase tracking-[0.2em] text-black px-4 py-1.5 bg-accent rounded-full">
              Resultado da Análise
            </span>
            <div class="flex items-center text-lime-600 text-sm font-black uppercase tracking-tighter">
              <!-- Check -->
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-1"><polyline points="20 6 9 17 4 12"/></svg>
               Perfeito para você
            </div>
          </div>
          <h3 id="ai-plan-name" class="text-4xl font-black text-black mb-4 tracking-tighter"></h3>
          <p id="ai-reason" class="text-slate-600 mb-8 text-lg font-medium leading-relaxed"></p>
          <div class="flex items-center gap-3 text-black font-black bg-accent/30 p-5 rounded-2xl border border-accent/40">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/><path d="M5 3v4"/><path d="M9 17v4"/><path d="M3 21h4"/></svg>
            <span id="ai-benefit"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="/assets/js/ai-recommender.js"></script>
