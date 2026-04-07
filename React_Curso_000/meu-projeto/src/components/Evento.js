import Button from './Button'

function Evento(){
    const meuEvento = () =>{
        console.log(`Opa o primeiro evento foi ativado!`);
    }
    const segundoEvento = () =>{
        console.log('Opa o segundo evento foi ativado!');
    }
    return(
        <>
            <p>Clique para disparar um Evento</p>
            <Button event={meuEvento} text="Primeiro Evento"/>
            <Button event={segundoEvento} text="Segundo Evento"/>
        </>
    );
}

export default Evento;