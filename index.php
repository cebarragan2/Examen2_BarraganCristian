<?php include("db.php"); ?>
<?php include('includes/header.php'); ?>
<?php
$COD_MODULO = '';
$NOMBRE = '';
$ESTADO = '';
$COD = '';
$publication_date = '';
$accion = "Agregar";
$COD_MODULO = "";

if (isset($_GET['COD_MODULO'])) {
  $resp = '"%' . $_GET['COD_MODULO'] . '%"';
  $result_modulo = $conn->query("SELECT * FROM seg_modulo WHERE COD_MODULO LIKE" . $resp);
  if (mysqli_num_rows($result_modulo) == 1) {
    $row = mysqli_fetch_array($result_modulo);
    $COD = $row['COD_MODULO'];
    $NOMBRE = $row['NOMBRE'];
    $ESTADO = $row['ESTADO'];
    $accion = "Modificar";
  }
}
?>
<main class="container p-4">
  <div class="row">
    <div class="col-md-4">

      <!-- ADD BOOKS FORM-->
      <div class="card card-body">
        <form action="save.php" method="POST">
          <div class="form-group">
            <input type="text" name="COD" class="form-control" placeholder="COD" autofocus value="<?php echo $COD ?> ">
          </div>
          <div class="form-group">
            <input type="text" name="NOMBRE" class="form-control" placeholder="NOMBRE" value="<?php echo $NOMBRE ?>">
          </div>
          <div class="form-group">
            <select name="ESTADO" class="form-control" id="TIPO" p-1>
              <option value="ACT">ACT</option>
              <option value="INT">INT</option>
            </select>
          </div>
          <div class="form-group">
            <?php
            $query = 'SELECT * FROM seg_rol';
            $result = $conn->query($query);
            ?>
            <select name="COD_ROL" class="form-control" id="selector">
              <?php
              while ($row = $result->fetch_array()) {
              ?>
                <option value=" <?php echo $row['COD_ROL'] ?> ">
                  <?php echo $row['NOMBRE']; ?>
                </option>
              <?php
              }
              ?>
            </select>
            <?php
            ?>
          </div>

          <div class="form-group">
            <input type="hidden" name="COD_MODULO" class="form-control" value="<?php echo $COD_MODULO; ?>">
          </div>
          <div class="form-group">
            <input type="hidden" name="accion" class="form-control" value="<?php echo $accion; ?>">
          </div>
          <input type="submit" name="save" class="btn btn-success btn-block" value="<?php echo $accion; ?>">
        </form>
      </div>
    </div>

    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>COD_MODULO</th>
            <th>NOMBRE</th>
            <th>ESTADO</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $result_modulo = $conn->query("SELECT * FROM seg_modulo WHERE ESTADO LIKE '%ACT%' ");

          while ($row = mysqli_fetch_assoc($result_modulo)) { ?>
            <tr>
              <td><?php echo $row['COD_MODULO']; ?></td>
              <td><?php echo $row['NOMBRE']; ?></td>
              <td><?php echo $row['ESTADO']; ?></td>
              <td>
                <a href="index.php?COD_MODULO=<?php echo $row['COD_MODULO'] ?>" class="btn btn-secondary">
                  <i class="fas fa-marker"></i>
                </a>
                <a href="delete.php?COD_MODULO=<?php echo $row['COD_MODULO'] ?>" class="btn btn-danger">
                  <i class="far fa-trash-alt"></i>
                </a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>