<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
    print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}
$hospital=$_SESSION['hospital'];
?>

<?php

include('database connection.php');
include('function4.php');

$query = '';
$output = array();

$query .= "SELECT * FROM rrhh  WHERE hosp = '".$_SESSION["hospital"]."' ";


if(isset($_POST["order"]))
{
    $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
    $query .= 'ORDER BY id ASC ';
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

    $sub_array[] = $row["nro_enf"];
    $sub_array[] = $row["nro_med"];
    $sub_array[] = $row["nro_lab"];
    $sub_array[] = $row["nro_aux"];
    $sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="btn btn-success btn-sm update">Detalle / Editar</button>';
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