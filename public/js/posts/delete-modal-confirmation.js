
document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-post');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            const postId = this.getAttribute('data-post-id');
            const form = document.getElementById(`delete-form-${postId}`);

            if (confirm('Tem certeza de que deseja excluir este post?')) {
                form.submit();
            }
        });
    });
});

