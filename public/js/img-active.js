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