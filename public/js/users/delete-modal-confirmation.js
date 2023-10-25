
document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-user');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            const userId = this.getAttribute('data-user-id');
            const form = document.getElementById(`delete-form-${userId}`);

            if (confirm('Tem certeza de que deseja excluir este usuário?')) {
                form.submit();
            }
        });
    });
});