<?php 
include('database connection.php');
include('function4.php');

if(isset($_POST["operation"]))
{
    if($_POST["operation"] == "Add")
    {
        $statement = $connection->prepare("INSERT INTO rrhh (hosp, nro_enf, nro_med, nro_lab, nro_aux) VALUES (:hosp, :nro_enf, :nro_med, :nro_lab, :nro_aux)");
        
        $result = $statement->execute(
             array(
                
                ':hosp'  =>  $_POST["hosp"],
                ':nro_enf'  =>  $_POST["nro_enf"],
                ':nro_med'  =>  $_POST["nro_med"],
                ':nro_lab'  =>  $_POST["nro_lab"],
                ':nro_aux'  =>  $_POST["nro_aux"],
             )
        );
    }
    if($_POST["operation"] == "Edit")
    {
        $statement = $connection->prepare("UPDATE rrhh SET nro_enf = :nro_enf, nro_med = :nro_med, nro_lab = :nro_lab, nro_aux = :nro_aux WHERE id = :id");
       
        $result = $statement->execute(
             array(
                
                ':nro_enf'   =>  $_POST["nro_enf"],
                ':nro_med'   =>  $_POST["nro_med"],
                ':nro_lab'   =>  $_POST["nro_lab"],
                ':nro_aux'   =>  $_POST["nro_aux"],
                ':id'       =>  $_POST["hosp_id"]
             )
        );
    }
    
}
?>