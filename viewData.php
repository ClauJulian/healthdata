<?php 
include("conexion.php");
$conexion = conexion();

$id = $_GET["id"];

$sql = "SELECT * FROM enfermedadades WHERE id=$id";

$query = mysqli_query($conexion, $sql);

include("heather.php");
?> 
<main class="container">
<div class="container d-flex justify-content-center cj-printarea" id="cj-printarea">
    <?php
    while($fila=mysqli_fetch_assoc($query)){
    ?>
    <!-- <p><?php echo $fila["id"] ?></p> -->

    <div class="card border-success" style="max-width: 40rem">
        <h5 class="card-header">Información</h5>
        <div class="card-body">
            <h5 class="card-title"><?php echo $fila["nombre"] ?></h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $fila["recomendacion"] ?></li>
                <li class="list-group-item"><?php echo $fila["recomendacion"] ?></li>
            </ul>
            <p class="card-text"></p>
            <button id="cj-print-btn" type="submit" class="btn btn-success">Print</button>
        </div>
    </div>

    <?php } ?>

</div>
</main>
<?php 
include("footer.php");
?>
