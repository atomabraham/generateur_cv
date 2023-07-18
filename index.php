<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Accueil</title>
		<link rel="icon" href="assets/img/logo_3.svg" alt="cv_generator-logo">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/index.css">
	</head>
	<body>
		<!--le header-->
		<div class="row" id="headerDiv">
			<div class="col-md-1" id="logoDiv">
				<a href="index.php"><img src="assets/img/logo_2.svg" alt="logo" id="logoImg"></a>
			</div>
			<div class="col-md-8" id="menuDiv">
				<div class="row">
					<ul class="nav nav-underline">
						<div class="col-md-2">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" id="linkMenuAcceuil" href="index.php">Acceuil</a>
							</li>
						</div>
						<div class="col-md-2">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" id="linkMenuConcevoir" href="App/Views/modeles_cv.php">Modèles CV</a>
							</li>
						</div>
						<div class="col-md-3">
							<li class="nav-item">
								<a class="nav-link linkMenu" id="linkMenuFaq" href="App/Views/faq.php">FAQ</a>
							</li>
						</div>
						<div class="col-md-2">
							<select name="langue" id="langue1">
								<option value="Français">Français</option>
								<option value="English">English</option>
								<option value="English">Spanish</option>
								<option value="English">Deusch</option>
							</select>
						</div>
					</ul>
				</div>
			</div>
			<div class="col-md-4" id="connexionDiv">
				<div class="row">
					<div class="col-md-5">
						<a href="App/Views/signup.php" id="linkMenuCreerCv">S'INSCRIRE</a>
					</div>
					<div class="col-md-5">
						<a href="App/Views/login.php" id="linkMenuConnexion">SE CONNECTER</a>
					</div>
				</div>
			</div>
		</div>

		<!--premier block-->
		<div class="row" id="firstBlockDiv">
			<h1 id="text0">Créez votre CV professionnel</h1>
			<h4 class="text1">Choisissez un modèle, remplissez le formulaire et </h4>
			<h4 class="text1">téléchargez votre CV en quelques minutes.</h4>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-4" id="linkMenuConnexion2Div">
					<a href="App/Views/modeles_cv.php" id="linkMenuConnexion2">CREER MON CV</a>
				</div>
			</div>         
		</div>

		<!--le block d'images-->
		<div class="row" id="blockImageDiv">
			<div class="col-md-3" id="image1Div">
				<img src="assets/img/180-modele-cv-attractif.jpg" id="image1" alt="">
			</div>
			<div class="col-md-3" id="image2Div">
				<img src="assets/img/CV1B.jpeg" id="image2" alt="">
			</div>
			<div class="col-md-3" id="image3Div">
				<img src="assets/img/180-modele-cv-attractif.jpg" id="image3" alt="">
			</div>
		</div>

		<!--block evaluation-->
		<div class="row" id="evaluationDiv">
			<h3 id="texte3">Evaluations</h3>
			<!--les étoiles-->
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4 rating" style="margin-top:1%;">
					<img src="assets/img/etoile.png" id="etoile" alt="">
					<p id="text4">Basé sur l’avis de 500 utilisateurs</p>
				</div>
			</div>
		</div>

		<!--les commentaire-->
		<div class="row" id="commentaireDiv">
			<div class="col-md-4" id="Commenataire1Div">
				<img src="assets/img/Remi.jpg" id="profile1" alt="">
				<p id="name1">ZAZA</p>
				<p>Une solution simple pour préparer un bon cv de manière professionnelle.</p>
			</div>
			<div class="col-md-4" id="Commenataire2Div">
				<img src="assets/img/Sophie.jpg" id="profile2" alt="">
				<p id="name2">ALISON</p>
				<p>Avant,je concevais mes CV sur Word mais c’étais vraiment nul. Mais grace a CV Generator,je peux maintenant concevoir  mon cv professionnel en quelques minutes.</p>
			</div>
			<div class="col-md-4" id="Commenataire3Div">
				<img src="assets/img/Oscar.jpg" id="profile3" alt="">
				<p id="name2">ATOM</p>
				<p>Exellent site web pour créer facilement un curriculum vitae.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-4" id="linkMenuConnexion3Div">
				<a href="App/Views/modeles_cv.php" id="linkMenuConnexion2">CREER MON CV</a>
			</div>
		</div>

		<!--le footer-->
		<div class="row" id="footer">
			<div class="col-md-2">
				<ul>
					<b>Service client</b>
				</ul>
				<ul>
					<a href="#" class="linkFooter">FAQ</a>
				</ul>
				<ul>
					<a href="#" class="linkFooter">Contacts</a>
				</ul>
				<ul>
					<a href="#" class="linkFooter">A propos</a>
				</ul>
			</div>
			<div class="col-md-2">
				<ul>
					<b>Produits</b>
				</ul>
				<ul>
					<a href="#" class="linkFooter">Modèles</a>
				</ul>
				<ul>
					<a href="#" class="linkFooter">Commentaires</a>
				</ul>
			</div>
			<div class="col-md-2" id="logo2Div">
				<img src="assets/img/logo_dark.svg" alt="cv_generator-logo">
				<div class="row" id="blockIcon">
					<div class="col-md-1">
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
								<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
							</svg>
						</a>
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-1">
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
								<path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
							</svg>
						</a>
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-1">
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-messenger" viewBox="0 0 16 16">
								<path d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.639.639 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.639.639 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76zm5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z"/>
							</svg>
						</a>
					</div>
					<div class="col-md-1"></div>
					<div class="col-md-1">
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
								<path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
							</svg>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-2" id="ressourcesDiv">
				<ul>
					<b>Ressources</b>
				</ul>
				<ul>
					<a href="#" class="linkFooter">Exemples</a>
				</ul>
				<ul>
					<a href="#" class="linkFooter">Conseils</a>
				</ul>
			</div>
			<div class="col-md-2">
				<select name="langue" id="langue2">
					<option value="Français" class="langue">Français</option>
					<option value="English" class="langue">English</option>
					<option value="English" class="langue">Spanish</option>
					<option value="English" class="langue">Deusch</option>
				</select>
			</div>

			<!--copyright-->
			<div class="row" id="copyriht">
				<p><i>Copyriht 2023 Gouope 3, All rights reserved.</i></p>
			</div>
		</div>

		<!-- Option 2: Separate Popper and Bootstrap JS -->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	</body>
</html>