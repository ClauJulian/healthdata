<?php 
include("conexion.php");
$conexion = conexion();

$sql = "SELECT * FROM enfermedad";

$query = mysqli_query($conexion, $sql);

include("heather.php");
?> 
<header>
          <!--  Banner -->
          <div class="cj-banner text-end" style="width: 100vw;">
          </div>
          <!-- Fin Banner -->
</header>

<main class="container">
    <div class="container d-flex justify-content-center">
       <table class="table">
           <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>  
                <th scope="col">Recommendation</th> 
                <th scope="col"></th> 
            </tr>
           </thead>
           <tbody>
               <?php
               while($fila=mysqli_fetch_assoc($query)){
                ?>
                   <tr class="cj-trDataList">
                       <!-- <td><?php echo $fila["id"] ?></td> -->
                       <th scope="row" class="cj-thDataName"><?php echo $fila["nombre"] ?></th>
                       <td><div class="cj-tdDescriptionContent"><?php echo $fila["description"] ?></div></td>
                       <td><div class="cj-tdDataContent"><?php echo $fila["recomendacion"] ?></div></td>
                       <td class="cj-tdMethod">
                        <div class="cj-groupBtn">
                            <a title="Delette" href="deletteData.php?id=<?php echo $fila["id"]?>">🗑️</a>
                            <a title="Edit">🖊️</a> 
                            <a title="Print" href="viewData.php?id=<?php echo $fila["id"]?>">🗒️</a> 
                        </div>
                        </td>
                   </tr>
              <?php } ?>
                <!-- FORM FOR ADDING DISEASES     -->
                    <tr class="cj-formAddDisease">
                    <form action="addData.php" method="GET">
                        <th><input type="text" id="name" name="name" class="cj-inputAddData" placeholder="name" required/></th>
                       <td><textarea type="text" id="description" name="description" class="cj-textareaAddData" placeholder="description" required></textarea></td>
                       <td><textarea type="text" id="recommendation" name="recommendation" class="cj-textareaAddData" placeholder="recommendation" required></textarea></td>
                       <td><button class="btn btn-success" id="sendNewData" type="submit">Add Data</button></td>
                    </form>    
                    </tr>
              
           </tbody>
        </table>

    </div>   
</main>
<?php 
include("footer.php");
?>
