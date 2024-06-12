<?php
session_start();
if(!isset($_SESSION["idus"]) || $_SESSION["idus"]==null){
    print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}
$hospital=$_SESSION['lugar'];
?>

<?php

include('database connection.php');
include('function2.php');

$query = '';
$output = array();

$query .= "SELECT * FROM caracteristicas  WHERE lugar = '".$_SESSION["lugar"]."' ";


if(isset($_POST["order"]))
{
    $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
    $query .= 'ORDER BY id DESC ';
}

if($_POST["length"] != -1)
{
    $query .= 'LIMIT ' .$_POST['start']. ', ' .$_POST['length'];
}
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
    $sub_array = array();

    $sub_array[] = $row["id"];
    $sub_array[] = $row["cargo"];
    $sub_array[] = $row["procesador"];
    $sub_array[] = $row["memoria"];
    $sub_array[] = $row["disco"];
    $sub_array[] = $row["sistemaop"];
    $sub_array[] = $row["ofimatica"];
    $sub_array[] = $row["explorador"];
    $sub_array[] = $row["software"];
    $sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="btn btn-success btn-sm update">Editar</button>';
    $sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-sm delete">Borrar</button>';
    $data[] = $sub_array;
}
$output = array(
    "draw"              =>  intval($_POST["draw"]),
    "recordsTotal"      =>  $filtered_rows,
    "recordsFiltered"   =>  get_total_all_records(),
    "data"              =>  $data
);
echo json_encode($output);
?>