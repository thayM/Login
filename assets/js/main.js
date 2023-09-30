function exibirSenha(){
    var inputSenha = document.getElementById('senha');
    var btnExibir = document.getElementById('btnSenha');

    if(inputSenha.type === 'password'){
        inputSenha.setAttribute('type','text');
        btnExibir.classList.replace('bi-eye-fill', 'bi-eye-slash-fill');
    }else{
        inputSenha.setAttribute('type','password');
        btnExibir.classList.replace('bi-eye-slash-fill', 'bi-eye-fill');
    }
}