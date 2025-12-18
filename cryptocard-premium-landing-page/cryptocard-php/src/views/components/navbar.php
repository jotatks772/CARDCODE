<nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md border-b border-slate-100 animate-slide-down">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
    <div class="flex items-center gap-2">
      <div class="w-10 h-10 bg-black rounded-xl flex items-center justify-center text-accent">
        <!-- Lucide Wallet Icon -->
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wallet"><path d="M20 12V8H6a2 2 0 0 1-2-2c0-1.1.9-2 2-2h12v4"/><path d="M4 6v12c0 1.1.9 2 2 2h14v-4"/><path d="M18 12a2 2 0 0 0-2 2c0 1.1.9 2 2 2h4v-4Z"/></svg>
      </div>
      <span class="text-xl font-bold tracking-tighter text-black uppercase">CryptoCard</span>
    </div>
    
    <div class="hidden md:flex items-center gap-10">
      <a href="/#benefits" class="text-sm font-semibold text-slate-500 hover:text-black transition-colors">Benefícios</a>
      <a href="/#how-it-works" class="text-sm font-semibold text-slate-500 hover:text-black transition-colors">Como Funciona</a>
      <a href="/#features" class="text-sm font-semibold text-slate-500 hover:text-black transition-colors">Funcionalidades</a>
    </div>

    <div class="flex gap-4">
        <!-- Auth Links -->
        <?php if(isset($_SESSION['user_id'])): ?>
            <a href="/dashboard" class="bg-black text-white px-6 py-2.5 rounded-full text-sm font-bold hover:bg-accent hover:text-black transition-all active:scale-95">
                Dashboard
            </a>
            <a href="/logout" class="text-sm font-bold text-slate-500 hover:text-black flex items-center">Sair</a>
        <?php else: ?>
            <a href="/login" class="text-sm font-bold text-slate-500 hover:text-black flex items-center">Login</a>
            <a href="/register" class="bg-black text-white px-6 py-2.5 rounded-full text-sm font-bold hover:bg-accent hover:text-black transition-all active:scale-95">
                Começar agora
            </a>
        <?php endif; ?>
    </div>
  </div>
</nav>
