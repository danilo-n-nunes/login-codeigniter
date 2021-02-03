<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/bootstrap/js/bootstrap.min.js">
	<link rel="stylesheet" href="<?=base_url();?>assets/font-awesome-4.7.0/css/font-awesome.min.css">
	<div class="container">
		<?php if(isset($endereco)){?>
		<div class="row justify-content-center">
			<h1>Usuario Logado</h1>
		</div>
		<div class="row justify-content-center">
			<div class="offset-md-4 col-md-6">
				<h3>Endereço <a href='<?=base_url("index.php/registro/registrando/$id_endereco")?>' class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></h3>
			</div>
		</div>
		<div class="row justify-content-center pt-3">
			<div class="col-md-6 offset-md-4">
				<label>Rua: <?= $endereco;?></label><br/>
				<label>Numero: <?= $numero;?></label><br/>
				<label>Bairro: <?= $bairro;?></label><br/>
				<label>CEP: <?= $cep;?></label><br/>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="offset-md-4 col-md-6">
				Alterar: 
			</div>
		</div>
		<div class="row pt-2 justify-content-center">
			<div class="offset-md-4 col-md-6">
				<a class="btn btn-danger" href="<?=base_url('index.php/login/logout');?>">Deslogar</a>
			</div>
		</div>
		<div class="row justify-content-center pt-3">
			<div class="offset-md-4 col-md-6">
				<a href="<?=base_url('delete');?>" class="btn btn-warning">Excluir Conta</a>
			</div>
		</div>
		<?php }else{ ?>
			<div class="row justify-content-center">
				<h3>Você não possui um endereço</h3>
			</div>
			<div class="row justify-content-center">
				<label>Por favor Registre-se</label><br>
			</div>
			<div class="row justify-content-center pt-5">
				<a class="btn btn-primary" href="<?=base_url('index/registro')?>">Registrar Endereço</a>
			</div>
			<div class="row justify-content-center">
				<a class="btn btn-danger" href="<?=base_url('index.php/login/logout');?>">Deslogar</a>
			</div>
			
		<?php } ?>
	</div>
	<script type="text/javascript" src="<?=base_url();?>assets/js/jquery-3.3.1.min.js"/>
</body>
</html>