// Hooks para coleta de dados:
import { useState, useEffect} from 'react';

// Esturtura componetes do formulario e stilo:
import styles from './ProjectFom.module.css';
import Input from '../form/Inputs';
import Select from '../form/Select';
import SubmitButton from '../form/SubimitButton';

function ProjectForm({handleSubmit, btnText, projectData}){

    // Utilizando Hook useState
    const [categories, setCategories] = useState([]);
    const [project, setProject] = useState(projectData || {});


    // Requisição da url dos dados de Categorias:
    useEffect(()=>{
        fetch("http://localhost:5000/categories",
        {
            method: "GET",
            headers: {'Content-Type': 'application/json'}
        })
        // Se a requisição tiver resposta positiva:
        .then(
            // Estiliza os dados para o modelo json:
            (resp) => resp.json()
        )
        .then(
            (data) => {
                setCategories(data)
            }
        )
        // Se a requisição tiver resposta negativa:
        .catch(
            // Imprime no propt erro da requisição:
            (err) => console.log(err)
        );
    }, []);

    // Metodo de envio do formulario:
    const subimit = (e)=>{
        e.projectDefaul()
        handleSubmit(project
            )
    }
    return( 
        <form method="get" className={styles.form}>
            <Input 
                type="text"
                text="Nome do projeto"
                name="name"
                placeholder="Insira o nome do projeto"
            />

            <Input 
                type="number"
                text="Orçamento do projeto"
                name="budget"
                placeholder="Insira o orçamento total"
            />
            <Select
                name="category_id"
                text="Selecione a categoria"
                options={categories}
            />
            <SubmitButton text={btnText}/>
        </form>
    );
}

export default ProjectForm;