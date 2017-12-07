<?php

include '../../be/apis/conn.php';

$conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);
if ($conn->connect_error) {
 die("Conneccion Falllida: " . $conn->connect_error);
}

$c = explode('=',$_SERVER[ 'REQUEST_URI' ]);
$result = explode('/', end($c));

$sql = "SELECT Nombre FROM categorias where id=$result[0]";


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
        <label for="formGroupExampleInput2">Nombre</label>
        <input type="text" class="form-control" name="Nombre" value="<?php echo $tem[0]['Nombre'];?>">
      </div
    <div>
    <a href="categories.php"><button type="submit" class="btn btn-primary">Submit</button></a>
    <a href="categories.php"><button onclick=""class="btn btn-primary">Regresar</button></a>
  </div>
  </form>
  </body>
</html>
