<div id="main" class="container conteudo">

	<h2 class="display-4" style="text-align: center">Detalhes do Contato</h2>
	<hr>
	<form name="contact-form" action="<?= base_url('contatos/inserir') ?>" method="post" id="contact-form">

		<div class="row">
			<div class="form-group col-md-6">
				<label for="nome">Nome</label>
				<input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome" maxlength="45" required>
			</div>
			<div class="form-group col-md-6">
				<label for="cargo">Cargo</label>
				<input type="text" class="form-control" name="cargo" id="cargo" placeholder="Digite o cargo" maxlength="45">
			</div>

		</div>

		<div class="row">
			<div class="form-group col-md-6">
				<label for="empresa">Empresa</label>
				<input type="text" class="form-control" name="empresa" id="empresa" placeholder="Digite a empresa" maxlength="45">
			</div>
			<div class="form-group col-md-6">
				<label for="email">Email</label>
				<input type="email" class="form-control" name="email" id="email" placeholder="Digite o email" required>
			</div>


		</div>

		<div class="row">
			<div class="form-group col-md-6">
				<label for="pagweb">Página da Web</label>
				<input type="text" class="form-control" name="pagweb" id="pagweb" placeholder="Digite a página da web" maxlength="45">
			</div>
			<div class="form-group col-md-6">
				<label for="telcomercial">Telefone Comercial</label>
				<input type="text" class="form-control telefones" name="telcomercial" id="telcomercial" placeholder="Digite o telefone comercial" required maxlength="15">
			</div>
		</div>

		<div class="row">
			<div class="form-group col-md-6">
				<label for="fax">Fax </label>
				<input type="text" class="form-control telefones" name="fax" id="fax" placeholder="Digite o fax" maxlength="45">
			</div>
			<div class="form-group col-md-6">
				<label for="telresidencial">Telefone Residencial</label>
				<input type="text" class="form-control telefones" name="telresidencial" id="telresidencial" placeholder="Digite o telefone residencial" maxlength="15">
			</div>
		</div>

		<div class="row">
			<div class="form-group col-md-4">
				<label for="celular">Celular</label>
				<input type="text" class="form-control telefones" name="celular" id="celular" placeholder="Digite o celular" maxlength="15">
			</div>
			<div class="form-group col-md-4">
				<label for="endereco">Endereço</label>
				<input type="text" class="form-control" name="endereco" id="endereco" placeholder="Digite o endereço" maxlength="45">
			</div>
			<div class="form-group col-md-4">
				<label for="cidade">Cidade</label>
				<input type="text" class="form-control" name="cidade" id="cidade" placeholder="Digite a cidade" maxlength="45">
			</div>
		</div>

		<div class="row">
			<div class="form-group col-md-4">
				<label for="estado">Estado/Província</label>
				<input type="text" class="form-control" name="estado" id="estado" placeholder="Digite o estado/província" maxlength="45">
			</div>
			<div class="form-group col-md-4">
				<label for="cep">CEP</label>
				<input type="text" class="form-control" name="cep" id="cep" placeholder="Digite o cep" maxlength="10">
			</div>
			<div class="form-group col-md-4">
				<label for="pais">País/Região</label>
				<input type="text" class="form-control" name="pais" id="pais" placeholder="Digite o país/região" maxlength="45">
			</div>
		</div>

		<div class="form-group col-13">
			<label for="anotacao">Anotação</label>
			<input type="text" class="form-control" name="anotacao" id="anotacao" placeholder="Digite a anotação">
		</div>
		<button type="submit" class="btn btn-success btn-block" name="submit" value="Submit">Salvar</button>
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