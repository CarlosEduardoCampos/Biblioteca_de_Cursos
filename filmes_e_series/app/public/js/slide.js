var p = 0;
function slide(n){
    if(n === 1){
        if(p < 2 ){
            p++
        }
        else if(p == 0){
            p == 2;
        }
        else{
            p--
        }
        document.getElementById('img').src ="imagens/img0"+p+".jpg";
    }
    else if(n === 2){
        if(p > 0){
            p--;
        }
        else if(p == 2){
            p == 0;
        }
        else{
            p++;
        }
        document.getElementById('img').src ="imagens/img0"+p+".jpg";
    }
}