<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <!--<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
     <link href="/signin.css" rel="stylesheet">
 
    
  </head>

  <body class="text-center">
    <main class="form-signin">
    <form action="<?php echo base_url('login/signIn') ?>" method="post">
      <img class="mb-4" src="<?php echo base_url('../img/logo.jpg')?>" alt="" width="200" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Informe seu Login</h1>
      <label for="inputname" class="sr-only">Nome</label>
      <input type="text" name="inputname" id="inputname" class="form-control" placeholder="Nome" required>
      <label for="inputpassword" class="sr-only">Senha</label>
      <input type="password" name="inputpassword" id="inputpassword" class="form-control" placeholder="Senha" required>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2022 - Ramon Rodrigues </p>
    </form>
	<?php
		$msg = session()->getFlashData('msg')?>
		<?php if (!empty($msg)) : ?>
			<div class="alert alert-danger">
				<?php echo $msg ?>
			</div>
		<?php endif; ?>
    </main>
  </body>
</html>