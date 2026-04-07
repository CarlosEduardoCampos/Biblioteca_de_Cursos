import { Box } from '@mui/system';
import { useTheme, Drawer, Avatar, Divider, List, ListItemButton, ListItemIcon, ListItemText, Icon, useMediaQuery } from '@mui/material';
import { useDrawerContext } from '../../contexts';
import { useMatch, useNavigate, useResolvedPath } from 'react-router-dom';

interface IListItemLinkProps{
    to: string;   // Caminho do Link;
    icon: string; // Imagen do Link;
    label: string;// Titulo do Link;
    onClick: (() => void) | undefined; // Chamada de evento;
}

// Opção de menu(Lista de navegação):
const ListItemLink: React.FC<IListItemLinkProps> = ({to, icon, label, onClick}) => {
    // Navega para uma nova rota:
    const navigate = useNavigate();

    // Manter opção do Menu marcada:
    const reselvedPath = useResolvedPath(to);

    // Verifica qual rota esta selecionando:
    const math = useMatch({path:reselvedPath.pathname, end:false});

    const handleClick= () =>{
        navigate(to);// Endereço de destino;
        // ?. Ferifica se a função e undefined e executa se não for:
        onClick?.();// Fecha o menu lateral;
    };
    return(
        <ListItemButton selected={!!math} onClick={handleClick}>
            <ListItemIcon>
                <Icon>{icon}</Icon>
            </ListItemIcon>
            <ListItemText primary={label}/>
        </ListItemButton>
    );
};

export const MenuLateral: React.FC <{children: React.ReactNode}> = ({ children }) => {
    // Recebe caracteristicas do tema atual:
    const theme = useTheme();

    // Cofinguração de responsividade:
    const smDown = useMediaQuery(theme.breakpoints.down('sm'));

    // Contexto de tamanho de tela:
    const {isDrawerOpen, toggleDrawerOpen, drawerOptions} = useDrawerContext();

    return(
        <>
            <Drawer 
                open={isDrawerOpen}
                variant={smDown?'temporary':'permanent'}
                onClose={toggleDrawerOpen}
            >
                <Box 
                    width={theme.spacing(28)}
                    height='100%'
                    display='flex'
                    flexDirection='column'
                >
                    <Box 
                        width='100%'
                        height={theme.spacing(20)}
                        display='flex'
                        alignItems='center'
                        justifyContent='center'
                    >
                        <Avatar
                            sx={{height:theme.spacing(10), width:theme.spacing(10)}}
                            src='#'
                        />
                    </Box>
                    <Divider/>
                    <Box
                        flex={1}
                    >
                        <List component='nav'>
                            {drawerOptions.map(drawerOption => (
                                <ListItemLink
                                    key={drawerOption.path}
                                    icon='home'
                                    label='Página Inicial'
                                    to='/page-inicial'
                                    onClick={smDown ? toggleDrawerOpen : undefined}
                                />
                            ))}
                        </List>
                    </Box>
                </Box>
            </Drawer>

            <Box height='100vh' marginLeft={smDown?0:theme.spacing(28)}>
                {children}
            </Box>
        </>
    );
};