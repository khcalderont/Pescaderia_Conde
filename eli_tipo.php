   <?php
  require('conex.php');
  ?>


<?php
 try{
    $sql="DELETE FROM tipopescado WHERE idtipo =".$_REQUEST['eliminar'].";";
    $resultado=$base->prepare($sql);
    $resultado->execute(array());
    ?>
    <script language="javascript">window.alert("El Tipo pescado se ha elimido de la BD!!!"); window.location="contipo.php"</script>
		<?php
	}catch(Exeption $e){
			die('Error: '.$e->getMessage());
	}	
 ?>
