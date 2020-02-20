function deletar(link, codigo)
{
    if (confirm('Você tem certeza?')) {  
        location.href = 'functions/' + link + '?request=' + codigo;
    }
}

function apenas_num() {
    var e = event;
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        e.preventDefault();
        return false;
    }
}