<!DOCTYPE html>
<html lang="en">



<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin Template">
	<meta name="author" content="Bootlab">

	<title>Espace de connexion - admin primmo ci</title>

	<link href="<?php echo base_url(); ?>assets/admin/css/app.css" rel="stylesheet">

</head>

<body>
	<main class="main h-100 w-100">
		<div class="container h-100">
			<div class="row h-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Bienvenue sur l'espace administration primmo CI</h1>
							<p class="lead">
								Se connecter pour continuer
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<div class="text-center">
										<img src="<?php echo base_url(); ?>assets/admin/img/avatars/avatar.jpg" alt="Primmo CI" class="img-fluid rounded-circle" width="132" height="132" />
									</div>
									<form>
										<div class="form-group">
											<label>Email</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Entrer votre email" />
										</div>
										<div class="form-group">
											<label>Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Entrer votre mot de passe" />
											<small>
            <a href="#">Mot de passe oublié ?</a>
          </small>
										</div>
										<div>
										
										</div>
										<div class="text-center mt-3">
											<a href="index.html" class="btn btn-lg btn-primary">Se connecter</a>
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="<?php echo base_url(); ?>assets/admin/js/app.js"></script>
</body>


</html>