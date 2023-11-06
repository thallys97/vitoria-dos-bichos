// logout-confirmation.js

// Quando o documento estiver pronto
$(document).ready(function () {
    // Capturando o clique na âncora
    $(".confirm-logout").click(function (e) {
        e.preventDefault(); // Prevenir o comportamento padrão do link

        // Exibindo o modal de confirmação
        $("#logoutModal").modal("show");
    });
});
