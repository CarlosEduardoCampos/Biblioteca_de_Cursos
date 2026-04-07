import { useState } from "react";

function Condicional() {
    const [email, setEmail] = useState();
    const [userEmail, setUserEmail] = useState();

    const enviarEmail = (e) => {
        e.preventDefault();
        setUserEmail(email);
    }

    const limparEmail = () => {
        setUserEmail("");
    }
    return(
        <>
            <h2> Cadastre o seu e-mail: </h2>
            <form>
                <input type="email" placeholder="Digite o seu e-mail ..." onChange={(e) => setEmail(e.target.value)}/>
                <button onClick={enviarEmail}> Enviar email</button>
                {userEmail && (
                    <div>
                        <p>O e-mail do usuário é: {userEmail}</p>
                        <button onClick={limparEmail}>Limpar Email</button>
                    </div>
                )}
            </form>
        </>
    )
}

export default Condicional;