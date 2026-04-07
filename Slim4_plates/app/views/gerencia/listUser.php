<?php 
    $this->layout('menu', ['usuarios' => $usuarios]);
?>
<div id="list">
    <h1>Lista de usuarios</h1>
    <table>
        <tr class="titulos">
            <td> Login </td>
            <td> E-mail </td>
            <td> Editar </td><!--Botão de Edição-->
            <td> Deletar </td><!--Botão de Deletar-->
        </tr>
        <?php foreach ($usuarios as $user){
            echo '<tr>';
                echo'<td>'.$user['login'].'</td>';
                echo'<td>'.$user['email'].'</td>';
                
                echo'<td>';#<!--Botão de Edição-->
                    echo'<a href="/user/form/'. $user['id_usuario'].'"><i class="fa fa-edit"></i></a></td>';

                echo'<td>';#<!--Botão de Deletar-->
                    echo'<a href="/user/delete/'. $user['id_usuario'].'"><i class="fa fa-trash" style="color: red;"></i></a>';
                echo'</td>';
            echo'</tr>';
        }?>
    </table>
</div>

<ul class="list_btn">
    <li>
        <a href="/user/form/0" class="plus_btn">
            <i class='bx bx-plus'></i>
        </a>
    </li>
</ul>