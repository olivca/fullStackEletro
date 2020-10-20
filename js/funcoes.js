function exibir_categoria(categoria){

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
};

let destaque = (imagem) => {
    console.log(imagem);
    if(imagem.width == 240)
        imagem.width = 120;
    else
        imagem.width=240;
};

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

/*mostra o tamanho da janela no console*/
console.log(window.innerWidth);



