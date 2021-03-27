<?php

    function registroUsuario($db,$usuario,$pass){

        $pass=password_hash($pass,PASSWORD_DEFAULT);

        $sql="INSERT INTO usuario (usuario,contraseña) VALUES
        (:usuario,:pass)";
        $result=$db->prepare($sql);
        $result->bindParam(':usuario',$usuario,PDO::PARAM_STR);
        $result->bindParam(':pass',$pass,PDO::PARAM_STR);
        
        $result->execute();

        if($result==true){
            return true;
        }else{
            return false;
        }
    }
?>