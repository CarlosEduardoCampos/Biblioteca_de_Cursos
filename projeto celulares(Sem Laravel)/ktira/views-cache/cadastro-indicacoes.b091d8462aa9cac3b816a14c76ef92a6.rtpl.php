<?php if(!class_exists('Rain\Tpl')){exit;}?>
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Indicações</h1>
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
              <form method="POST" action="/admin/cadastrar-indicacoes" enctype="multipart/form-data">
                <div class="card-body row">

                  <div class="form-group col-md-12">
                    <label for="exampleInputName">Nome da indicação </label>
                    <input type="text" class="form-control" id="exampleInputName" name="txtNomeIndicacao">
                  </div>

                  <div class="form-group col-md-12">
                    <label for="exampleInputDescricao"> Descrição </label>
                    <textarea name="txtDescricao" class="form-control"  rows="5"></textarea>
                   
                  </div>

                  <div class="form-group col-md-4">
                    <label for="exampleInputArquivo">Anexar arquivo</label>
                    <input type="file"  id="exampleInputArquivo" name="txtNomeArquivo">
                  </div>

                  <div class="form-group col-md-3">
                    <label for="exampleInputPostagem">Data da Postagem</label>
                    <input type="date" class="form-control" id="exampleInputPostagem" name="dtPostagem">
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
 