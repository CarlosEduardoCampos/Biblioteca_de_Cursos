<?php 
    print "<select>";   
    for ($i = date("Y"); $i > date("Y")-100 ; $i--) { 
        print "<option value='$i'>$i</option>";
    }
    print "<select>";
?>