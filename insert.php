<?php 
include('database connection.php');
include('function.php');

if(isset($_POST["operation"]))
{
    if($_POST["operation"] == "Add")
    {
        $statement = $connection->prepare("INSERT INTO personal (fecha, hosp, nroing, totcamas, ingresos, egresos, cuidinterm, cuidint, total) VALUES (:fecha, :hosp, :nroing, :totcamas, :ingresos, :egresos, :cuidinterm, :cuidint, :total)");
        //$totalcamas=$_POST["totcamas"];
        //$ing=$_POST["ingresos"];
        //$egr=$_POST["egresos"];
        //$tot=$totalcamas-$ing+$egr;
        $result = $statement->execute(
             array(
                ':fecha'   =>  $_POST["fecha"],
                ':hosp'   =>  $_POST["hospital"],
                ':nroing'   =>  $_POST["nroing"],
                ':totcamas' =>  $_POST["totcamas"],
                ':ingresos' =>  $_POST["ingresos"],
                ':egresos' =>  $_POST["egresos"],
                ':cuidinterm'   =>  $_POST["cuidinterm"],
                ':cuidint'   =>  $_POST["cuidint"],
                ':total' => $_POST["totalcamas"],
             )
        );
    }
    if($_POST["operation"] == "Edit")
    {
        $statement = $connection->prepare("UPDATE personal SET nroing = :nroing, totcamas = :totcamas, ingresos = :ingresos, egresos = :egresos, cuidinterm = :cuidinterm, cuidint = :cuidint, total = :total WHERE id = :id");
        //$totalcamas=$_POST["totcamas"];
        //$ing=$_POST["ingresos"];
        //$egr=$_POST["egresos"];
        //$tot=$totalcamas-$ing+$egr;
        $result = $statement->execute(
             array(
                ':nroing'   =>  $_POST["nroing"],
                ':totcamas'   =>  $_POST["totcamas"],
                ':ingresos'   =>  $_POST["ingresos"],
                ':egresos'   =>  $_POST["egresos"],
                ':cuidinterm'   =>  $_POST["cuidinterm"],
                ':cuidint'   =>  $_POST["cuidint"],
                ':total'   =>  $_POST["totalcamas"],
                ':id'       =>  $_POST["hosp_id"]
             )
        );
    }
    
}
?>