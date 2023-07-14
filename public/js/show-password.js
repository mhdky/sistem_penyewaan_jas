function checkPassword() {
    const inputPassword = document.querySelector('#inputPassword');
    if (inputPassword.type === 'password') {
        inputPassword.type = 'text';
        document.querySelector('.lineEyePass').style.height = '0';
    } else {
        inputPassword.type = 'password';
        document.querySelector('.lineEyePass').style.height = '';
    }       
}