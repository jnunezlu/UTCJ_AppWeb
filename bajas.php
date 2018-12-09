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

$id=$_POST["id"];

$sql="DELETE FROM info WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
  echo"<script>alert('Baja Exitosa!')</script>";
echo"<script  language='javascript'>window.location='bajas.html'</script>";  
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);


mysqli_close($conn);
}



?>
</body>
</html>