
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

<?php
require ('conex.php'); // Conexión a la BD
session_start();

if(isset($_SESSION['usuario'])){
	$usuario=$_SESSION['usuario'];
} else{
	$usuario="";
}
?>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->


    
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="index.php">
                                <img src="img/logo2.jpg" alt="" width="80%">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="inicio.php">Inicio</a></li>
                                        <li><a href="mvision.php">Misión y visión</a></li>
                                        <li><a href="productos.php">Productos</a></li>
                                        <li><a href="#">Crear <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="creartipo.php">Crear tipo de pescado</a></li>
                                                <li><a href="crearpescado.php">Crear registro pescado</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Consultar <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                 <li><a href="contipo.php">Consultar tipo de pescado</a></li>
                                                 <li><a href="conpescado.php">Consultar pescado</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contacto.php">Contacto</a></li>
                                        <li><a href="salir.php">Cerrar Sesión</a></li>
                                        <li><a><strong>
	<?php
		if($usuario==""){
			echo"<script> window.location='index.php' </script>";
		} else{
			echo  $_SESSION['usuario'];
		}
		
	?>
                                        </strong>
                                        </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
  <?php
  require('conex.php');
  ?>


    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 black_overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center ">
                                <h3 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">Bienvenidos a la página oficial de <br>
                                    Pescados Conde</h3>
                                <div class="video_service_btn wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">
                                    <a href="productos.php" class="boxed-btn3">Ver Productos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_1 black_overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center ">
                                <h3 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s" > Aquí encontrarás los mejores pescados del <br>
                                    departamento del Huila</h3>
                                <div class="video_service_btn wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">
                                    <a href="productos.php" class="boxed-btn3">Ver Productos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_1 black_overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- photography_skill_area  -->
   

<br>
<br>
<br>


<center>
  <?php
if (isset($_POST['btnb'])) {
  $busqueda=$_POST['txtb'];
  ?>


  <table class="tabconsultas" align="right" id="buscar">
  <tr >
      <td colspan="7">
        <form method="POST" action="" name="frmb">
          <input type="text" name="txtb" required="" placeholder="Número de lote">
          <input type="submit" id="boton2" name="btnb" value="BUSCAR">
        </form>
      </td></tr><br>
      </table>


<table class="tabconsultas" align="center">
    <tr>
      <td colspan="9" align="center"><h1><strong>PESCADOS REGISTRADOS</strong></h1></td>
    </tr>
    <tr>
      <td align="center" width="80"><strong>Lote</strong></td>
      <td align="center" width="85"><strong>Peso promedio</strong> </td>
      <td align="center" width="85"><strong>Cantidad</strong></td>
      <td align="center" width="85"><strong>Especie</strong></td>
      <td align="center" width="100"><strong>Valor de compra</strong></td>
      <td align="center" width="100"><strong>Valor de venta</strong></td>
      <td align="center" width="130"><strong>Fecha de ingreso</strong></td>
      <td align="center"><strong>Modificar</strong></td>
      <td align="center"><strong>Eliminar</strong></td>
    </tr>

    
   <?php

try{
  $sqlb="SELECT * FROM pescado inner join(tipopescado) on pescado.fk_tipo=tipopescado.idtipo WHERE lote=?";
  $resultado=$base->prepare($sqlb);
  $resultado->execute(array($busqueda));
  $contador=$resultado->rowCount();
  if ($contador==0) {
    ?>

    <script language="javascript">window.alert("No se han encontrado coincidencias");window.location='conpescado.php'</script>

    <?php
  }

  while ($consulta=$resultado->fetch(PDO::FETCH_ASSOC)) {
    ?>
    <tr>
    <td align="center" ><?php echo $consulta['lote']; ?></td>
    <td align="center"><?php echo $consulta['pesopromedio']; ?></td>
    <td align="center"><?php echo $consulta['cantidad']; ?></td>
    <td><?php echo $consulta['especie']; ?></td>
    <td align="center"><?php echo $consulta['valorcompra']; ?></td>
    <td align="center"><?php echo $consulta['valorventa']; ?></td>
    <td><?php echo $consulta['fechaingreso']; ?></td>
    <td  align="center"><a href="act_pescado.php?cod=<?php echo $consulta['lote']?>"><img src="img/editar.png" width="25" class="iconos"></a></td>
    <td  align="center"><a href="confirpescado.php?codigo=<?php echo $consulta['lote']?>"><img align="center" src="img/eliminar.png" width="25" class="iconos"></a></td>
    </tr>
     <?php
  }


  }
  catch(Exception $l){
  die('Hay un error: '.$l ->getMessage());
}

  ?>

</table>


<?php
}else{
  ?>
<table class="tabconsultas" align="right" id="buscar">
  <tr>
<td colspan="8">
        <form method="POST" action="" name="frmb">
          <input type="text" name="txtb" required="" placeholder="Número de lote">
          <input type="submit" id="boton2" name="btnb" value="BUSCAR">
        </form>
      </td></tr><br>
      </table>
      <table class="tabconsultas" align="center">
    <tr>
      <td colspan="9" align="center"><h1><strong>PESCADOS REGISTRADOS</strong></h1></td>
    </tr>
    <tr>
      <td align="center" width="75"><strong>Lote</strong></td>
      <td align="center" width="80"><strong>Especie</strong> </td>
      <td align="center" width="80"><strong>Cantidad</strong></td>
      <td align="center" width="80"><strong>Peso promedio</strong></td>
      <td align="center" width="80"><strong>Valor de compra</strong></td>
      <td align="center" width="80"><strong>Valor de venta</strong></td>
      <td align="center" width="80"><strong>Fecha de ingreso</strong></td>
      <td align="center"><strong>Modificar</strong></td>
      <td align="center"><strong>Eliminar</strong></td>
    </tr>

   <?php
  try{
  $sql="SELECT * FROM pescado inner join(tipopescado) on pescado.fk_tipo=tipopescado.idtipo";
  $resultado=$base->prepare($sql);
  $resultado->execute(array());

  while ($consulta=$resultado->fetch(PDO::FETCH_ASSOC)) {
    ?>
    <tr>
    <td align="center"><?php echo $consulta['lote']; ?></td>
    <td align="center"><?php echo $consulta['especie']; ?></td>
    <td align="center"><?php echo $consulta['cantidad']; ?></td>
    <td><?php echo $consulta['pesopromedio']; ?></td>
    <td align="center"><?php echo $consulta['valorcompra']; ?></td>
    <td align="center"><?php echo $consulta['valorventa']; ?></td>
    <td><?php echo $consulta['fechaingreso']; ?></td>
    <td  align="center"><a href="act_pescado.php?cod=<?php echo $consulta['lote']?>"><img src="img/editar.png" width="25" class="iconos"></a></td>
    <td  align="center"><a href="confirpescado.php?codigo=<?php echo $consulta['lote']?>"><img align="center" src="img/eliminar.png" width="25" class="iconos"></a></td>
    </tr>
     <?php
  }


  }
  catch(Exception $l){
  die('Hay un error: '.$l ->getMessage());
}

  ?>

</table>
<?php
}
?>


  </center>
    

  
 

<br>
<br>
<br>
  

    <!-- footer start -->
    <footer class="footer">
        <div class="copy-right_text">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-md-8">
                        <p class="copy_right ">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Kebin Calderon | SENA/Yamboro <i class="fa fa-heart-o" aria-hidden="true"></i>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                   
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
</body>

</html>