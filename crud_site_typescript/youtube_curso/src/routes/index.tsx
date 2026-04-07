import {Button} from '@mui/material';
import{ Routes, Route, Navigate} from 'react-router-dom';
import {useDrawerContext} from '../shared/contexts';
import { useEffect } from 'react';

export const  AppRoutes = () =>{
    
    const {toggleDrawerOpen, setDrawerOptions} = useDrawerContext();

    useEffect(() => {
        setDrawerOptions([
            {
                icon: 'home',
                path: '/pagina-inicial',
                label: 'Página Inicial',
            },
            {
                icon: 'star',
                path: '/cidades',
                label: 'Cidades',
            }, 
        ]);
    }, []);

    return(
        <Routes>
            <Route path='/page-inicial' element={<Button variant='contained' color='primary' onClick={toggleDrawerOpen}>Mudar Menu</Button>} />
            <Route path='*' element={<Navigate to='/page-inicial'/>} />
        </Routes>
    );
};