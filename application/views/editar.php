<div id="main" class="container conteudo">

  <h2 class="display-4" style="text-align: center;">Detalhes do Contato</h2>
  <hr>
  <form name="contact-form" action="<?= base_url('contatos/update') ?>" method="post" id="contact-form">

    <input type="hidden" name="id" value="<?= $contatos->idcontatos  ?>">


    <div class="row">
      <div class="form-group col-md-6">
        <label for="nome"><i>Nome </i></label>
        <input value="<?= $contatos->nome  ?>" type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome">
      </div>
      <div class="form-group col-md-6">
        <label for="cargo"><i>Cargo</i></label>
        <input value="<?= $contatos->cargo  ?>" type="text" class="form-control" name="cargo" id="cargo" placeholder="Digite o cargo">
      </div>

    </div>

    <div class="row">
      <div class="form-group col-md-6">
        <label for="empresa"><i>Empresa</i></label>
        <input value="<?= $contatos->empresa  ?>" type="text" class="form-control" name="empresa" id="empresa" placeholder="Digite o valor">
      </div>
      <div class="form-group col-md-6">
        <label for="email"><i>Email</i></label>
        <input value="<?= $contatos->email  ?>" type="email" class="form-control" name="email" id="email" placeholder="Digite o valor">
      </div>


    </div>

    <div class="row">
      <div class="form-group col-md-6">
        <label for="pagweb"><i>Página da Web</i></label>
        <input value="<?= $contatos->pagweb  ?>" type="text" class="form-control" name="pagweb" id="pagweb" placeholder="Digite o valor">
      </div>
      <div class="form-group col-md-6">
        <label for="telcomercial"><i>Telefone Comercial</i></label>
        <input value="<?= $contatos->telcomercial  ?>" type="text" class="form-control telefones" name="telcomercial" id="telcomercial" placeholder="Digite o valor">
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-6">
        <label for="fax"><i>Fax </i></label>
        <input value="<?= $contatos->fax  ?>" type="text" class="form-control telefones" name="fax" id="fax" placeholder="Digite o valor">
      </div>
      <div class="form-group col-md-6">
        <label for="telresidencial"><i>Telefone Residencial</i></label>
        <input value="<?= $contatos->telresidencial  ?>" type="text" class="form-control telefones" name="telresidencial" id="telresidencial" placeholder="Digite o valor" required>
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-4">
        <label for="celular"><i>Celular</i></label>
        <input value="<?= $contatos->celular  ?>" type="text" class="form-control" name="celular telefones  " id="celular" placeholder="Digite o valor">
      </div>
      <div class="form-group col-md-4">
        <label for="endereço"><i>Endereço</i></label>
        <input value="<?= $contatos->endereco  ?>" type="text" class="form-control" name="endereco" id="endereco" placeholder="Digite o valor">
      </div>
      <div class="form-group col-md-4">
        <label for="cidade"><i>Cidade</i></label>
        <input value="<?= $contatos->cidade  ?>" type="text" class="form-control" name="cidade" id="cidade" placeholder="Digite o valor">
      </div>
    </div>


    <div class="row">
      <div class="form-group col-md-4">
        <label for="estado"><i>Estado/Província</i></label>
        <input value="<?= $contatos->estado  ?>" type="text" class="form-control" name="estado" id="estado" placeholder="Digite o valor">
      </div>
      <div class="form-group col-md-4">
        <label for="cep"><i>CEP</i></label>
        <input value="<?= $contatos->cep  ?>" type="text" class="form-control" name="cep" id="cep" placeholder="Digite o valor">
      </div>
      <div class="form-group col-md-4">
        <label for="pais"><i>País/Região</i></label>
        <input value="<?= $contatos->pais  ?>" type="text" class="form-control" name="pais" id="pais" placeholder="Digite o valor">
      </div>
    </div>

    <div class="form-group col-13">
      <label for="anotacao"><i>Anotação</i></label>
      <input value="<?= $contatos->anotacao  ?>" type="text" class="form-control" name="anotacao" id="anotacao" placeholder="Digite a anotação">
    </div>


    <br>



    <button type="submit" class="btn btn-info btn-block" name="submit" value="Submit">Salvar</button>



  </form>

</div>

<script>
  var SPMaskBehavior = function(val) {
      return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
      onKeyPress: function(val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
      }
    };

  $('.telefones').mask(SPMaskBehavior, spOptions);
  $('#cep').mask('00.000-000');
</script>