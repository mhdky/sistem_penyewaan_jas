// keterangan fungsi button penyewaan
const btnDetailPenyewaann = document.querySelectorAll('.btnDetailPenyewaan');
const detailPenyewaann = document.querySelectorAll('.detailPenyewaan');

btnDetailPenyewaann.forEach((btnDetailPenyewaan, index) => {
    btnDetailPenyewaan.addEventListener('mouseenter', () => {
        detailPenyewaann[index].style.display = 'block';
        setTimeout(() => {
            detailPenyewaann[index].style.opacity = '1';
            detailPenyewaann[index].style.transform = 'translateY(0)'
        }, 100);
    });

    btnDetailPenyewaan.addEventListener('mouseleave', () => {
        detailPenyewaann[index].style.transform = 'translateY(4px)'
        setTimeout(() => {
            detailPenyewaann[index].style.display = 'none';
            detailPenyewaann[index].style.opacity = '0';
        }, 100);
    });
});


// delete penyewaan
const btnDeletePenyewaann = document.querySelectorAll('.btnDeletePenyewaan');
const containerDeletePenyewaan = document.querySelectorAll('.containerDeletePenyewaan');
const deletePenyewaan = document.querySelectorAll('.deletePenyewaan');
const noDeltePenyewaann = document.querySelectorAll('.noDeltePenyewaan');
btnDeletePenyewaann.forEach((btnDeletePenyewaan, index) => {
    btnDeletePenyewaan.addEventListener('click', () => {
        containerDeletePenyewaan[index].style.display = 'flex';
        setTimeout(() => {
            deletePenyewaan[index].style.opacity = '1';
            deletePenyewaan[index].style.transform = 'translateY(0)';
        }, 300);
    });
});

noDeltePenyewaann.forEach((noDeltePenyewaan, index) => {
    noDeltePenyewaan.addEventListener('click', () => {
        deletePenyewaan[index].style.transform = 'translateY(28px)';
        deletePenyewaan[index].style.opacity = '0';

        setTimeout(() => {
            containerDeletePenyewaan[index].style.display = 'none';
        }, 300);
    });
});


// finish penyewaan
const btnFinishPenyewaann = document.querySelectorAll('.btnFinishPenyewaan');
const containerFinishPenyewaan = document.querySelectorAll('.containerFinishPenyewaan');
const finishPenyewaan = document.querySelectorAll('.finishPenyewaan');
const noFinishPenyewaann = document.querySelectorAll('.noFinishPenyewaan');

btnFinishPenyewaann.forEach((btnFinishPenyewaan, i) => {
    btnFinishPenyewaan.addEventListener('click', () => {
        containerFinishPenyewaan[i].style.display = 'flex';
        setTimeout(() => {
            finishPenyewaan[i].style.transform = 'translateY(0)';
            finishPenyewaan[i].style.opacity = '1';
        }, 300);
    });
});

noFinishPenyewaann.forEach((noFinishPenyewaan, i) => {
    noFinishPenyewaan.addEventListener('click', () => {
        finishPenyewaan[i].style.transform = 'translateY(28px)';
        finishPenyewaan[i].style.opacity = '0';
        setTimeout(() => {
            containerFinishPenyewaan[i].style.display = 'none';
        }, 300);
    });
});


// cek 
const btnCekKetersedianJass = document.querySelectorAll('.btnCekKetersedianJas');
const containerCekKetersedianJas = document.querySelectorAll('.containerCekKetersedianJas');
const closeCekKetersedianJass = document.querySelectorAll('.closeCekKetersedianJas');
const inputCekKetersedianJas = document.querySelectorAll('.inputCekKetersedianJas');


btnCekKetersedianJass.forEach((btnCekKetersedianJas, kj) => {
    btnCekKetersedianJas.addEventListener('click', () => {
        containerCekKetersedianJas[kj].style.display = 'block';
        setTimeout(() => {
            inputCekKetersedianJas[kj].focus();
        }, 100);
    });    
});

closeCekKetersedianJass.forEach((closeCekKetersedianJas, kj) => {
    closeCekKetersedianJas.addEventListener('click', () => {
        containerCekKetersedianJas[kj].style.display = 'none';
    });
});