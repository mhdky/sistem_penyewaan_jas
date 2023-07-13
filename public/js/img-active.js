// image active
function ubahGambar(gambar) {
    // gambar utama akan berubah
    let gambarUtama = document.getElementById('gambarUtama');
    gambarUtama.src = gambar.src;

    // menghapus border gambar yang aktive
    let imgActives = document.querySelectorAll('.imgActive');
    imgActives.forEach(function(imgActive) {
        imgActive.classList.remove('imgActiveBorder');
    });

    // memberitahu gambar yang aktive
    let kontainerDitekan = gambar.parentNode;
    kontainerDitekan.classList.add('imgActiveBorder');

    // halaman akan kembali keatas
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

// discription
const btnDescription = document.querySelector('.btnDescription');
const sizeEtc = document.querySelector('.sizeEtc');
const descriptionText = document.querySelector('.descriptionText');
btnDescription.addEventListener('click', () => {
    sizeEtc.classList.add('sizeEtcHide');
    setTimeout(() => {
        sizeEtc.style.display = 'none';
    }, 100);
    descriptionText.classList.add('descriptionTextShow');
});
const closeDescription = document.querySelector('.closeDescription');
closeDescription.addEventListener('click', () => {
    sizeEtc.classList.remove('sizeEtcHide');
    sizeEtc.style.display = 'block';

    descriptionText.style.display = 'none';
    descriptionText.classList.remove('descriptionTextShow');
    setTimeout(() => {
        descriptionText.style.display = 'block';
    }, 100);
});