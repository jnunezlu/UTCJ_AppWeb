<DOCTYPE html>
<html>
<head>
	<title>Altas</title>
</head>
<style>
a{
	text-decoration:none;
	width:125px;
	height:23px;
	color:blue;
}
</style>
<body>
 <?php
$servername = "localhost";
$username = "id7778843_admin";
$password = "mysql";
$dbname = "id7778843_test1";




$conn = mysqli_connect($servername, $username, $password, $dbname );

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id=$_POST["id"];
$nombre=$_POST["nombre"];
$ciudad=$_POST["ciudad"];
$edad=$_POST["edad"];
$correo=$_POST["correo"];
	
$sql = "UPDATE info SET nombre='$nombre', ciudad='$ciudad', edad='$edad', correo='$correo' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
   echo"<script>alert('Solicitud exitosa, Se ha actualizado la información ')</script>";


echo"<script  language='javascript'>window.location='tabla.php'</script>";  
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 
</body>
</html>