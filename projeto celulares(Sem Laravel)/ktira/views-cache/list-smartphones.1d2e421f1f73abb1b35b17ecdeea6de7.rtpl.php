<?php if(!class_exists('Rain\Tpl')){exit;}?> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Local Roteiro - Cadastrados</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section>
      <div class="container-fluid">
        
        
          <!-- /.card-body -->
          <div class="card-body row col-sm-12 d-flex align-items-end">
            <!-- <div class="busca col-sm-10">
              <form action="/admin/produtos" class="form d-flex align-items-end">
                <div class="form-group">
                  <label>Busca</label>
                  <input type="text" name="busca" class="form-control">
                </div>
                <div>
                <input type="submit" value="Buscar" class="btn btn-primary">
              </div>
              </form>
            </div> -->
            <div class="col-sm-2">
                <a href="/admin/cadastrar-smartphones" class="btn btn-success">Cadastrar Smartphone</a> 
                        </div>
            <table class="table mt-3">
              <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Problema</th>
                    <th></th>
                    <th></th>
                </tr>
              </thead>
              <tbody>
                <?php $counter1=-1;  if( isset($smartphones) && ( is_array($smartphones) || $smartphones instanceof Traversable ) && sizeof($smartphones) ) foreach( $smartphones as $key1 => $value1 ){ $counter1++; ?>
                  <tr>
                    <td><?php echo htmlspecialchars( $value1["idCelular"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $value1["marca"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $value1["modelo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td><?php echo htmlspecialchars( $value1["problema"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                    <td class="botao"><a href="/admin/editar-smartphones/<?php echo htmlspecialchars( $value1["idCelular"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><button class="btn btn-primary btn-sm">Acessar <i class="fas fa-edit"></i></button></a></td>
                    <td class="botao"><a href="/admin/deletar-smartphones/<?php echo htmlspecialchars( $value1["idCelular"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><button class="btn btn-danger btn-sm">Deletar <i class="fas fa-trash"></i></button></a></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
           
            
          <!-- ./col -->
        </div>
 
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->