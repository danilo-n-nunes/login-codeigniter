<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/login.css">
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <!--<img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />-->
      <h3>Login Usuario</h3>
    </div>

    <!-- Login Form -->
    <form action="<?= base_url('index.php/login/logar');?>" method="post">
      <input type="text" id="login" class="fadeIn second" name="usuario" placeholder="Ex: usuario@email.com.br">
      <input type="password" id="password" class="fadeIn" name="senha" placeholder="password">
      <input type="submit" class="fadeIn" value="Log In">
    </form>
    <label class="text-danger"><?php if(isset($mensagem)) echo $mensagem; ?></label>
    
    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="<?=base_url();?>login/registro">Registrar</a>
    </div>

  </div>
</div>