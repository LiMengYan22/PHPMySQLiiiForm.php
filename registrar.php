<html>

<head>
<title>Registrando..</title>
</head>

<body>
<?php
$host="localhost";
$user="root";
$pass="";
$banco="registro";
$conexion=mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexion,$banco) or die(mysqli_error());
?>

<?php
$nombre=$_POST['nome'];
$email=$_POST['email'];

$sql=mysqli_query($conexion,"INSERT INTO usuarios(nome, email)VALUES ('$nombre', '$email')");
echo "<center><h1>Registrado con exito....</h1></center>
	  <button type='button' class='btn btn-success'><a href='registro.php'>Volver</a> </button";
	 
mysqli_close($conexion);
?>
</body>
</html
