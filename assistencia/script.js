document.getElementById('form1').addEventListener('submit', function(event) {
    event.preventDefault(); // Interrompe o envio padrão do formulário

    // Obtenha os dados do formulário
    var formData = new FormData(this);

    // Armazene os dados na sessão
    for (var pair of formData.entries()) {
        sessionStorage.setItem(pair[0], pair[1]);
    }

    // Redirecione para o segundo formulário
    window.location.href = '/bloco2/bloco2.php';
});
