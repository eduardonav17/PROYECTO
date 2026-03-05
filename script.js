const hamburguerBtn =
document.getElementById('hamburgerBtn');
const sidebar =
document.getElementById('sidebar');
const overlay =
document.getElementById('overlay');

hamburguerBtn.addEventListener('click', () => {

    hamburguerBtn.classList.toggle('active');
    sidebar.classList.toggle('active');
    overlay.classList.toggle('active')
});

overlay.addEventListener('click', () => {
hamburguerBtn.classList.remove('active');
sidebar.classList.remove('active');
overlay.classList.remove('active');
});

function toggleSubmenu(id) {
    const submenu =
    document.getElementById(id);
    submenu.classList.toggle('active');
}