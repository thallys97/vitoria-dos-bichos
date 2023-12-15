function toggleMensagem() {
    var mensagem = document.querySelector(".mensagem-apresentacao");
    mensagem.style.display = (mensagem.style.display === 'none' || mensagem.style.display === '') ? 'block' : 'none';
}