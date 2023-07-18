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