import styles from '../css/components/Frase.module.css';

function Cabeca(){
    
    return(
        <div className={styles.fraseContainer}>
            <p className={styles.fraseContent}></p>
        </div>
    );
}

export default Cabeca;