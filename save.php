<?php

include('db.php');

if (isset($_POST['save']) && $_POST['accion'] == "Agregar") {
  $stmt = $conn->prepare("INSERT INTO seg_modulo (COD_MODULO, NOMBRE, ESTADO) VALUES (?,?,?)");
  $stmt->bind_param('sss', $COD_MODULO, $NOMBRE, $ESTADO);
   $COD_MODULO = $_POST['COD'];
   $NOMBRE = $_POST['NOMBRE'];
   $ESTADO = $_POST['ESTADO'];
  $stmt->execute();
  $stmt->close();
  header('Location: index.php');
  
} elseif (isset($_POST['save']) && $_POST['accion'] == "Modificar") {
  $resp='"'.$_POST['COD'].'"';
  $stmt = $conn->prepare("UPDATE seg_modulo SET  NOMBRE = ? , ESTADO = ? WHERE COD_MODULO=". $resp);
  $stmt->bind_param('ss', $NOMBRE, $ESTADO);
  echo$COD_MODULO = $_POST['COD'];
  echo$NOMBRE = $_POST['NOMBRE'];
  echo$ESTADO = $_POST['ESTADO'];
  $accion = "Agregar";
  $stmt->execute();
  $stmt->close();
 header('Location: index.php');
}
