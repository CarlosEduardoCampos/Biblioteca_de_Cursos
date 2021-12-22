<?php if(!class_exists('Rain\Tpl')){exit;}?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Respostas do Executivo</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section>
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
         
          <div class="card-body col-sm-12">
           
           
  
            <table class="table mt-3">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Data</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php $counter1=-1;  if( isset($respostasExecutivo) && ( is_array($respostasExecutivo) || $respostasExecutivo instanceof Traversable ) && sizeof($respostasExecutivo) ) foreach( $respostasExecutivo as $key1 => $value1 ){ $counter1++; ?>
                <tr>
                  <td><?php echo htmlspecialchars( $value1["idIndicacoes"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                  <td><?php echo htmlspecialchars( $value1["txtNomeResposta"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                  <td><?php echo htmlspecialchars( $value1["dtPostagem"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                  <td class="botao"><a href="/admin/editar-respostasExecutivo/<?php echo htmlspecialchars( $value1["idIndicacoes"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><button class="btn btn-primary btn-sm">Alterar <i class="fas fa-edit"></i></button></a></td>
                  <td class="botao"><a href="/admin/deletar-respostasExecutivo/<?php echo htmlspecialchars( $value1["idIndicacoes"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-danger btn-sm">Deletar <i class="fas fa-trash"></i></button></a></td>
                </tr>
                <?php } ?>

              </tbody>
            </table>
            
            <br>
            <div class="row">
            <div class="col-sm-9"></div>
            <div class="col-sm-3">
              <a href="/admin/cadastrar-respostasExecutivo" class="btn btn-success">Adicionar Nova Indicacoes</a> 
                      </div>
                    </div>
          <!-- ./col -->
        </div>
       
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->