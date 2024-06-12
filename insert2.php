<?php 
include('database connection.php');
include('function2.php');

if(isset($_POST["operation"]))
{
    if($_POST["operation"] == "Add")
    {
        $statement = $connection->prepare("INSERT INTO caracteristicas (lugar, cargo, tipo, marca, procesador, memoria, disco, compatibilidad, sistemaop, ofimatica, correo, explorador, otros, software) VALUES (:lugar, :cargo, :tipo, :marca, :procesador, :memoria, :disco, :compatibilidad,  :sistemaop, :ofimatica, :correo, :explorador, :otros, :software)");
        
        $result = $statement->execute(
             array(
                
                ':lugar'   =>  $_POST["lugar"],
                ':cargo'   =>  $_POST["cargo"],
                ':tipo'   =>  $_POST["tipo"],
                ':marca'   =>  $_POST["marca"],
                ':procesador'   =>  $_POST["procesador"],
                ':memoria'   =>  $_POST["memoria"],
                ':disco'   =>  $_POST["disco"],
                ':compatibilidad'   =>  $_POST["compatibilidad"],
                ':sistemaop' =>  $_POST["sistemaop"],
                ':ofimatica' =>  $_POST["ofimatica"],
                ':correo' =>  $_POST["correo"],
                ':explorador' =>  $_POST["explorador"],
                ':otros' =>  $_POST["otros"],
                ':software' =>  $_POST["software"],
             )
        );
    }
    if($_POST["operation"] == "Edit")
    {
        $statement = $connection->prepare("UPDATE caracteristicas SET lugar = :lugar, cargo = :cargo, tipo = :tipo, marca = :marca, procesador = :procesador, memoria = :memoria, disco = :disco, compatibilidad = :compatibilidad, sistemaop = :sistemaop, ofimatica = :ofimatica, correo = :correo, explorador = :explorador, otros = :otros, software = :software WHERE id = :id");
       
        $result = $statement->execute(
             array(
                ':lugar'   =>  $_POST["lugar"],
                ':cargo'   =>  $_POST["cargo"],
                ':tipo'   =>  $_POST["tipo"],
                ':marca'   =>  $_POST["marca"],
                ':procesador'   =>  $_POST["procesador"],
                ':memoria'   =>  $_POST["memoria"],
                ':disco'   =>  $_POST["disco"],
                ':compatibilidad'   =>  $_POST["compatibilidad"],
                ':sistemaop'   =>  $_POST["sistemaop"],
                ':ofimatica'   =>  $_POST["ofimatica"],
                ':correo'   =>  $_POST["correo"],
                ':explorador'   =>  $_POST["explorador"],
                ':otros'   =>  $_POST["otros"],
                ':software'   =>  $_POST["software"],
                ':id'       =>  $_POST["id"]
             )
        );
    }
    
}
?>