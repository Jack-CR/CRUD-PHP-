<?php
    function actualizar_producto($db,$codigo_producto,$nombre_producto,$seccion_producto,$pais_producto){
        $sql="UPDATE productos SET NOMBREARTÍCULO=:nombre_producto ,
        SECCIÓN=:seccion_producto , PAÍSDEORIGEN=:pais_producto WHERE CÓDIGOARTÍCULO=:codigo_producto";

        $result=$db->prepare($sql);
       
        $result->bindParam(':nombre_producto',$nombre_producto,PDO::PARAM_STR);
        $result->bindParam(':seccion_producto',$seccion_producto,PDO::PARAM_STR);
        $result->bindParam(':pais_producto',$pais_producto,PDO::PARAM_STR);
        $result->bindParam(':codigo_producto',$codigo_producto,PDO::PARAM_STR);

        if($result->execute()==true){
            return true;
        }else{
            return false;
        }

    }
?>