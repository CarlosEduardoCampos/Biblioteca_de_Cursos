<?php if(!class_exists('Rain\Tpl')){exit;}?>
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Legislatura</h1>
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
              <form method="POST" action="/admin/editar-legislatura/<?php echo htmlspecialchars( $legislatura["idLegislatura"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" >
                <div class="card-body row">

                  <div class="form-group col-md-12">
                    <label for="exampleInputName">Legislatura</label>
                    <input type="text" class="form-control" id="exampleInputName" name="txtNomeLegislatura" value="<?php echo htmlspecialchars( $legislatura["txtNomeLegislatura"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                  </div>

                  <div class="form-group col-md-3">
                    <label for="exampleInputInicio">Data de Inicio</label>
                    <input type="date" class="form-control" id="exampleInputInicio" name="dtInicio" value="<?php echo htmlspecialchars( $legislatura["dtInicio"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                  </div>

                  <div class="form-group col-md-3">
                    <label for="exampleInputFim">Data de Fim</label>
                    <input type="date" class="form-control" id="exampleInputFim" name="dtFim" value="<?php echo htmlspecialchars( $legislatura["dtFim"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer col-md-12 form-group">
                  <button type="submit" class="btn btn-primary form-control">Atualizar</button>
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