   <?php
  require('conex.php');
  ?>


<?php
 try{
    $sql="DELETE FROM pescado WHERE lote =".$_REQUEST['eliminar'].";";
    $resultado=$base->prepare($sql);
    $resultado->execute(array());
    ?>
    <script language="javascript">window.alert("El registro de pescado se ha elimido de la BD!!!"); window.location="conpescado.php"</script>
		<?php
	}catch(Exeption $e){
			die('Error: '.$e->getMessage());
	}	
 ?>
