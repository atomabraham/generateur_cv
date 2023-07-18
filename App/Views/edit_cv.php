<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Rédiger CV</title>
		<link rel="icon" href="../../assets/img/logo_3.svg" alt="cv_generator-logo">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="../../assets/css/index.css">
		<link rel="stylesheet" type="text/css" href="../../assets/css/edit_cv.css">

		<!-- Scripts externes pour la fonctionnalité télécharger le CV -->
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
		<script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
	</head>
	<body>
		<?php include('header.php'); ?>
		
		<div class="bg-dark text-white" data-bs-theme="dark" style="padding: 15px; margin: 4.9% 0 10px;">
			<ul class="nav nav-pills justify-content-between">
				<li class="nav-item">
					<a class="nav-link" href="#">Retour</a>
				</li>
				<li class="nav-item">
					<span>CV sans titre</span>
				</li>
				<li class="nav-item">
					<button type="button" class="btn telecharger" style="background-color: #113cf9; color:white;">
						<span class="icon_btn">
							<svg aria-hidden="true" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<path d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
						</span>
						<span class="text_btn">Télécharger</span>
					</button>
				</li>
			</ul>
		</div>
		<div class="container-fluid p-3 bg-light">
			<div class="row justify-content-around">
				<!-- Formulaire d'édition du CV -->
				<div class="col-lg-6">
					<div class="p-3" style="outline: 1px solid #dee2e6; border-radius: 7px; background-color: #fff;">
						<div class="accordion mb-3" id="accordionPanelsStayOpenExample">
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
										Informations personnelles
									</button>
								</h2>
								<div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
									<div class="accordion-body">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col-5 justify-content-center">
														<div class="mb-3 d-flex align-items-center" style="outline: 1px solid #dee2e6; border-radius: 3px; height: 110px;">
															<!-- <img src="../../assets/img/Photo.svg" alt="photo_de_profil" class=".profil" title="Importer une photo de profil" style="width: 100%; height: 100%; cursor: pointer; display: none;"> -->
															<input type="file" name="photo_de_profil" id="photo_de_profil" title="Importer une photo de profil">
														</div>
													</div>
													<div class="col-7">
														<div class="mb-3">
															<input type="text" name="prenom" id="prenom" placeholder="Prénom" title="Entrer le prénom" class="form-control">
														</div>
														<div class="mb-3">
															<input type="text" name="nom" id="nom" placeholder="Nom" title="Entrer le nom" class="form-control">
														</div>
														<div class="mb-3">
															<input type="text" name="titre_du_profil" id="titre_du_profil" placeholder="Titre du profil" title="Entrer le titre du profil" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-12">
														<div class="mb-3">
															<input type="email" name="email" id="email" placeholder="Adresse email" title="Entrer l'adresse email" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-12">
														<div class="mb-3">
															<input type="url" name="website" id="website" placeholder="Site internert" title="Entrer votre site internet" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-12">
														<div class="mb-3">
															<input type="tel" name="numero_de_telephone" id="numero_de_telephone" placeholder="Numéro de téléphone" title="Entrer le numéro de téléphone" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-12">
														<div class="mb-3">
															<input type="text" name="adresse" id="adresse" placeholder="Adresse" title="Entrer l'adresse" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-12">
														<div class="mb-3">
															<textarea id="apropos_de_vous" placeholder="Apropos de vous" title="Entrer une brièvre description apropos de vous" class="form-control" rows="4"></textarea>
														</div>
													</div>
												</div>
												<div id="autre_element">

												</div>
												<div class="row">
													<div class="col-12 d-flex justify-content-end">
														<div class="mb-3 justify-content-between">
															<button type="cancel" class="btn btn-outline-danger" id="supprimer_informations_personnelles">
																<span class="icon_btn">
																	<svg aria-hidden="true" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon">
																		<path d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</span>
																<span class="text_btn">Supprimer</span>
															</button>
															<button class="btn btn-outline-primary terminer">
																<span class="icon_btn">
																	<svg aria-hidden="true" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon">
																		<path d="M4.5 12.75l6 6 9-13.5" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</span>
																<span class="text_btn">Terminer</span>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-12">
												<button class="btn btn-outline-dark mb-2">
													<span class="icon_btn">
														<svg aria-hidden="true" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon">
															<path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</span>
													<span class="text_btn">Date de naissance</span>
												</button>
												<button class="btn btn-outline-dark mb-2">
													<span class="icon_btn">
														<svg aria-hidden="true" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon">
															<path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</span>
													<span class="text_btn">Lieu de naissance</span>
												</button>
												<button class="btn btn-outline-dark mb-2">
													<span class="icon_btn">
														<svg aria-hidden="true" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon">
															<path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</span>
													<span class="text_btn">Sexe</span>
												</button>
												<button class="btn btn-outline-dark mb-2">
													<span class="icon_btn">
														<svg aria-hidden="true" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon">
															<path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</span>
													<span class="text_btn">Nationalité</span>
												</button>
												<button class="btn btn-outline-dark mb-2" id="add_website">
													<span class="icon_btn">
														<svg aria-hidden="true" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon">
															<path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</span>
													<span class="text_btn">Site internet</span>
												</button>
												<button class="btn btn-outline-dark mb-2">
													<span class="icon_btn">
														<svg aria-hidden="true" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon">
															<path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</span>
													<span class="text_btn">Permis de conduire</span>
												</button>
												<button class="btn btn-outline-dark mb-2">
													<span class="icon_btn">
														<svg aria-hidden="true" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon">
															<path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</span>
													<span class="text_btn">Situation matrimoniale</span>
												</button>
												<button class="btn btn-outline-dark mb-2">
													<span class="icon_btn">
														<svg aria-hidden="true" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon">
															<path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</span>
													<span class="text_btn">Nombre d'enfants</span>
												</button>
												<button class="btn btn-outline-dark mb-2">
													<span class="icon_btn">
														<svg aria-hidden="true" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon">
															<path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</span>
													<span class="text_btn">Linkedin</span>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
										Formations
									</button>
								</h2>
								<div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
									<div class="accordion-body">
										<div id="formation_container">
											
										</div>
										<button id="ajouter_formation" class="btn btn-outline-dark mt-3 ajouter">
											<span class="icon_btn">
												<svg aria-hidden="true" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon">
													<path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</span>
											<span class="text_btn">Ajouter une formation</span>
										</button>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
										Expériences professionnelles
									</button>
								</h2>
								<div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
									<div class="accordion-body">
										<div id="experience_container">
											
										</div>
										<button id="ajouter_experience" class="btn btn-outline-dark mt-3 ajouter">
											<span class="icon_btn">
												<svg aria-hidden="true" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon">
													<path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</span>
											<span class="text_btn">Ajouter une expérience professionnelle</span>
										</button>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
										Compétences
									</button>
								</h2>
								<div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
									<div class="accordion-body">
										<div id="competence_container">
											
										</div>
										<button id="ajouter_competence" class="btn btn-outline-dark mt-3 ajouter">
											<span class="icon_btn">
												<svg aria-hidden="true" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon">
													<path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</span>
											<span class="text_btn">Ajouter une compétence</span>
										</button>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
										Références
									</button>
								</h2>
								<div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse">
									<div class="accordion-body">
										<div id="reference_container">
											
										</div>
										<button id="ajouter_reference" class="btn btn-outline-dark mt-3 ajouter">
											<span class="icon_btn">
												<svg aria-hidden="true" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon">
													<path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</span>
											<span class="text_btn">Ajouter une référence</span>
										</button>
									</div>
								</div>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-12">
								<button class="btn btn-outline-dark mb-2">
									<span class="icon_btn">
										<svg aria-hidden="true" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon">
											<path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</span>
									<span class="text_btn">Qualité</span>
								</button>
								<button class="btn btn-outline-dark mb-2">
									<span class="icon_btn">
										<svg aria-hidden="true" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon">
											<path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</span>
									<span class="text_btn">Certificat</span>
								</button>
								<button class="btn btn-outline-dark mb-2">
									<span class="icon_btn">
										<svg aria-hidden="true" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon">
											<path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</span>
									<span class="text_btn">Cours</span>
								</button>
								<button class="btn btn-outline-dark mb-2">
									<span class="icon_btn">
										<svg aria-hidden="true" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon">
											<path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</span>
									<span class="text_btn">Réalisations</span>
								</button>
								<button class="btn btn-outline-dark mb-2">
									<span class="icon_btn">
										<svg aria-hidden="true" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon">
											<path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</span>
									<span class="text_btn">Activités extra-professionnnelles</span>
								</button>
							</div>
						</div>
						<div class="row mt-5 mb-3	">
							<div class="d-flex justify-content-end">
								<button type="button" class="btn btn-outline-success me-2" id="enregistrer">
									<span class="icon_btn">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-save">
											<path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
											<polyline points="17 21 17 13 7 13 7 21"></polyline>
											<polyline points="7 3 7 8 15 8"></polyline>
										</svg>
									</span>
									<span class="text_btn">Enregistrer</span>
								</button>
								<button type="button" class="btn telecharger" style="background-color: #113cf9; color:white;">
									<span class="icon_btn">
										<svg aria-hidden="true" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
											<path d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</span>
									<span class="text_btn">Télécharger</span>
								</button>
							</div>
						</div>	
					</div>
				</div>

				<!-- Block de prévisualisation du CV -->
				<div class="col-lg-6">
					<div class="p-5" style="outline: 1px solid #dee2e6; border-radius: 7px; background-color: #fff;">
						<div class="row cv">
							<div class="col-4 bg-dark text-white pe-0">
								<div class="row mb-5">
									<div class="col-12 bg-secondary d-flex align-items-center p-0" style="height: 230px;">
										<img src="../../assets/img/User.svg" alt="photo_de_profil" id="profil" style="width: 100%; height: 100%;">
									</div>
								</div>
								<div class="row mb-5">
									<div class="col-2"></div>
									<div class="col-10">
										<div class="mb-4">
											<h3>EDUCATION </h3>
											<hr class="border border-warning border-1 opacity-100 mt">
											<div class="mt-3 ms-3" id="education">
												
											</div>
										</div>
										<div class="mb-3">
											<h3>REFERENCE </h3>
											<hr class="border border-warning border-1 opacity-100">
											<div class="mt-3 ms-3" id="reference">
												
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="mb-3">
											<div class="row">
												<div class="col-2 bg-warning mb-1 h-8"></div>
												<div class="col-10 bg-secondary pt-2 mb-1 h-8">
													<h4>Phone </h4>
												</div>
											</div>
											<div class="row">
												<div class="col-2"></div>
												<div class="col-10">
													<span class="phone"></span>
												</div>
											</div>
										</div>
										<div class="mb-3">
											<div class="row">
												<div class="col-2 bg-warning mb-1 h-8"></div>
												<div class="col-10 bg-secondary pt-2 mb-1 h-8">
													<h4>Email </h4>
												</div>
											</div>
											<div class="row">
												<div class="col-2"></div>
												<div class="col-10">
													<span class="email"></span>
												</div>
											</div>
										</div>
										<div class="mb-3">
											<div class="row">
												<div class="col-2 bg-warning mb-1 h-8"></div>
												<div class="col-10 bg-secondary pt-2 mb-1 h-8">
													<h4>Website </h4>
												</div>
											</div>
											<div class="row">
												<div class="col-2"></div>
												<div class="col-10">
													<span class="website"></span>
												</div>
											</div>
										</div>
										<div class="mb-5">
											<div class="row">
												<div class="col-2 bg-warning mb-1 h-8"></div>
												<div class="col-10 bg-secondary pt-2 mb-1 h-8">
													<h4>Addresse </h4>
												</div>
											</div>
											<div class="row">
												<div class="col-2"></div>
												<div class="col-10">
													<span class="adresse"></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-8 pt-5 bg-light text-black">
								<div class="row mt-3 mb-5 p-4 d-flex align-items-center bg-warning text-black">
									<div class="">
										<h2 class="mt-3">
											<strong><span class="me-1 prenom"></span></strong>  
											<span class="nom"></span>
										</h2>
										<h2 class="titre_du_profil"></h2>
									</div>
								</div>
								<div class="row mb-4 pe-4 ps-4">
									<div class="">
										<h3>ABOUT ME </h3>
										<hr class="border border-secondary border-1 opacity-100">
										<div class="">
											<p class="apropos_de_vous"></p>
										</div>
									</div>
								</div>
								<div class="row mb-4 pe-4 ps-4">
									<div class="work_experience">
										<h3>WORK EXPERIENCE </h3>
										<hr class="border border-secondary border-1 opacity-100">
										<div id="experience">

										</div>
									</div>
								</div>
								<div class="row mb-3 pe-4 ps-4">
									<div class="">
										<h3>SOFTWARE SKILL </h3>
										<hr class="border border-secondary border-1 opacity-100">
										<div id="competence">

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Script permettant de télécharger le CV -->
		<script>
			var btnTelecharger = document.querySelectorAll('.telecharger');
			
			for (let i = 0; i < btnTelecharger.length; i++) {
				btnTelecharger[i].addEventListener ('click', (event) => {
					telecharger_cv();
				});
			}

			function telecharger_cv(){
				var cv_width = $('.cv').width(),
						cv_height = $('.cv').height(),
						margin = 15,
						pdf_width = cv_width+(margin*2),
						pdf_height = (pdf_width*1.5)+(margin*2),
						canvas_width = cv_width,
						canvas_height = cv_height,
						totalPDFPages = Math.ceil(cv_height/pdf_height)-1;

				html2canvas($('.cv')[0],{allowTaint:true}).then(function(canvas) {
					canvas.getContext('2d');
					console.log(canvas.height+"  "+canvas.width);
					
					var imgData = canvas.toDataURL("image/jpeg", 1.0);
					var pdf = new jsPDF('p', 'pt',  [pdf_width, pdf_height]);
					pdf.addImage(imgData, 'JPG', margin, margin,canvas_width,canvas_height);
					
					for (var i = 1; i <= totalPDFPages; i++) { 
						pdf.addPage(pdf_width, pdf_height);
						pdf.addImage(imgData, 'JPG', margin, -(pdf_height*i)+(margin*4),canvas_width,canvas_height);
					}
					
					pdf.save("Mon_CV.pdf");
				});
			}
		</script>

		<!-- Scripts Bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
		<script type="text/javascript" src="../../assets/js/edit_cv.js" defer></script>
	</body>
</html>