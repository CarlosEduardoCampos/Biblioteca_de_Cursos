import Frase from './Frase';

function ImgPenson(){
    const url = 'https://via.placeholder.com/150';

    return(
        <>
            <h2>Hello World</h2>
            <img src = {url} alt = 'Minha imagem'/>
            <Frase/>
        </>
    );
}

export default HelloWorld;