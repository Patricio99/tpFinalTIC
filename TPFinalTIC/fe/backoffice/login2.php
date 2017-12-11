<?php
session_start();
$usuario = "prueba";$contraseña = "prueba123";
$user = $pass = "";



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);

  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = test_input($_POST["usuario"]);
  $pass = test_input($_POST["contraseña"]);
}

if ($usuario == $user AND $contraseña == $pass) {
  $_SESSION['login'] = 'true';
  header('Location: categories.php');
}
else {
  $_SESSION['login'] = 'false';
}

?>
<form method="post" action="<?=$_SERVER['PHP_SELF']?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="formGroupExampleInput2">Usuario</label>
    <input type="text" class="form-control" name="usuario" placeholder="Nombre" required/></br>
    <label for="formGroupExampleInput2">Contraseña</label>
    <input type="text" class="form-control" name="contraseña" placeholder="Nombre" required/>
  </div>
<div>
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
