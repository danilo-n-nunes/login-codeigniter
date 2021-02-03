<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/bootstrap/js/bootstrap.min.js">
<div class="container pt-5">

	<?php 
	$url = 'registrar';
	if (isset($alterar) && $alterar) {
		$url = 'alterar/'.$endereco[0]['id_endereco'];
	} 
	?>

	<div class="row justify-content-center">
		<?php if(isset($mensagem)) echo '<label class="alert alert-danger">'.$mensagem.'</label>';?>
	</div>
	<div class="row justify-content-center">
		<h1>Registro de Endereço</h1>
	</div>
	<div class="row justify-content-center">
		<small>Primeiramente, entre com o CEP</small>
	</div>
	<div class="offset-md-3 col-md-6 pt-5">
	<form method="post" action="<?= base_url('index.php/registro/'.$url);?>">
	  <div class="form-group">
	    <label for="cep">CEP</label>
	    <input type="text" class="form-control" id="cep" placeholder="99999999" maxlength="9" required="true" name="cep" value="<?=(isset($endereco[0]['endereco']))?$endereco[0]['cep']: "" ?>">
	    <!--<small id="emailHelp" class="form-text text-muted">.</small>-->
	  </div>
	  <div class="form-group">
	    <label for="endereco">Endereço</label>
	    <input type="text" class="form-control" id="endereco" placeholder="Rua X" readonly="" required="true" name="endereco" value="<?=(isset($endereco[0]['endereco']))?$endereco[0]['endereco']: "" ?>">
	    <!--<small id="emailHelp" class="form-text text-muted">.</small>-->
	  </div>
	  <div class="form-group">
	    <label for="numero">Numero</label>
	    <input type="text" class="form-control" id="numero" placeholder="999" required="true" name="numero" value="<?=(isset($endereco[0]['endereco']))?$endereco[0]['numero']: "" ?>">
	    <!--<small id="emailHelp" class="form-text text-muted">.</small>-->
	  </div>
	  <div class="form-group">
	    <label for="bairro">Bairro</label>
	    <input type="text" class="form-control" id="bairro" placeholder="bairro X" readonly="" required="true" name="bairro" value="<?=(isset($endereco[0]['endereco']))?$endereco[0]['bairro']: "" ?>">
	    <!--<small id="emailHelp" class="form-text text-muted">.</small>-->
	  </div>
	  <div class="form-group">
	    <label for="uf">UF</label>
	    <input type="text" class="form-control" id="uf" placeholder="BH" readonly="" required="true" name="uf" value="<?=(isset($endereco[0]['uf']))?$endereco[0]['endereco']: "" ?>">
	    <!--<small id="emailHelp" class="form-text text-muted">.</small>-->
	  </div>
	  <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
	  <a class="btn btn-danger btn-lg" style="float: right;" href="<?=base_url();?>">Voltar</a>
	</form>
	<div class="row justify-content-center">
		<a class="btn btn-warning" href="<?=base_url('index.php/login/logout');?>">Deslogar</a>
	</div>
</div>
	</div>
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('#cep').on('change',function(){
			let x = $(this).val();

			$.getJSON(`https://viacep.com.br/ws/${x}/json/`,function(data){
				//alert(data.logradouro);
				$('#endereco').val(data.logradouro);
				$('#bairro').val(data.bairro);
				$('#uf').val(data.uf);
			})

		})
	})
</script>