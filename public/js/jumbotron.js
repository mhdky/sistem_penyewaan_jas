const jumbotron =  document.querySelector('.jumbotron');
burgerBtn.addEventListener('click', () => {
    jumbotron.classList.toggle('jumbotronPtChange');
});

btnShowMainSearchMbl.addEventListener('click', () => {
    jumbotron.classList.remove('jumbotronPtChange');
});