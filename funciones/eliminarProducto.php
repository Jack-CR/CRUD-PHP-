<?php
    function eliminarProducto($db,$codigo_producto){
        $sql="DELETE FROM productos WHERE CÓDIGOARTÍCULO=:codigo_producto";
        $result=$db->prepare($sql);
        $result->bindParam(':codigo_producto',$codigo_producto,PDO::PARAM_STR);

        if($result->execute()==true){
            return true;
        }else{
            return false;
        }
    }
?>