<?php include '../layouts/header.php'; ?>
<?php include '../layouts/sidebar.php'; ?>

<main>
<div class="card">
<div class="card-header">
<h3 class="card-title">Lista de Donadores</h3>
</div>

<div class="card-body">
  <table id="tablaDonantes" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Nombre y Apellido</th>
        <th>Grupo Sanguineo</th>
        <th>Localidad</th>
        <th>Sexo</th>
        <th>Telefono</th>
      </tr>
    </thead> 
    <tbody>
      <tr>
        <td>Trident</td>
        <td>Internet
          Explorer 4.0
        </td>
        <td>Win 95+</td>
        <td> 4</td>
        <td>X</td>
      </tr>
    </tbody>
  </table>
</div>  
</main>

<?php include '../layouts/footer.php'; ?>

<script>
  $(function () {
    $("#tablaDonantes").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tablaDonantes_wrapper .col-md-6:eq(0)');
  }); 
</script> 