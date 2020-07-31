<?php

include("db.php");

if(isset($_GET['COD_MODULO'])) {
  $resp='"'.$_POST['COD_MODULO'].'"';
  $stmt = $conn->prepare("UPDATE seg_modulo SET ESTADO = 'INT' WHERE COD_MODULO=". $resp);
  $stmt->bind_param('ss', $NOMBRE, $ESTADO);
  echo$COD_MODULO = $_POST['COD'];
  echo$NOMBRE = $_POST['NOMBRE'];
  echo$ESTADO = $_POST['ESTADO'];
  $accion = "Agregar";
  $stmt->execute();
  $stmt->close();
 header('Location: index.php');
}

?>
