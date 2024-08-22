// Seleciona todas as divs com a classe 'option'
const dias = document.querySelectorAll('.dia');

dias.forEach(dias => {
    dias.addEventListener('click', function() {
        // Alterna a classe 'selected' na div clicada
        this.classList.toggle('selected');
    });
});