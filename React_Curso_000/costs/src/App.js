import { BrowserRouter as Router, Routes, Route} from "react-router-dom";
// Paginas do site: 
import Home from './componets/pages/Home';
import Contact from './componets/pages/Contact';
import Company from "./componets/pages/Company";
import NewProject from "./componets/pages/NewProject";
import Container from "./componets/layout/Container";
import Navbar from "./componets/layout/Navbar";
import Footer from "./componets/layout/Footer";
import Projects from "./componets/pages/Projects";

function App() {
  return (
    <Router>
      <Navbar/>
      <Container customClass="min-height">
        <Routes>
          <Route exact path="/" element={<Home/>}/>
          <Route exact path="/projects" element={<Projects/>}/>
          <Route exact path="/company" element={<Company/>}/>
          <Route exact path="/contact" element={<Contact/>}/>
          <Route exact path="/newproject" element={<NewProject/>}/>
        </Routes>
      </Container>
      <Footer/>
    </Router>
  )
}

export default App;
