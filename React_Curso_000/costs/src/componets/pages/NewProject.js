// Hook de redirecionamento:
import { useHistory } from 'react-router-dom';
// Componentes da pagina:
import ProjectForm from '../project/ProjectForm';
import styles from './NewProject.module.css';

function NewProject(){

    const history = useHistory();

    // Criando a requisição para cadasto
    function createPost(project)
    {
        // Inicia cost e serviços
        project.cost = 0;
        project.services = [];

        // Requisição dos projects
        fetch("http://localhost:5000/projects", {
            method: 'POST',
            headers: {
                'Content-type': 'application/json'
            },
            body: JSON.stringify(project)
        })
        .then(
            (resp) => resp.json()
        )
        .then(
            (data) => {
                console.log(data)
                // redireciona os dados para o banco
            }
        )
        .catch(
            err => console.log(err)
        )
    }

    return (
        <div className={styles.newproject_container}>
            <h1>Criar Projeto</h1>
            <p>Crie seu projeto para depois adicionar os serviços</p>
            <ProjectForm handleSubmit={createPost} btnText="Criar Projeto"/>
        </div>
    );
}

export default NewProject;