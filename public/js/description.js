// discription
const btnDescription = document.querySelector('.btnDescription');
const sizeEtc = document.querySelector('.sizeEtc');
const descriptionText = document.querySelector('.descriptionText');
btnDescription.addEventListener('click', () => {
    sizeEtc.style.display = 'none';
    sizeEtc.classList.add('sizeEtcHide');

    descriptionText.classList.add('descriptionTextShow');
});
const closeDescription = document.querySelector('.closeDescription');
closeDescription.addEventListener('click', () => {
    descriptionText.style.display = 'none';
    descriptionText.classList.remove('descriptionTextShow');
    setTimeout(() => {
        descriptionText.style.display = 'block';
    }, 100);

    sizeEtc.style.display = 'block';
    setTimeout(() => {
        sizeEtc.classList.remove('sizeEtcHide');
    }, 50);
});