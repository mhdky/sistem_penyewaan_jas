const btnDeskripsi = document.querySelector('.btnDeskripsi');
const gambarJas = document.querySelector('.gambarJas');
const deskripsi = document.querySelector('.deskripsi');
const tutup = document.querySelector('.tutup');

btnDeskripsi.addEventListener('click', () => {
    gambarJas.style.display = 'none';
    gambarJas.style.transform = 'translateX(-100%)';
    deskripsi.style.display = 'block';
    setTimeout(() => {
        deskripsi.style.transform = 'translateX(0)';
    }, 100);
});
tutup.addEventListener('click', () => {
    deskripsi.style.display = 'none';
    deskripsi.style.transform = 'translateX(100%)';
    gambarJas.style.display = 'block';
    setTimeout(() => {
        gambarJas.style.transform = 'translateX(0)';
    }, 100);
});