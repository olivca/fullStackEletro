/*function exibir_categoria(categoria){

    let elementos = document.getElementsByClassName('box_produto');
    console.log(elementos);

    for(var i=0; i < elementos.length; i++){
        console.log(elementos[i].id);
        if(categoria == elementos[i].id)
        elementos[i].style = "display:block-inline";
        else
        elementos[i].style = "display:none";
    } 
}

let exibir_todos = () => {
    let elementos = document.getElementsByClassName('box_produto');

    for(var i=0; i < elementos.length; i++){
        console.log(elementos[i].id);
        elementos[i].style = "display:block-inline";
    } 
}; */


function destaque(){
    var img = document.getElementsByClassName('img');

    for (i=0; i <= img.length; i++){
        var imagem = img[i];

    if(imagem.width == 150) 
        imagem.width = 340;
    else
        imagem.width= 150;  

    }   

}


/*

function destaque(){
    let img = document.getElementById("img");
    
    if(img.width == 200)
        img.width = 240;
    else
        img.width=200;
}


function teste() {
   let elemento = document.getElementById("prod");
   elemento.style.color = 'Aquamarine';

} 

function teste2() {
    let elementoloja = document.getElementById("loj")
    elementoloja.style.color = 'Aquamarine';
}

function teste3(params) {
    let elementocont = document.getElementById("cont")
    elementocont.style.color = 'Aquamarine';
}

*/


