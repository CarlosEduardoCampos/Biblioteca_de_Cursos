<?php 
    require_once('config.php');

    # Inicia um novo Usuario:
    //$root = new Usuario();

    # Carrega dados um usuario:
    // $root->loadById(1);
    // echo $root;

    # Carrega uma lista com os dados de usuários:
    //$lista = $root::getList();
    //echo json_encode($lista);

    # Carrega uma lista de usuários buscando pelo login:
    //$search = $root::search("ad");
    //echo json_encode($search);

    # Carrega dados de um usuario autenticando:
    //$login = $root->login('ADMIN', 'ADMIN');
    //echo $root;

    # Cadastra um novo usuario no banco:
    //$aluno = new Usuario();
    //$aluno->setDesLogin('aluno000');
    //$aluno->setDesSenha('aluno$@2023');
    //$aluno->insert();
    //echo $aluno;

    # Cadastra um novo usuario no banco:
    //$aluno = new Usuario('aluno001', 'aluno$%2023');
    //$aluno->insert();
    //echo $aluno;

    # Edita um cadastro no banco:
    //$usuario = new Usuario();
    //$usuario->loadById(4);
    //$usuario->update('professor', 'Mateus22/10/94');
    //echo $usuario;

    # Deletar um cadastro do banco:
    $usuario = new Usuario();
    $usuario->loadById(5);
    $usuario->delete();
    echo $usuario;
?>