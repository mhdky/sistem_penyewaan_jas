const adminBurgerBtn = document.querySelector('.adminBurgerBtn');
const containerAdminNavigation = document.querySelector('.containerAdminNavigation');
const adminNavigation = document.querySelector('.adminNavigation');
const closeAdminNavigation = document.querySelector('.closeAdminNavigation');

adminBurgerBtn.addEventListener('click', () => {
    containerAdminNavigation.style.transform = 'translateX(0)';
    setTimeout(() => {
        closeAdminNavigation.style.opacity = '1';
    }, 200);
});
closeAdminNavigation.addEventListener('click', () => {
    adminNavigation.style.transform = 'translateX(-100%)';
    setTimeout(() => {
        closeAdminNavigation.style.opacity = '0';
    }, 200);
    setTimeout(() => {
        containerAdminNavigation.style.transform = 'translateX(-100%)';
        adminNavigation.style.transform = 'translateX(0)';
    }, 400);
});