function checkConfirmPassword() {
    const confirmPassword = document.querySelector('#confirmPassword');
    if (confirmPassword.type === 'password') {
        confirmPassword.type = 'text';
        document.querySelector('.lineEyeConfirmPass').style.height = '0';
    } else {
        confirmPassword.type = 'password';
        document.querySelector('.lineEyeConfirmPass').style.height = '';
    }       
}