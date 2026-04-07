import './css/App.css';
// Hooks:
import {useState} from 'react'; //=> variavel para dados.
import {BrowserRouter as Router, Routes, Route} from 'react-router-dom'; //=> Renderizando paginas para rotas especificas.
/* Componetes fora de uso:
import Condicional from './components/Condicional';
import Pessoa from './components/Pessoa';
import Cabeca from './components/Cabeca';
import List from './components/List';
import Evento from './components/Evento';
import Form from './components/Form';
import OutraLista from './components/OutraLista';
import SeuNome from './components/SeuNome';
import Saudacao from './components/Saudacao';
*/
import Navbar from './components/layout/Navbar';
import Footer from './components/layout/Footer';
import Home from './pages/Home';
import Contato from './pages/Contato';
import Empresa from './pages/Empresa';


function App() {
    const meusItens = ['React', 'Vue', 'Angular'];
    const [nome, setNome] = useState();
    return (
        // Configura as rotas do site
        <Router>
            <Navbar />
            <Routes>
                <Route exact path='/' element={<Home/>} />
                <Route path='/empresa' element={<Empresa/>} />
                <Route path='/contato' element={<Contato/>} />
            </Routes>
            <Footer />
        </Router>
        /*<main className="App">
            <h1>State Lift</h1>
            <SeuNome setNome={setNome}/>
            <Saudacao nome={nome}/>
        </main>*/
        /*<main className="App">
            <h1>Renderização de Listas</h1>
            <OutraLista itens={meusItens}/>
            <OutraLista itens={[]}/>
        </main>*/
        /*<div className='App'>
            <h1>Renderização Condicional</h1>
            <Condicional/>
        </div>*/
        /*<main className="App">
            <Cabeca/>
            <Evento numero = '1'/>
            <h1> Meus Dados</h1>
            <Pessoa nome="Carlos E. C. Rodrigues" idade="21" profissao="Desenvolvedor Beck-end" />
            <Evento numero = '2'/>
            <List/>
            <Form/>
        </main>*/
    );
}

export default App;
