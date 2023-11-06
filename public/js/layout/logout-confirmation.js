// logout-confirmation.js

document.addEventListener('DOMContentLoaded', function () {
    // Capturando o clique na âncora com a classe "confirm-logout"
    var logoutButtons = document.querySelectorAll('.confirm-logout');

    logoutButtons.forEach(function (button) {
        button.addEventListener('click', function (e) {
            e.preventDefault();
            // Exibindo o modal de confirmação
            openLogoutConfirmationModal();
        });
    });

    // Capturando o clique no botão "Cancelar" do modal
    var cancelButton = document.getElementById('cancelButton');

    if (cancelButton) {
        cancelButton.addEventListener('click', function () {
            // Fechando o modal
            closeLogoutConfirmationModal();
        });
    }

    // Capturando o clique no botão "Sair" do modal
    var confirmButton = document.getElementById('confirmButton');

    if (confirmButton) {
        confirmButton.addEventListener('click', function () {
            // Submetendo o formulário de logout
            document.getElementById('logout-form-layout').submit();
        });
    }
});