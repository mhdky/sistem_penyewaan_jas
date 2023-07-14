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
burgerBtn.addEventListener('click', () => {
    line[0].classList.toggle('lineBurgerBtnFt');
    line[1].classList.toggle('lineBurgerBtnSd');
    line[2].classList.toggle('lineBurgerBtnTh');
    containerContent.classList.toggle('containerContentTranslate');
    navbar.classList.toggle('navbarSticky');
    body.classList.toggle('bodeOverflow');
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
const btnShowMainSearchMbl = document.querySelector('.btnShowMainSearchMbl'); ////////////
const btnCloseMainSearch = document.querySelector('.btnCloseMainSearch');
const body = document.querySelector('body');
btnShowMainSearchMbl.addEventListener('click', () => {
    line[0].classList.remove('lineBurgerBtnFt');
    line[1].classList.remove('lineBurgerBtnSd');
    line[2].classList.remove('lineBurgerBtnTh');
    containerContent.classList.remove('containerContentTranslate');
    navbar.classList.remove('navbarSticky');
    body.classList.remove('bodeOverflow');
    mainSearch.style.display = 'block';
    body.style.overflow = 'hidden';
    setTimeout(() => {
        document.querySelector('.inputMainSearch').focus();
    }, 100);
});
btnShowMainSearchDst.addEventListener('click', () => {
    mainSearch.style.display = 'block';
    body.style.overflow = 'hidden';
    setTimeout(() => {
        document.querySelector('.inputMainSearch').focus();
    }, 100);
});
btnCloseMainSearch.addEventListener('click', () => {
    mainSearch.style.display = 'none';
    body.style.overflow = '';
});

// list user mobile
const showListUserMobile = document.querySelector('.showListUserMobile');
const listUserMobile = document.querySelector('.listUserMobile');
const closeListUserMobile = document.querySelector('.closeListUserMobile');
// show
showListUserMobile.addEventListener('click', () => {
    listUserMobile.style.display = 'block';
});
// hide
closeListUserMobile.addEventListener('click', () => {
    listUserMobile.style.display = 'none';
});

// list user Desktop
const showListUserDesktop = document.querySelector('.showListUserDesktop');
const listUserDesktop = document.querySelector('.listUserDesktop');
const closeListUserDesktop = document.querySelector('.closeListUserDesktop');
// show
showListUserDesktop.addEventListener('click', () => {
    listUserDesktop.style.display = 'block';
});
// hide
closeListUserDesktop.addEventListener('click', () => {
    listUserDesktop.style.display = 'none';
});