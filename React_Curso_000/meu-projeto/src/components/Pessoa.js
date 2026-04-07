function Pessoa({nome, idade, profissao, foto}){
    const url = 'https://via.placeholder.com/150';

    return(
        <div>
            <img src = {foto || url} alt = 'Foto do usuario' />
            <h2>{nome}</h2>
            <p>Idade: {idade}</p>
            <p>{profissao}</p>
        </div>
    );
}

export default Pessoa;