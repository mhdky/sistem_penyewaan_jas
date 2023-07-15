const about = document.querySelector('.about');
const containerAbout = document.querySelector('.containerAbout');
const closeAbout = document.querySelector('.closeAbout');
const btnAbout = document.querySelector('.btnAbout');
const btnAboutDesktop = document.querySelector('.btnAboutDesktop');

// show about mobile
btnAbout.addEventListener('click', () => {
    about.style.display = 'block';
    containerAbout.style.display = 'block';
    containerAbout.style.opacity = '0';
    setTimeout(() => {
        containerAbout.style.transform = 'translateY(0)'
        containerAbout.style.opacity = '1';
    }, 100);
});
// show about desktop
btnAboutDesktop.addEventListener('click', () => {
    about.style.display = 'block';
    containerAbout.style.display = 'block';
    containerAbout.style.opacity = '0';
    setTimeout(() => {
        containerAbout.style.transform = 'translateY(0)'
        containerAbout.style.opacity = '1';
    }, 100);
});
// close about mobile & desktop
closeAbout.addEventListener('click', () => {
    containerAbout.style.transform = 'translateY(40px)';
    containerAbout.style.opacity = '1';
    setTimeout(() => {
        containerAbout.style.opacity = '0';
    }, 100);
    setTimeout(() => {
        containerAbout.style.display = 'none';
        about.style.display = 'none';
    }, 300);
});