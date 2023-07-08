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

// nav dropdown desktop
const showDropDown = document.querySelector('.showDropDown');
const listDropDown = document.querySelector('.listDropDown');
const closeDropDown = document.querySelector('.closeDropDown');
showDropDown.addEventListener('click', () => {
    listDropDown.style.display = 'block';
});
closeDropDown.addEventListener('click', () => {
    listDropDown.style.display = 'none';
});

// main search
const mainSearch = document.querySelector('.mainSearch');
const btnShowMainSearchDst = document.querySelector('.btnShowMainSearchDst');
const btnShowMainSearchMbl = document.querySelector('.btnShowMainSearchMbl');
const btnCloseMainSearch = document.querySelector('.btnCloseMainSearch');
const body = document.querySelector('body');
btnShowMainSearchMbl.addEventListener('click', () => {
    mainSearch.style.display = 'block';
    body.style.overflow = 'hidden';
});
btnShowMainSearchDst.addEventListener('click', () => {
    mainSearch.style.display = 'block';
    body.style.overflow = 'hidden';
});
btnCloseMainSearch.addEventListener('click', () => {
    mainSearch.style.display = 'none';
    body.style.overflow = 'auto';
});