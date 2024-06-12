<?php 
include('database connection.php');
include('function.php');

if(isset($_POST["id"]))
{
    $output = array();
    $statement = $connection->prepare("SELECT * FROM solicitudes WHERE id = '".$_POST["id"]."' LIMIT 1");
    $statement->execute();
    $result = $statement->fetchAll();
    foreach($result as $row)
    {
        $output["id"] = $row["id"];
        $output["fecha"] = $row["fecha"];
        $output["nroing"] = $row["nroing"];
        $output["totcamas"] = $row["totcamas"];
        $output["ingresos"] = $row["ingresos"];
        $output["egresos"] = $row["egresos"];
        $output["cuidinterm"] = $row["cuidinterm"];
        $output["cuidint"] = $row["cuidint"];
        $output["total"] = $row["total"];
    }
    echo json_encode($output);
}
?>