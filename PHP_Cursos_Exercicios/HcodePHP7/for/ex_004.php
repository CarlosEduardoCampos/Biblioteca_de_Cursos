<form>
    <input type="text" name="nome" id="id_nome">
    <input type="date" name="nascimento" id="id_nacimento">
    <input type="submit" value="OK">
</form>

<?php 
    foreach($_GET as $key => $value){
        print "Nome do campo: $key<br>";
        print "Valor do campo: $value<br>";
        echo"<hr>";
    }
?>