<?php 
include("conexion.php");
$conexion = conexion();

// $id= 2;
$sql = "SELECT * FROM enfermedad";
// $sqlByID = "SELECT * FROM enfermedad WHERE id LIKE ".$id;

$query = mysqli_query($conexion, $sql);

include("heather.php");
?> 

<main class="container">
    <div>
       <table class="table">
           <thead>
            <tr>
                <!-- <th>Id</th> -->
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>  
                <th scope="col">Recomendacion</th> 
                <th scope="col">Print</th> 
            </tr>
           </thead>
           <tbody>
               <?php
               while($fila=mysqli_fetch_assoc($query)){
                   ?>
                   <tr>
                       <!-- <td><?php echo $fila["id"] ?></td> -->
                       <th scope="row"><?php echo $fila["nombre"] ?></th>
                       <td><?php echo $fila["description"] ?></td>
                       <td><?php echo $fila["recomendacion"] ?></td>
                       <td><button>Print</button></td>
                   </tr>
              <?php } ?>
              
           </tbody>
           </table>
    </div>   
</main>
<?php 
include("footer.php");
?>
</body>
</html> 