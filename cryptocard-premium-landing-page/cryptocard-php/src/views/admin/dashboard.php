<?php include __DIR__ . '/../components/header.php'; ?>

<section class="min-h-screen pt-32 pb-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col md:flex-row justify-between items-center mb-12 gap-6 animate-slide-up">
            <div>
                <h2 class="text-4xl font-black text-black tracking-tighter uppercase mb-2">
                    Admin Dashboard
                </h2>
                <p class="text-slate-500 font-medium text-lg">Gerenciamento de KYC e Usuários.</p>
            </div>
            <a href="/logout" class="bg-white border-2 border-slate-200 text-black px-8 py-3 rounded-full font-bold hover:border-black transition-all">
                Sair
            </a>
        </div>

        <?php if(!empty($_SESSION['flash_success'])): ?>
            <div class="bg-lime-100 text-lime-800 p-4 rounded-xl mb-6 text-sm font-bold text-center animate-slide-up">
                <?= $_SESSION['flash_success']; unset($_SESSION['flash_success']); ?>
            </div>
        <?php endif; ?>

        <div class="bg-white p-10 rounded-[2.5rem] border border-slate-100 shadow-sm animate-slide-up delay-100">
            <h3 class="text-2xl font-black text-black mb-8 flex items-center gap-3">
                <span class="w-3 h-3 bg-yellow-400 rounded-full animate-pulse"></span>
                Solicitações Pendentes (KYC)
            </h3>

            <?php if (empty($pendingUsers)): ?>
                <div class="text-center py-10 text-slate-400 font-medium">
                    Nenhuma solicitação pendente no momento.
                </div>
            <?php else: ?>
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="border-b border-slate-100 text-xs font-black uppercase text-slate-400 tracking-widest">
                                <th class="pb-4 pl-4">Nome</th>
                                <th class="pb-4">Email</th>
                                <th class="pb-4">Data Cadastro</th>
                                <th class="pb-4 text-right pr-4">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50">
                            <?php foreach($pendingUsers as $user): ?>
                                <tr class="group hover:bg-slate-50 transition-colors">
                                    <td class="py-6 pl-4 font-bold text-black"><?= htmlspecialchars($user['name']) ?></td>
                                    <td class="py-6 text-slate-500"><?= htmlspecialchars($user['email']) ?></td>
                                    <td class="py-6 text-slate-400 text-sm">
                                        <?= $user['created_at']->toDateTime()->format('d/m/Y H:i') ?>
                                    </td>
                                    <td class="py-6 text-right pr-4">
                                        <div class="flex justify-end gap-3">
                                            <form action="/admin/status" method="POST" class="inline">
                                                <input type="hidden" name="user_id" value="<?= $user['_id'] ?>">
                                                <input type="hidden" name="status" value="rejected">
                                                <button type="submit" class="px-4 py-2 border border-slate-200 text-slate-500 rounded-xl text-xs font-bold hover:bg-red-50 hover:text-red-500 hover:border-red-100 transition-colors">
                                                    Negar
                                                </button>
                                            </form>
                                            <form action="/admin/status" method="POST" class="inline">
                                                <input type="hidden" name="user_id" value="<?= $user['_id'] ?>">
                                                <input type="hidden" name="status" value="approved">
                                                <button type="submit" class="px-4 py-2 bg-black text-white rounded-xl text-xs font-bold hover:bg-accent hover:text-black transition-colors shadow-lg shadow-black/10">
                                                    Aprovar
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>

    </div>
</section>

<?php include __DIR__ . '/../../components/layout_bottom.php'; ?>
