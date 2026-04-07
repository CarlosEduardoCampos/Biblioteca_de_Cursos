<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        width: 100vw;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }
    img{
        border: solid 1px #000;
        border-radius: 50%;
        margin-bottom: 50px;
    }
    form{
        width: 300px;
        height: 200px;
    }

    .list_inputs{
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        font-size: 1rem;
        padding: 10px;
        border: solid 1px #000;
        border-radius: 10% 10% 0 0;
    }

    .box_input{
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.5rem;
    }
    
    input{
        font-size: 1.2rem;
        padding: 5px;
        border-radius: 10px;
    }

    button{
        width: 322px;
        font-size: 2rem;
        text-align: center;
        padding: 5px;
        border-radius: 0 0 30px 30px;
        border-top: none;
    }

    button:hover{
        background-color: blue;
        color: #fff;
    }
</style>
<body>
    <img src="./img/user.png" alt="">
    <form action="/login" method="post">
        <div class="list_inputs">
            <div class="box_input">
                <label for="login">Login</label>
                <input type="text" name="login">
            </div>
            <div class="box_input">
                <label for="senha">Senha</label>
                <input type="password" name="senha">
            </div>
        </div>
        <button type="submit" class="form_btn">ENTRAR</button>
    </form>
</body>
</html>