<div class="container conteudo">

 <form class="form-group" enctype="multipart/form-data" action="<?= base_url('contatos/listar') ?>" method="post">
   <div class="container-fluid">
   <?php /*   <div class="row">
      <div class="col-lg-10">
          <input class="form-control" type="text" id="search" name="search" placeholder="Pesquisar" required>
        </div>  
        <div class="col-lg-1">
          <button class="btn btn-block btn-success" type="submit" ><i class="fas fa-search"></i></button>
        </div> 
      </div> */ ?> 
    </div> 
  </form> 

  <table class="table table-bordered table-striped table-sm">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>Cargo</th>
        
      </tr>
    </thead>

    <tbody>
      <?php foreach ($contatos as $contato) :  ?>
        <tr>
          <td>
            <a href="<?= base_url('contatos/visualizar/') . $contato['idcontatos'] ?>"> <?= $contato['nome']  ?> </a>
          </td>
          <td>
           <?= $contato['telcomercial']  ?>
          </td>
          <td>
            <?= $contato['email']  ?>
          </td>
          <td>
            <?= $contato['cargo']  ?>
          </td>
         

        <?php endforeach; ?>
    </tbody>
  </table>

</div>