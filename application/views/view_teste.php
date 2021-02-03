<?php if($id > 0 ) { echo "maior"; }else{ echo "menor";} ?>
<form method="post" action="<?=base_url();?>olamundo/testePost">
	<label for="email">Endereço de email</label>
	<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="usuario@email.com.br">
	<label for="inputPassword">Senha</label>
	<input type="password" class="form-control" id="imnutPassword" placeholder="Senha">
	<label for="cep">CEP</label>
	<input type="text" class="form-control" id="cep" placeholder="99999999" maxlength="9" required="true">
	<label for="endereco">Endereço</label>
	 <input type="text" class="form-control" id="endereco" placeholder="Rua X" required="true">
	<label for="numero">Numero</label>
    <input type="text" class="form-control" id="numero" placeholder="999" required="true">
    <label for="bairro">Bairro</label>
    <input type="text" class="form-control" id="bairro" placeholder="bairro X" required="true">
    <label for="uf">UF</label>
	<input type="text" class="form-control" id="uf" placeholder="BH" required="true">
	<button type="submit" class="btn btn-primary btn-lg">Enviar</button>
	<a class="btn btn-danger btn-lg" style="float: right;" href="<?=base_url();?>">Voltar</a>
</form>