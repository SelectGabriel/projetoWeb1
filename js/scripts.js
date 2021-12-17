function verificaCampos() {
    let v = document.forms["form"]["comentario"].value;
    let g = document.forms["form"]["comentario"].value;
    if (v == ''){
        alert('Seu comentario não pode estar vazio');
        return 0;
    }
    if (g == ''){
        alert('o campo de nome deve ser preenchido');
    return 0;
    }
}
