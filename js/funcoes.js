    function zoom(a){
        let img = document.getElementsByClassName('img');
        let imagem = [];
    
        for (i=0; i <= img.length; i++){
            imagem.push(img[i]);
        };
    
        
        if(imagem[a].width == 120) {
            imagem[a].width = 240;
        }    
    }

    
    
    function zoomOff(a){
        
        let img = document.getElementsByClassName('img');   
            
        let imagem = [];
        
            
        for (i=0; i <= img.length; i++){
                imagem.push(img[i]);
        };
            
            if(imagem[a].width == 240) {
                imagem[a].width = 120;
            }
            
        }
    