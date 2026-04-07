import styles from './Select.module.css';

function Select({type, text, name, options, placeholder, handleOnChange, value})
{
    return (
        <div className={styles.form_control}>
            <label htmlFor={name}>{text}:</label>
            <select type={type} name={name} id={name}>
                <option selected>Selecione uma opção</option>
                {
                    // Varre o array option imprimindo um html_option para cada valor:
                    options.map((option) => (
                        <option value={option.id} key={option.id}>{option.name}</option>
                    ))
                }
            </select>
        </div>
    );
}

export default Select;