function confirmLogout() {
    if (confirm("Deseja realmente sair?")) {
        document.getElementById('logout-form-layout').submit();
    }
}