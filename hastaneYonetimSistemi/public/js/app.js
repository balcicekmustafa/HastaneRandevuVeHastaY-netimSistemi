document.addEventListener('DOMContentLoaded', function() {
    // Form doğrulama işlemi
    const form = document.querySelector('form');
    form.addEventListener('submit', function(event) {
        const ad = document.getElementById('ad').value;
        const email = document.getElementById('email').value;
        const sifre = document.getElementById('sifre').value;
        const sifreConfirmation = document.getElementById('sifre_confirmation').value;

        if (ad === '' || email === '' || sifre === '' || sifre !== sifreConfirmation) {
            event.preventDefault();
            alert('Lütfen tüm alanları doldurun ve şifrelerin aynı olduğundan emin olun.');
        }
    });

    // Dinamik Alan/Doktor seçimi
    const alanSelect = document.getElementById('alan');
    const doktorSelect = document.getElementById('doktor');

    const doktorlar = {
        'Kardiyoloji': ['Dr. Ahmet', 'Dr. Mehmet'],
        'Nöroloji': ['Dr. Ayşe', 'Dr. Fatma']
    };

    alanSelect.addEventListener('change', function() {
        const secilenAlan = this.value;
        const doktorlarOptions = doktorlar[secilenAlan] || [];

        doktorSelect.innerHTML = '';

        doktorlarOptions.forEach(function(doktor) {
            const option = document.createElement('option');
            option.value = doktor;
            option.textContent = doktor;
            doktorSelect.appendChild(option);
        });
    });
});
