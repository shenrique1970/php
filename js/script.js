function atualizarHora() {
    const agora = new Date();
    const hora = agora.toLocaleTimeString('pt-BR');
    document.getElementById('hora').textContent = hora;
}

setInterval(atualizarHora, 1000);
atualizarHora();

const toggleBtn = document.getElementById('toggle-theme');
toggleBtn.addEventListener('click', () => {
    document.body.classList.toggle('light-mode');
});  