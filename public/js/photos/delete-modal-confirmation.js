
document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-photo');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            const photoId = this.getAttribute('data-photo-id');
            const form = document.getElementById(`delete-form-${photoId}`);

            if (confirm('Tem certeza de que deseja excluir esta foto?')) {
                form.submit();
            }
        });
    });
});

