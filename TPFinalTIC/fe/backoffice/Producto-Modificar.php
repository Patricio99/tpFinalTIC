<?php
include '../../be/apis/conn.php';

$conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);
if ($conn->connect_error) {
 die("Conneccion Falllida: " . $conn->connect_error);
}

$c = explode('=',$_SERVER[ 'REQUEST_URI' ]);
$result = explode('/', end($c));

$sql = "SELECT idCategoria, Codigo, Nombre, Precio, Destacado, Descripcion, Imagen FROM productos where id=$result[0]";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row[] = $result->fetch_assoc()) {
    $tem = $row;
  }
} else {
 echo "No hay resultados.";
}
?>

<html>
  <head>
    <script src="../node_modules/jquery/dist/jquery.js"></script>

		<script src="../node_modules\tether\dist\js\tether.js"></script>

		<script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css"/>
		<link rel="stylesheet" href="../node_modules\tether\dist\css\tether.css"/>
  </head>
  <body>
    <form method="post" action="<?=$_SERVER['PHP_SELF']?>" enctype="multipart/form-data">
    </br>
  </br>
      <div class="form-group">
        <label for="formGroupExampleInput2">idCategoría</label>
        <input type="text" class="form-control" name="idCategoria" value="<?php echo $row[0]['idCategoria'];?>">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Código</label>
        <input type="text" class="form-control" name="Codigo" value="<?php echo $row[0]['Codigo'];?>">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Nombre</label>
        <input type="text" class="form-control" name="Nombre" value="<?php echo $row[0]['Nombre'];?>">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Precio</label>
        <input type="text" class="form-control" name="Precio" value="<?php echo $row[0]['Precio'];?>">
      </div>
      <div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" name="Destacado" class="custom-control-input" value="true">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Destacado</span>
      </label>
    </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Descripción</label>
        <input type="text" class="form-control" name="Descripcion" value="<?php echo $row[0]['Descripcion'];?>">
      </div>
      <div>
      <label>
        <input type="file" name="Imagen">
        <span class="custom-file-control"></span>
    </label>
  </div>
    <div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button class="btn btn-primary">Regresar</button>
  </div>
  </form>
  </body>
</html>
