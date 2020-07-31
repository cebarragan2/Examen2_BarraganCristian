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
  $stmt2 = $conn->prepare("INSERT INTO rol_modulo (COD_ROL, COD_MODULO) VALUES (?,?)");
  $stmt2->bind_param('ss', $COD_ROL, $COD_MODULO);
  $COD_MODULO = $_POST['COD'];
  $COD_ROL = $_POST['COD_ROL'];
  $stmt2->execute();
  $stmt2->close();
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
