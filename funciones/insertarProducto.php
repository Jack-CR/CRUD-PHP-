<?php
    function insertarProducto($db,$codigo_producto,$nombre_producto,$seccion_producto,$pais_producto){
        $sql="INSERT INTO productos (CÓDIGOARTÍCULO,NOMBREARTÍCULO,SECCIÓN,PAÍSDEORIGEN) VALUES 
        (:codigo_producto,:nombre_producto,:seccion_producto,:pais_producto)";

        $result=$db->prepare($sql);
        $result->bindParam(':codigo_producto',$codigo_producto,PDO::PARAM_STR);
        $result->bindParam(':nombre_producto',$nombre_producto,PDO::PARAM_STR);
        $result->bindParam(':seccion_producto',$seccion_producto,PDO::PARAM_STR);
        $result->bindParam(':pais_producto',$pais_producto,PDO::PARAM_STR);
        
        if($result->execute()==true){
            return true;
        }else{
            return false;
        }
    }
?>