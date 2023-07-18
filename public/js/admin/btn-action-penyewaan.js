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