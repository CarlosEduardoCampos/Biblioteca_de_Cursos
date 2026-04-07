import PropsTypes from 'prop-types';
import styles from '../css/components/Item.module.css';

function Item(props) {
    return(
        <>
            <li className={styles.list}>
                <h4> {props.nome} </h4>
                <p> {props.descricao} </p>
                <a href={props.link} className={styles.link}>Click Aqui!!!</a>
            </li>
        </>
    );
}

// Trata as informações enviadas no props
Item.propTypes = {
    nome: PropsTypes.string.isRequired,
    descricao: PropsTypes.string,
    link: PropsTypes.string
}

// Da valores padrões para o props
Item.defaultProps = { 
    nome: 'Um programador ai',
    descricao: 'Descrição Rapida do projeto',
    link: 'https://github.com/CarlosEduardoCampos'
}

export default Item;