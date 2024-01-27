document.addEventListener('DOMContentLoaded', function () {
    const updateButtons = document.querySelectorAll('.update-user');

    updateButtons.forEach(button => {
        button.addEventListener('click', function () {
            const userId = this.getAttribute('data-user-id');
            const form = document.getElementById(`update-form-${userId}`);

            if (confirm('Você tem certeza de que deseja atualizar este usuário?')) {
                form.submit();
            }
        });
    });
});