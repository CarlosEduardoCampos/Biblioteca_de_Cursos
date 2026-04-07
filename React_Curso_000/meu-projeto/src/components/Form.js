import {useState} from 'react';

function Form()
{
    const cadastrar = (evento) => {
        evento.preventDefault();
        console.log(`O ususario ${name} -> ${msg} foi cadastrado com sucesso!`);
    }

    const [name='', setName] = useState();
    const [msg='', setMsg] = useState();
    return(
        <div>
            <h1>
                Mensagem:
            </h1>

            <form onSubmit={cadastrar}>
                <div>
                    <label htmlFor='name'> Nome: </label>
                    <input type='text' id='name' name='name' placeholder='Digite o seu nome' onChange={(e) => setName(e.target.value)} value={name}/>
                </div>

                <div>
                    <label htmlFor='msg'> Mensagem: </label>
                    <input type='text' id='msg' name='msg'onChange={(e) => setMsg(e.target.value)}/>
                </div>

                <div>
                    <input type='submit' value='Cadastrar'/>
                </div>
            </form>
        </div>
    )
}

export default Form;