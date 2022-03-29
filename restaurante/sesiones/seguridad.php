<?php
if($_SESSION["autenticado"] != 1 && $_SESSION["autenticado"] != 2){
    header("Location:index.php");
}
?>


