<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Editar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="/admin/editar-vereadorLegislatura/<?php echo htmlspecialchars( $vereadorLegislatura["idVereadorLegislatura"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                <div class="card-body row">

                  <div class="form-group col-md-6">
                    <label for="exampleInputVereador">Vereador</label>
                    <select name="fkVereador" id="exampleInputVereador" class="form-control">
                      <option value="">SELECT</option>
                      <?php $counter1=-1;  if( isset($vereador) && ( is_array($vereador) || $vereador instanceof Traversable ) && sizeof($vereador) ) foreach( $vereador as $key1 => $value1 ){ $counter1++; ?>
                      <option value="<?php echo htmlspecialchars( $value1["idVereadores"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" <?php if( $value1["idVereadores"] == $vereadorLegislatura["fkVereador"] ){ ?>selected<?php } ?>><?php echo htmlspecialchars( $value1["txtNomeVereador"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="exampleInput">Legislatura</label>
                    <select name="fkLegislatura" id="exampleInputLegislatuar" class="form-control">
                      <option value="" > SELECT   </option>
                      <?php $counter1=-1;  if( isset($legislatura) && ( is_array($legislatura) || $legislatura instanceof Traversable ) && sizeof($legislatura) ) foreach( $legislatura as $key1 => $value1 ){ $counter1++; ?>
                      <option value="<?php echo htmlspecialchars( $value1["idLegislatura"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" <?php if( $value1["idLegislatura"] == $vereadorLegislatura["fkLegislatura"] ){ ?>selected<?php } ?>><?php echo htmlspecialchars( $value1["txtNomeLegislatura"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-group col-md-4">
                    <label for="exampleInputDiplomacao"> Data da Dilomação</label>
                    <input type="date" id="exampleInputDiplomacao"  class="form-control" name="dtDiplomacao" value="<?php echo htmlspecialchars( $vereadorLegislatura["dtDiplomacao"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer col-md-12 form-group">
                  <button type="submit" class="btn btn-primary form-control">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

         

       

          </div>
          <!--/.col (left) -->
          <!-- right column -->
        
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>