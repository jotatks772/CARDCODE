<?php include __DIR__ . '/../components/header.php'; ?>

<section class="min-h-screen pt-32 pb-20 flex items-center justify-center bg-slate-50">
    <div class="w-full max-w-md bg-white p-10 rounded-3xl shadow-xl border border-slate-100 animate-slide-up">
        <h2 class="text-3xl font-black text-black mb-8 text-center uppercase tracking-tighter">Criar Conta</h2>

        <?php if(!empty($_SESSION['flash_errors'])): ?>
            <div class="bg-red-50 text-red-600 p-4 rounded-xl mb-6 text-sm font-bold text-center">
                <?php foreach($_SESSION['flash_errors'] as $error): ?>
                    <p><?= $error ?></p>
                <?php endforeach; unset($_SESSION['flash_errors']); ?>
            </div>
        <?php endif; ?>

        <form action="/register" method="POST" class="space-y-6">
            <div>
                <label class="block text-xs font-black text-slate-400 uppercase tracking-widest mb-2">Nome Completo</label>
                <input type="text" name="name" required class="w-full px-5 py-4 rounded-2xl border-2 border-slate-200 bg-white focus:ring-4 focus:ring-accent/20 focus:border-black transition-all outline-none font-medium">
            </div>

            <div>
                <label class="block text-xs font-black text-slate-400 uppercase tracking-widest mb-2">Email</label>
                <input type="email" name="email" required class="w-full px-5 py-4 rounded-2xl border-2 border-slate-200 bg-white focus:ring-4 focus:ring-accent/20 focus:border-black transition-all outline-none font-medium">
            </div>
            
            <div>
                <label class="block text-xs font-black text-slate-400 uppercase tracking-widest mb-2">Senha</label>
                <input type="password" name="password" required minlength="6" class="w-full px-5 py-4 rounded-2xl border-2 border-slate-200 bg-white focus:ring-4 focus:ring-accent/20 focus:border-black transition-all outline-none font-medium">
                <p class="text-xs text-slate-400 mt-2 font-medium">Mínimo de 6 caracteres</p>
            </div>

            <button type="submit" class="w-full bg-black text-white py-4 rounded-2xl font-black text-lg hover:bg-accent hover:text-black transition-all active:scale-95 shadow-lg shadow-black/10">
                Cadastrar
            </button>
        </form>

        <p class="mt-8 text-center text-slate-500 font-medium text-sm">
            Já tem uma conta? <a href="/login" class="text-black font-bold hover:underline">Faça Login</a>
        </p>
    </div>
</section>

<?php include __DIR__ . '/../components/layout_bottom.php'; ?>
