function alertaExclusao(id){
    
    var identificador = id;
    var confirmar = confirm("Deseja realmente deletar?");
    
    if (confirmar === true){
           window.location.href = "excluir.php?id=" + identificador;
        };
    }