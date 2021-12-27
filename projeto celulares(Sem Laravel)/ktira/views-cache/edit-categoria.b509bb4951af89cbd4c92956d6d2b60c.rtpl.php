<?php if(!class_exists('Rain\Tpl')){exit;}?>
<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Categoria</h1>
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
                <form method="POST" action="/admin/editar-categoria/<?php echo htmlspecialchars( $categoria["idCategoria"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                  <div class="card-body row">
  
                    <div class="form-group col-md-8">
                      <label for="exampleInputName">Nome da Categoria</label>
                      <input type="text" class="form-control" id="exampleInputName" name="Nome" value="<?php echo htmlspecialchars( $categoria["txtNome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                    </div>

                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer col-md-12 form-group">
                    <button type="submit" class="btn btn-primary form-control">Cadastrar</button>
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
  