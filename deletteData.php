<?php
// echo "<pre>";
// var_dump($_GET);
// echo "</pre>";

include("conexion.php");

$conexion = conexion();

$id = $_GET["id"];

$sql = "DELETE FROM enfermedadades WHERE id=$id";

$query = mysqli_query($conexion, $sql);


if($query) {
    Header("Location: index.php");
}

?>