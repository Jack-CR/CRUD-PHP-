<?php
    function cerrarSession($cerrarSession){
        session_destroy();
        header("Location:index.php");
    }
?>