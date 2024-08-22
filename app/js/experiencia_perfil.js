// Seleciona todas as divs com a classe 'option'
const options = document.querySelectorAll('.option');

options.forEach(option => {
    option.addEventListener('click', function() {
        // Remove a classe 'selected' de todas as divs
        options.forEach(opt => opt.classList.remove('selected'));

        // Adiciona a classe 'selected' à div clicada
        this.classList.add('selected');
    });
});
