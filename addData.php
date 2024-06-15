<?php
// echo "<pre>";
// var_dump($_GET);
// echo "</pre>";

include("conexion.php");

$conexion = conexion();

$nombre = $_GET["name"];
$description = $_GET["description"];
$recomendacion = $_GET["recommendation"];


$sql = "INSERT INTO enfermedad VALUES (NULL, '$nombre','$description','$recomendacion')";

$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: index.php");
}
?>