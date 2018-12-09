<!DOCTYPE html>
<html>
<head>
	<title>Informacion registrada</title>
</head>
<body>
	<?php
$servername = "localhost";
$username = "id7778843_admin";
$password = "mysql";
$dbname = "id7778843_test1";



$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$u=$_POST["nombre"];
$e=$_POST["ciudad"];
$p=$_POST["edad"];
$pc=$_POST["correo"];


$sql = "INSERT INTO info (nombre, ciudad, edad, correo) VALUES ('$u', '$e', '$p', '$pc')";

if (mysqli_query($conn, $sql)) {
  echo"<script>alert('Solicitud exitosa, sera redireccionado a la pagina principal, le enviaremos un correo con informaci�n ')</script>";
echo"<script  language='javascript'>window.location='index.html'</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	echo"<script>alert('Solicitud Fallida')</script>";
echo"<script  language='javascript'>window.location='info.html'</script>";

mysqli_close($conn);
}



?>
</body>
</html>
