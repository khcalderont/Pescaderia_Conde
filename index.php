<?php
  require('conex.php');
  session_start();
 ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pescadería Conde</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body id="login">

<section align="center">

<?php

try {
    if (isset($_POST['btni'])){ // Si se da click en el botón Ingresar
        if (empty($_POST['txtu']) || empty($_POST['txtp'])) {
            //Si alguno de los campos está en blanco...
            ?>
            <script type="text/javascript"> window.alert("Campos obligatorios!!")</script>
            <?php
        }else{
            $sql= "SELECT * FROM `administrador` WHERE usuario=:user AND pass=:pass";
            $result= $base-> prepare($sql);
            $result-> execute(array(":user"=>$_POST['txtu'], ":pass"=>$_POST{'txtp'}));
    
            while ($consulta=$result->fetch(PDO::FETCH_ASSOC)){
                $_SESSION['usuario']=$consulta['nombre'];// Se crea una variable de sesión a la que se le asigna el nombre "usuario"
            }
            $verificar=$result->rowCount(); // Retorna un número diferente a 0 si la sentencia se ha ejecutado correctamente y lo almacena en $contador...
    
                if ($verificar > 0) { // Es > a 0 si se ha ejecutado la sentecia correctamente 
                    header("location:inicio.php");
                }else{
                    // Si es <= 0 quiere decir que la sentencia no se ejecutó...
                    ?>
                    <script type="text/javascript"> window.alert("Datos Erróneos!!")</script>
                <?php
                
            }
            }
        
    }
} catch (Exception $e) {
    die('Error: '.$e->getMessage());
}
?>

    <form id="formi" action="" method="POST" align="center">
        <table align="center">
            <tr>
                <td colspan="2" align="center">
                <img src="img/logo1.png" alt="" width="80%">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><h1><strong>LOGIN</strong></h1></td>
            </tr>
            <tr>
                <td><strong>User</strong></td>
                <td><input type="text" name="txtu" placeholder="Ingrese su Usuario..."></td>
            </tr>
            <tr>
                <td><strong>Pass</strong></td>
                <td><input type="password" name="txtp" placeholder="Ingrese su Contraseña..."></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="btni" value="Ingresar">
                </td>
            </tr>
        </table>
    </form>


    </section>
</body>

</html>