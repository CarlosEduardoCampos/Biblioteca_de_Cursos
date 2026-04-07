<?php 
namespace app\controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

// Models
use app\models\Usuario;

class UserController
{
    // Cofirmação de login:
    public function login(Request $request, Response $response)
    {
        $user = new Usuario();
        $user -> setLogin($_POST['login']);
        $user -> setSenha($_POST['senha']);
        $data = $user->log();

        if (count($data) != 0) {
            $_SESSION['Usuario'] = $data[0];

            return $response
            ->withHeader('Location', '/user/form/'.$data[0]['id_usuario'])
            ->withStatus(302);
        }
        else{
            view('login');
            return $response->withStatus(200);
        }
    }
    // Pagina apresenta uma lista de todos os usuarios:
    public function list(Request $request, Response $response)
    {
        Usuario::verifyLogin();
        $user = new Usuario();
        viewAdmin('listUser', ['usuarios' => $user->getList()]);
        return $response->withStatus(200);
    }
    // Formulario de dados do usuarios:
    public function form(Request $request, Response $response, array $args)
    {
        Usuario::verifyLogin();
        // Verifica se $args está definido, caso contrário, define como 0:
        $args = isset($args) ?  $args : ['id'=>0];
        $id = $args['id'];
        $user = new Usuario();
        $data = $user->loadById((int)$id);

        // Testa se foi encontrado um usuario Se(sim)-> Carrega os dados encontrado, (nao)-> Carrega dados vazio:
        if(count($data) > 0)
        {
            viewAdmin('formUser', [
                'titulo'  => 'Formulario de Edição',
                'usuario' => $data[0],
                'post'    => '/user/update',
                'btn'     => 'Editar Usuario'
            ]);
            return $response->withStatus(200);
        }
        else{
            viewAdmin('formUser', [
                'titulo'  => 'Formulario de Cadastro',
                'usuario' => $user->__toArray(),
                'post'    => '/user/create',
                'btn'     => 'Criar Usuario'
            ]);
            return $response->withStatus(200);
        }
    }
    // Deleta um cadastro do banco de dados:
    public function delete(Request $request, Response $response, array $args)
    {
        Usuario::verifyLogin();
        $id = $args['id'];
        $user = new Usuario();
        $user->delete($id);
        return $response
        ->withHeader('Location', '/user/list')
        ->withStatus(302);
    }
    # Cadastra um novo usuario no banco:
    public function create(Request $request, Response $response)
    {
        Usuario::verifyLogin();
        $user = new Usuario();
        $user->setLogin   ($_POST['login']);
        $user->setEmail   ($_POST['email']);
        $user->setSenha   ($_POST['senha']);
        $user->setTelefone($_POST['telefone']);
        $user->create();
        return $response
        ->withHeader('Location', '/user/list')
        ->withStatus(302);
    }
    # Cadastra um novo usuario no banco:
    public function update(Request $request, Response $response)
    {
        Usuario::verifyLogin();
        $user = new Usuario();
        $user->setIdUsuario($_POST['id']);
        $user->setLogin    ($_POST['login']);
        $user->setEmail    ($_POST['email']);
        $user->setSenha    ($_POST['senha']);
        $user->setTelefone ($_POST['telefone']);
        $user->update();
        return $response
        ->withHeader('Location', '/user/form/'.$_POST['id'])
        ->withStatus(302);
    }
}
?>