<div class="container conteudo">

  <div class="row">
    <div class="col-sm-10">
      <h2> <?= $contatos->nome ?></h2>
      
    </div>

  </div>
  <div style="height: 5px; border-radius: 30px; background-color: #358FC0"></div>
  <div style="height: 5px; border-radius: 2px"></div> <br>
  <div class="row">
    <div class="col-md-6">

      <strong>Email:</strong> <?= $contatos->email ?>
    </div>
    <div class="col-md-6">
      <strong>Cargo:</strong> <?= $contatos->cargo ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <strong>Telefone Comercial: </strong> <?= $contatos->telcomercial ?>
    </div>
    <div class="col-md-6">
      <strong>Fax:</strong> <?= $contatos->fax ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <strong>Celular:</strong> <?= $contatos->celular ?>
    </div>
    <div class="col-md-6">
      <strong>Telefone Residencial:</strong> <?= $contatos->telresidencial ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <strong>Endereço:</strong> <?= $contatos->endereco ?>
    </div>
    <div class="col-md-6">
      <strong>Cidade:</strong> <?= $contatos->cidade ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <strong>CEP:</strong> <?= $contatos->cep ?>
    </div>
    <div class="col-md-6">
      <strong>Estado:</strong> <?= $contatos->estado ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <strong>Empresa:</strong> <?= $contatos->empresa ?>
    </div>
    <div class="col-md-6">
      <strong>País:</strong> <?= $contatos->pais ?>
    </div>
  </div>

  <div class="row form-group">
    <div class="col-md-6">
      <strong>Anotação:</strong> <?= $contatos->anotacao ?>
    </div>

  </div>

  <?php /*  <h4 class="display-4" style="font-size: 34px; text-align: center;">Comentários</h4>
 
  <table class="table table-bordered table-sm table-striped">
        <thead>
            <th><i class="far fa-comments"></i> Comentário</th>
            <th><i class="far fa-clock"></i> Data</th>
            <th><i class="fas fa-trash"></i></th>
        </thead>
        <tbody>
            <?php foreach($comentarios as $comentario) : ?>
                <tr>
                    <td><?= $comentario['comentario'] ?></td>
                    <td style="width: 135px;"><?= date('d/m/Y H:i', strtotime($comentario['data'])) ?></td>
                    <td style="width: 10px;"><i class="fas fa-trash" style="color: red; cursor: pointer" onclick="remover_comentario(<?= $comentario['idcomentarios'] ?>)"></i></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
           
    <form action="<?= base_url('contatos/inserir_comentario') ?>" method="POST" enctype="multipart/form-data">
        <div class="row form-group">
            <div class="col-lg-12">
                <label for="comentario">Adicionar Comentário</label>
                <textarea class="form-control" name="comentario" id="comentario" cols="30" rows="2" maxlength="300" required></textarea>
            </div>
        </div>
        <input type="hidden" name="idcontato" id="idcontato" value="<?= $contatos->idcontatos ?>">
        <button type="submit" class="btn btn-block btn-success">Enviar Comentário</button>
        <br>
    </form>
    
   */ ?>
    





  <div class="row">
    <div class="col-6">
      <a href="<?= base_url('contatos/editar/') . $contatos->idcontatos ?>" role="button" class="btn btn-info btn-block">Editar</a>
    </div>
    <div class="col-6">
    
    <form action="<?= base_url('contatos/deletar') ?>"  method="POST" enctype="multipart/form-data">
        <button class="btn btn-danger btn-block" type="submit" name="id" id="id" value="<?= $contatos->idcontatos ?>">Deletar</button>
      </form>
   
    </div>
  </div>

</div>