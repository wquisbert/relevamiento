<?php 
include('database connection.php');
include('function3.php');

if(isset($_POST["id"]))
{
    $output = array();
    $statement = $connection->prepare("SELECT * FROM deudas WHERE id = '".$_POST["id"]."' LIMIT 1");
    $statement->execute();
    $result = $statement->fetchAll();
    foreach($result as $row)
    {
        $output["id"] = $row["id"];
        $output["fecha"] = $row["fecha"];
        $output["municipio"] = $row["municipio"];
        $output["procedencia"] = $row["procedencia"];
        $output["hosp"] = $row["hosp"];
        $output["dispox"] = $row["dispox"];
        $output["nropac"] = $row["nropac"];
        $output["saluti"] = $row["saluti"];
        $output["totdec"] = $row["totdec"];
        $output["totdecox"] = $row["totdecox"];

    }
    echo json_encode($output);
}
?>