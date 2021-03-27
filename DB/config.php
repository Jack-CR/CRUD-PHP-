<?php
    try {
        $db=new PDO('mysql:host=localhost;dbname=curso_php','root','');
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    } catch (Exception $e) {
        die("Error ".$e->getMessage());

    }
?>