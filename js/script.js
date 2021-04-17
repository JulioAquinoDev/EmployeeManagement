function mudar(md){
    var display = document.getElementById(md).style.display;
    if(display == "none"){
        document.getElementById(md).style.display ='block';
        document.getElementById("bt_exibir").innerHTML="Ocultar";
    }else{
        document.getElementById(md).style.display = 'none';
        document.getElementById("bt_exibir").innerHTML="Exibir";
    }

}

function mudarForm(ind){
    var display = document.getElementById(ind).style.display;
    if(display =='none'){
        document.getElementById(ind).style.display ='block';
    }else{
        document.getElementById(ind).style.display = 'none';
    }
}