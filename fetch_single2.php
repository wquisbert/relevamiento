<?php 
include('database connection.php');
include('function2.php');

if(isset($_POST["id"]))
{
    $output = array();
    $statement = $connection->prepare("SELECT * FROM caracteristicas WHERE id = '".$_POST["id"]."' LIMIT 1");
    $statement->execute();
    $result = $statement->fetchAll();
    foreach($result as $row)
    {
        $output["id"] = $row["id"];
        $output["lugar"] = $row["lugar"];
        $output["cargo"] = $row["cargo"];
        $output["tipo"] = $row["tipo"];
        $output["marca"] = $row["marca"];
        $output["procesador"] = $row["procesador"];
        $output["memoria"] = $row["memoria"];
        $output["disco"] = $row["disco"];
        $output["compatibilidad"] = $row["compatibilidad"];
        $output["sistemaop"] = $row["sistemaop"];
        $output["ofimatica"] = $row["ofimatica"];
        $output["correo"] = $row["correo"];
        $output["explorador"] = $row["explorador"];
        $output["otros"] = $row["otros"];
        $output["software"] = $row["software"];
    }
    echo json_encode($output);
}
?>