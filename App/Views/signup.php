<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Inscription</title>
		<link rel="icon" href="../../assets/img/logo_3.svg" alt="cv_generator-logo">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    	<link rel="stylesheet" href="../../assets/css/index.css">
		<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
	</head>
	<body>
		<?php include('header.php'); ?>

		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 justify-content-center">
					<form novalidate method="POST" action="../Controllers/users_controller.php?action=inscription" id="signupForm">
						<div style="margin-bottom: 20px;">
							<h2><b>Inscription</b></h2>
						</div>
						<div class="item-group">
							<i class="left-icon">
								<img src="../../assets/img/user.svg" class="icon">
							</i>
							<input type="text" name="firstName" id="firstName" placeholder="Prénom" required autofocus>
							<span class="firstNameError"></span>
						</div>
						<div class="item-group">
							<i class="left-icon">
								<img src="../../assets/img/user.svg" class="icon">
							</i>
							<input type="text" name="name" id="name" placeholder="Nom" required>
							<span class="nameError"></span>
						</div>
						<div class="item-group">
							<i class="left-icon">
								<img src="../../assets/img/envelope.svg" class="icon">
							</i>
							<input type="email" name="mail" id="mail" placeholder="Adresse email" required autofocus>
							<span class="emailError"></span>
						</div>
						<div class="item-group">
							<i class="left-icon">
								<img src="../../assets/img/key.svg" class="icon">
							</i>
							<input type="password" name="password" id="password" placeholder="Mot de passe" required>
							<i class="right-icon">
								<img src="../../assets/img/eye.svg" id="togglePassword" class="icon">
							</i>
							<span class="passwordError"></span>
						</div>
						<div class="item-group">
							<i class="left-icon">
								<img src="../../assets/img/key.svg" class="icon">
							</i>
							<input type="password" name="confPassword" id="confPassword" placeholder="confirmez le mot de passe" required>
							<i class="right-icon">
								<img src="../../assets/img/eye.svg" id="toggleConfPassword" class="icon">
							</i>
							<span class="confPasswordError"></span>
						</div>
						<div class="item-group">
							<input type="hidden" name="role" id="role" value="customer">
						</div>
						<div class="row item-group">
							<div class="col-1">
								<input type="checkbox" name="termsAndCondition" id="atc">
							</div>
							<div class="col-11" style="margin-left: -7px; font-size: 14px;">
								<label for="atc">J'accepte tous les <a href="#">termes</a> & <a href="#">conditions</a>.</label>
							</div>
						</div>
						<div class="text-center item-group">
							<input type="submit" name="btnSignup" id="btnSignup" class=" btn btn-primary" value="S'inscrire" disabled>
						</div>
						<div class="text-center">
							<hr>
							<label>
								Déjà un compte ? <a href="login.php"><strong>Se connecter</strong></a>
							</label>
						</div>
					</form>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
			</div>
		</div>

		<?php include('footer.php'); ?>

		<!-- Option 2: Separate Popper and Bootstrap JS -->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

		<script type="text/javascript" src="../../assets/js/signup.js" defer></script>
	</body>
</html>