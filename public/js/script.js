// nav list
const btnCategories = document.querySelector('.btnCategories');
const listCategory = document.querySelector('.listCategory');
const arrowRight = document.querySelector('.arrowRight');
btnCategories.addEventListener('click', () => {
    listCategory.classList.toggle('listCategoryShow');
    arrowRight.classList.toggle('arrowRightRotate');
});

// burger button
const burgerBtn =  document.querySelector('.burgerBtn');
const line =  document.querySelectorAll('.line');
const containerContent =  document.querySelector('.containerContent');
const navbar =  document.querySelector('.navbar');
const jumbotron =  document.querySelector('.jumbotron');
burgerBtn.addEventListener('click', () => {
    line[0].classList.toggle('lineBurgerBtnFt');
    line[1].classList.toggle('lineBurgerBtnSd');
    line[2].classList.toggle('lineBurgerBtnTh');
    containerContent.classList.toggle('containerContentTranslate');
    navbar.classList.toggle('navbarSticky');
    jumbotron.classList.toggle('jumbotronPtChange');
});