document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('ai-submit');
    const profileInput = document.getElementById('ai-profile');
    const resultDiv = document.getElementById('ai-result');
    const loader = document.getElementById('ai-loader');
    const btnText = document.getElementById('ai-btn-text');
    const btnIcon = document.getElementById('ai-btn-icon');

    const planNameEl = document.getElementById('ai-plan-name');
    const reasonEl = document.getElementById('ai-reason');
    const benefitEl = document.getElementById('ai-benefit');

    if (!btn) return;

    btn.addEventListener('click', async () => {
        const profile = profileInput.value.trim();
        if (!profile) return;

        // UI Loading State
        btn.disabled = true;
        btnText.classList.add('hidden');
        btnIcon.classList.add('hidden');
        loader.classList.remove('hidden');
        resultDiv.classList.add('hidden');

        try {
            const response = await fetch('/api/recommend', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ profile })
            });

            const data = await response.json();

            if (data.error) {
                alert('Erro: ' + data.error);
                return;
            }

            // Populate Result
            planNameEl.textContent = data.planName;
            reasonEl.textContent = data.reason;
            benefitEl.textContent = `Destaque: ${data.highlightBenefit}`;

            // Show Result
            resultDiv.classList.remove('hidden');
            resultDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });

        } catch (error) {
            console.error(error);
            alert('Ocorreu um erro ao consultar a IA. Tente novamente.');
        } finally {
            // Restore Button
            btn.disabled = false;
            btnText.classList.remove('hidden');
            btnIcon.classList.remove('hidden');
            loader.classList.add('hidden');
        }
    });
});
