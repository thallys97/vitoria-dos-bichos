function toggleFileInput() {
    var mediaInput = document.getElementById('media');
    var fileIcon = document.getElementById('file-icon');
    var fileNameDisplay = document.getElementById('file-name');

    if (window.innerWidth <= 768) {
        mediaInput.style.display = 'none';
        fileIcon.style.display = 'inline-block';

        // Exibe o nome do arquivo selecionado (se houver)
        mediaInput.addEventListener('change', function () {
            if (mediaInput.files.length > 0) {
                fileNameDisplay.textContent = mediaInput.files[0].name;
                fileNameDisplay.style.display = 'inline-block';
            } else {
                fileNameDisplay.style.display = 'none';
            }
        });
    } else {
        mediaInput.style.display = 'block';
        fileIcon.style.display = 'none';
        fileNameDisplay.style.display = 'none';
        fileNameDisplay.textContent = "";
    }
}

toggleFileInput(); // Execute a função no carregamento da página

// Atualize a exibição quando a janela for redimensionada
window.addEventListener('resize', function () {
    toggleFileInput();
});


// Quando o ícone é clicado, ative o campo de input
var fileIcon = document.getElementById('file-icon');
fileIcon.addEventListener('click', function () {
    var mediaInput = document.getElementById('media');
    mediaInput.click();
});