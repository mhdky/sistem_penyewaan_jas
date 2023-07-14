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