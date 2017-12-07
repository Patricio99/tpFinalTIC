<?php

$Nombre = "";
$booleano = false;

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);

  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Nombre = test_input($_POST["Nombre"]);
  $booleano = true;
}

include '../../be/apis/conn.php';

if (!empty($_POST)) {
    // handle post data

    // Create connection
    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if($booleano) {
      // lo guardo en la bd
      $sql = "INSERT INTO Categorias (Nombre)
      VALUES ('" . $Nombre . "')";

echo $sql;
      $result = $conn->query($sql);

      header('Location: categories.php');
    } else {
      // show error to users
    }
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
  </br>
  </br>
    <form method="post" action="<?=$_SERVER['PHP_SELF']?>" enctype="multipart/form-data">
      <div class="form-group">
        <label for="formGroupExampleInput2">Nombre</label>
        <input type="text" class="form-control" name="Nombre" placeholder="Nombre">
      </div>
    <div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button class="btn btn-primary">Regresar</button>
  </div>
  </form>
  </body>
</html>
