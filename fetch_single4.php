<?php 
include('database connection.php');
include('function3.php');

if(isset($_POST["id"]))
{
    $output = array();
    $statement = $connection->prepare("SELECT * FROM rrhh WHERE id = '".$_POST["id"]."' LIMIT 1");
    $statement->execute();
    $result = $statement->fetchAll();
    foreach($result as $row)
    {
        $output["id"] = $row["id"];
        $output["hosp"] = $row["hosp"];
        $output["nro_enf"] = $row["nro_enf"];
        $output["nro_med"] = $row["nro_med"];
        $output["nro_lab"] = $row["nro_lab"];
        $output["nro_aux"] = $row["nro_aux"];

    }
    echo json_encode($output);
}
?>