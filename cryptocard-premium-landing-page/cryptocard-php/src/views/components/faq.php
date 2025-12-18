<?php
$faqData = [
  ["q" => "What is Karta?", "a" => "Karta is your virtual crypto card directly integrated with Telegram."],
  ["q" => "Are there any fees for registration?", "a" => "No, registration is completely free."],
  ["q" => "How do I get the card?", "a" => "Simply open our bot on Telegram and follow the instructions."],
  ["q" => "How can I fund my account?", "a" => "You can fund using any supported cryptocurrency."]
];
?>
<section class="py-32 bg-black text-white" id="faq">
  <div class="max-w-3xl mx-auto px-6">
    <h2 class="text-5xl font-black text-center text-lime-400 mb-20 uppercase tracking-tighter">F.A.Q.</h2>
    
    <div class="space-y-4">
      <?php foreach($faqData as $i => $item): ?>
        <div class="faq-item border-b border-white/10">
          <button 
            class="w-full py-8 flex justify-between items-center text-left hover:text-lime-400 transition-colors focus:outline-none faq-toggle"
            data-index="<?= $i ?>"
          >
            <span class="text-lg font-bold"><?= $item['q'] ?></span>
            <!-- Plus Icon -->
            <svg class="faq-icon-plus" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5v14"/></svg>
            <!-- Minus Icon (Hidden) -->
            <svg class="faq-icon-minus hidden" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/></svg>
          </button>
          
          <div class="faq-answer hidden pb-8 text-slate-400 font-medium leading-relaxed">
            <?= $item['a'] ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const toggles = document.querySelectorAll('.faq-toggle');

    toggles.forEach(toggle => {
        toggle.addEventListener('click', () => {
            const answer = toggle.nextElementSibling;
            const iconPlus = toggle.querySelector('.faq-icon-plus');
            const iconMinus = toggle.querySelector('.faq-icon-minus');

            // Toggle current
            answer.classList.toggle('hidden');
            iconPlus.classList.toggle('hidden');
            iconMinus.classList.toggle('hidden');
        });
    });
});
</script>
