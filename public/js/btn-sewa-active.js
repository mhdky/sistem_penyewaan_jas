const btnSdgSwa = document.querySelector('.btnSdgSwa');
const btnSdhSwa = document.querySelector('.btnSdhSwa');
const bgActive = document.querySelector('.bgActive');

const containerSdgPenyewaan = document.querySelector('.containerSdgPenyewaan');

const containerSelesaiPenyewaan = document.querySelector('.containerSelesaiPenyewaan');

btnSdhSwa.addEventListener('click', () => {
    bgActive.style.transform = 'translateX(100%)';
    btnSdhSwa.style.color = 'white';
    btnSdgSwa.style.color = '#71717a';

    containerSdgPenyewaan.style.display = 'none';
    containerSdgPenyewaan.style.opacity = '0';
    containerSdgPenyewaan.style.transform = 'translateY(12px)';

    containerSelesaiPenyewaan.style.display = 'block';
    setTimeout(() => {
        containerSelesaiPenyewaan.style.opacity = '1';
        containerSelesaiPenyewaan.style.transform = 'translateY(0)';
    }, 300);
});
btnSdgSwa.addEventListener('click', () => {
    bgActive.style.transform = 'translateX(0)';
    btnSdhSwa.style.color = '#71717a';
    btnSdgSwa.style.color = 'white';

    containerSdgPenyewaan.style.display = 'block';
    setTimeout(() => {
        containerSdgPenyewaan.style.opacity = '1';
        containerSdgPenyewaan.style.transform = 'translateY(0)';
    }, 300);

    containerSelesaiPenyewaan.style.display = 'none';
    containerSelesaiPenyewaan.style.opacity = '0';
    containerSelesaiPenyewaan.style.transform = 'translateY(12px)';
});