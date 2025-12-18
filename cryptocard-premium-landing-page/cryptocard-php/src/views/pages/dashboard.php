<?php include __DIR__ . '/../components/header.php'; ?>

<section class="min-h-screen pt-32 pb-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col md:flex-row justify-between items-center mb-12 gap-6 animate-slide-up">
            <div>
                <h2 class="text-4xl lg:text-5xl font-black text-black tracking-tighter uppercase mb-2">
                    Olá, <?= htmlspecialchars($_SESSION['user_name']) ?>!
                </h2>
                <p class="text-slate-500 font-medium text-lg">Bem-vindo ao seu painel.</p>
            </div>
            <a href="/logout" class="bg-white border-2 border-slate-200 text-black px-8 py-3 rounded-full font-bold hover:border-black transition-all">
                Sair
            </a>
        </div>

        <div class="grid lg:grid-cols-3 gap-8 animate-slide-up delay-200">
            <!-- Balance Card -->
            <div class="col-span-1 lg:col-span-2 bg-black text-white p-10 rounded-[2.5rem] relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-accent/20 rounded-full blur-[80px] -z-0"></div>
                <div class="relative z-10">
                    <p class="text-slate-400 font-bold uppercase tracking-widest text-xs mb-4">Saldo Total Estimado</p>
                    <div class="text-5xl lg:text-7xl font-black tracking-tighter mb-8">
                        $ 12,450<span class="text-accent">.00</span>
                    </div>
                    <div class="flex gap-4">
                        <button class="bg-accent text-black px-6 py-3 rounded-xl font-bold hover:bg-white transition-colors">
                            Depositar
                        </button>
                        <button class="bg-white/10 text-white px-6 py-3 rounded-xl font-bold hover:bg-white/20 transition-colors">
                            Enviar
                        </button>
                    </div>
                </div>
            </div>

            <!-- Card Status -->
            <div class="bg-white p-10 rounded-[2.5rem] border border-slate-100 shadow-sm flex flex-col justify-between">
                <div>
                    <div class="flex justify-between items-start mb-8">
                        <p class="text-slate-400 font-bold uppercase tracking-widest text-xs">Seu Cartão</p>
                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold uppercase">Ativo</span>
                    </div>
                    <p class="text-2xl font-black text-black mb-2">CryptoCard Black</p>
                    <p class="font-mono text-slate-500">**** **** **** 0042</p>
                </div>
                <div class="mt-8">
                    <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                        <div class="bg-accent h-full w-[70%]"></div>
                    </div>
                    <p class="text-xs text-right mt-2 font-bold text-slate-400">Limite mensal: 70% utilizado</p>
                </div>
            </div>
        </div>

        <div class="mt-12 bg-white p-10 rounded-[2.5rem] border border-slate-100 shadow-sm animate-slide-up delay-300">
            <h3 class="text-2xl font-black text-black mb-8">Transações Recentes</h3>
            <div class="space-y-6">
                <?php for($i=0; $i<3; $i++): ?>
                <div class="flex items-center justify-between border-b border-slate-50 pb-6 last:border-0 last:pb-0">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-slate-50 rounded-2xl flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-slate-400"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"/><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"/><path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"/></svg>
                        </div>
                        <div>
                            <p class="font-bold text-black">Starbucks Coffee</p>
                            <p class="text-xs text-slate-500 font-bold">Hoje, 10:45</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="font-black text-black">-$ 12.50</p>
                        <p class="text-xs text-accent font-bold">BTC</p>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
        </div>

    </div>
</section>

<?php include __DIR__ . '/../components/layout_bottom.php'; ?>
