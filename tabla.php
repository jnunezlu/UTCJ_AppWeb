<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Usuarios</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
        <style type="text/css">
<!--
.Estilo1 {color: #339900}
-->
        </style>
</head>
    <body>
    <div class="container">
      <!-- Codrops top bar -->
      <!--/ Codrops top bar -->
      <header>
        <h1>&nbsp;</h1>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </header>
      <section>
        <div id="container_demo" >
          <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
          <a class="hiddenanchor" id="toregister"></a> <a class="hiddenanchor" id="tologin"></a>
          <div id="wrapper">
            <div id="login" class="animate form">
              <form  action="bajas.php" autocomplete="on">
                <h1 align="center">Tabla de registros </h1>
                <p>
                   <?php
$servername = "localhost";
$username = "id7778843_admin";
$password = "mysql";
$dbname = "id7778843_test1";



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname );
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	
$sql = "SELECT * FROM info";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table><tr><th>Id     </th><th>Nombre</th><th>Ciudad</th><th>Edad</th><th>Correo</th></tr>";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["id"] . "</td><td>".$row["nombre"]."</td><td>".$row["ciudad"]."</td><td>".$row["edad"]."</td><td>".$row["correo"]."</td></tr>";
    }
    echo "</table><p>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
                </p>
                <p>&nbsp;</p>
                <p class="keeplogin">&nbsp;</p>
                <p class="login button">
                  <a href="hiddenindex.html">
                  <input name="submit2" type="button" value="Regresar" />
                  </a><a href="actualizar.html">
                  <input name="submit23" type="button" value="Actualizar" />
                  </a><a href="bajas.html">
                  <input name="submit24" type="button" value="Eliminar" />
                  </a></p>
                <p class="change_link">&nbsp;</p>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
    </body>
</html>