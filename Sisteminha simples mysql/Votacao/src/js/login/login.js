// impede que o usuario digite números
document.querySelector('input[name="matricula"]').addEventListener('input', function (e) {
    var nonDigits = /\D/g;
    if (nonDigits.test(e.target.value)) {
        e.target.value = e.target.value.replace(nonDigits, '');
    }
});

// impede que o usuario digite letras
document.querySelector('input[name="nomeusuario"]').addEventListener('input', function (e) {
    var regex = /^[a-zA-Z]*$/;
    if (!regex.test(this.value)) {
        this.value = this.value.slice(0, -1);
    }
});