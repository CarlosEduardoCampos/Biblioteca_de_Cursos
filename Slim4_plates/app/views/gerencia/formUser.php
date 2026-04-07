<?php 
    $this->layout('menu', ['titulo' => $titulo, 'usuario' => $usuario, 'post' => $post, 'btn' => $btn]);
?>
<section id="createForm">
    <h1> <?= $titulo ?> </h1>
    <form action=<?= $post ?> method="post">
        <div class="inputs form-group2">
            <div class="input-wrapper">
                <label for="login">Login</label>
                <input type="text" name="login" placeholder="FirstName" value="<?=$usuario['login']?>" required>
                <div class="warning">
                    <img src="../img/error.png" alt="ícone de alerta">
                    O campo Login e obrigatorio!
                </div>
            </div>
            <div class="input-wrapper col2">
                <label for="email">E-mail</label>
                <input type="email" name="email" placeholder="E-mail" value="<?=$usuario['email']?>" required>
                <div class="warning">
                    <img src="../img/error.png" alt="ícone de alerta">
                    O campo E-mail e obrigatorio!
                </div>
            </div>

            <div class="input-wrapper" <?php if ($usuario['id_usuario']!=0){echo('style="display:none"');} ?> >
                <label for="senha">Password</label>
                <input type="password" name="senha" placeholder="Password" required>
                <input type="hidden" name="id" placeholder="37 9999999" value="<?=$usuario['id_usuario']?>" required>
                <div class="warning">
                    <img src="../img/error.png" alt="ícone de alerta">
                    O campo Password e obrigatorio!
                </div>
            </div>

            <div class="input-wrapper">
                <label for="senha">Celular</label>
                <input type="tel" name="telefone" placeholder="37 9999999" value="<?=$usuario['telefone']?>" required>
                <div class="warning">
                    <img src="../img/error.png" alt="ícone de alerta">
                    O campo Celular e obrigatorio!
                </div>
            </div>
        </div>
        
        <button type="submit" class="form_btn"><?=$btn?></button>
    </form>
</section>

