<?php 
include('database connection.php');
include('function3.php');

if(isset($_POST["operation"]))
{
    if($_POST["operation"] == "Add")
    {
        $statement = $connection->prepare("INSERT INTO deudas (fecha, municipio, procedencia, hosp, dispox, nropac, saluti, totdec, totdecox) VALUES (:fecha, :municipio, :procedencia, :hosp, :dispox, :nropac, :saluti, :totdec, :totdecox)");
        
        $result = $statement->execute(
             array(
                
                ':fecha'  =>  $_POST["fecha"],
                ':municipio'  =>  $_POST["municipio"],
                ':procedencia'  =>  $_POST["procedencia"],
                ':hosp'  =>  $_POST["hosp"],
                ':dispox'  =>  $_POST["dispox"],
                ':nropac'  =>  $_POST["nropac"],
                ':saluti'  =>  $_POST["saluti"],
                ':totdec'  =>  $_POST["totdec"],
                ':totdecox'  =>  $_POST["totdecox"],
             )
        );
    }
    if($_POST["operation"] == "Edit")
    {
        $statement = $connection->prepare("UPDATE deudas SET fecha = :fecha, municipio = :municipio, procedencia = :procedencia, hosp = :hosp, dispox = :dispox, nropac = :nropac, saluti = :saluti, totdec = :totdec, totdecox = :totdecox WHERE id = :id");
       
        $result = $statement->execute(
             array(
                ':fecha'   =>  $_POST["fecha"],
                ':municipio'   =>  $_POST["municipio"],
                ':procedencia'   =>  $_POST["procedencia"],
                ':hosp'   =>  $_POST["hosp"],
                ':dispox'   =>  $_POST["dispox"],
                ':nropac'   =>  $_POST["nropac"],
                ':saluti'   =>  $_POST["saluti"],
                ':totdec'   =>  $_POST["totdec"],
                ':totdecox'   =>  $_POST["totdecox"],
                ':id'       =>  $_POST["hosp_id"]
             )
        );
    }
    
}
?>