<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/bootstrap/js/bootstrap.min.js">
<div class="container pt-5">
	<div class="row justify-content-center">
		<h1>Registro de Usuario</h1>
	</div>
	<div class="offset-md-3 col-md-6 pt-5">
	<form method="post" action="<?= base_url('index.php/login/registrar');?>">
	  <div class="form-group">
	    <label for="email">Endereço de email</label>
	    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="usuario@email.com.br" name="usuario">
	    <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword">Senha</label>
	    <input type="password" class="form-control" id="imnutPassword" placeholder="Senha" name="senha">
	  </div>
	  <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
	  <a class="btn btn-danger btn-lg" style="float: right;" href="<?=base_url();?>">Voltar</a>
	</form>
</div>
	</div>
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery-3.3.1.min.js"></script>