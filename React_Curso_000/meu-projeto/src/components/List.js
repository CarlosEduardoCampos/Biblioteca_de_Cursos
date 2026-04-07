import Item from './Item';

function List(){
    return(
        <>
            <h1> Meus Projetos </h1>
            <ul>
                <Item nome="Projeto 01"/>
                <Item nome="Projeto 02"/>
                <Item nome="Projeto 03" />
            </ul>
        </>
    );
}

export default List;