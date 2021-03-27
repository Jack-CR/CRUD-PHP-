<?php

    function validarUsuario($db,$usuario,$pass){

        $sql="SELECT usuario,contraseña FROM usuario WHERE usuario=:usuario";
        $result=$db->prepare($sql);
        $result->bindParam(':usuario',$usuario,PDO::PARAM_STR);
        
        $result->execute();

        $row=$result->fetch();

        if(password_verify($pass,$row['contraseña'])){
            return true;
        }else{
            return false;
        }
    }
?>