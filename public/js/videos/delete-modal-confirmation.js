
document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-video');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            const videoId = this.getAttribute('data-video-id');
            const form = document.getElementById(`delete-form-${videoId}`);

            if (confirm('Tem certeza de que deseja excluir este vídeo?')) {
                form.submit();
            }
        });
    });
});

