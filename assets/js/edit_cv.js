// Formulaire d'édition du CV
	// Déclaration des variables : Informations personnelles
		var photo_de_profil = document.getElementById('photo_de_profil')
		var prenom = document.getElementById('prenom')
		var nom = document.getElementById('nom')
		var titre_du_profil = document.getElementById('titre_du_profil')
		var email = document.getElementById('email')
		var telephone = document.getElementById('numero_de_telephone')
		var adresse = document.getElementById('adresse')
		var biographie = document.getElementById('apropos_de_vous')
		var div_autre_element = document.getElementById('autre_element')
		var site_internet = document.getElementById('website')
		var supprimer_informations_personnelles = document.getElementById('supprimer_informations_personnelles')
		
		// Déclaration des variables : Formations
		var formation_container = document.getElementById('formation_container')
		var btn_ajouter_formation = document.getElementById('ajouter_formation')
		
		// Déclaration des variables : Expériences professionnelles
		var experience_container = document.getElementById('experience_container')
		var btn_ajouter_experience = document.getElementById('ajouter_experience')
		
		// Déclaration des variables : Compétences
		var competence_container = document.getElementById('competence_container')
		var btn_ajouter_competence = document.getElementById('ajouter_competence')
		
		// Déclaration des variables : Références
		var reference_container = document.getElementById('reference_container')
		var btn_ajouter_reference = document.getElementById('ajouter_reference')
		
// Prévisualisation du CV
	// Déclaration des variables :
		// Informations personnelles
		var profil = document.getElementById('profil')
		var previsualisation_prenom = document.querySelector('.prenom')
		var previsualisation_nom = document.querySelector('.nom')
		var previsualisation_titre_du_profil = document.querySelector('.titre_du_profil')
		var previsualisation_email = document.querySelector('.email')
		var previsualisation_phone = document.querySelector('.phone')
		var previsualisation_adresse = document.querySelector('.adresse')
		var previsualisation_apropos_de_vous = document.querySelector('.apropos_de_vous')
		var previsualisation_website = document.querySelector('.website')
			
		// Formations
		var preview_education = document.getElementById('education')

		// Expériences professionnelles
		var preview_experience = document.getElementById('experience')
	
		// Compétences
		var preview_competence = document.getElementById('competence')

		// Références
		var preview_reference = document.getElementById('reference')

// Fonctions 

	function suppression(param) {

		function supprimer(elt) {
			elt.addEventListener('click', (event) => {
				var div1 = elt.parentElement
				var div2 = div1.parentElement
				var div3 = div2.parentElement
				var card_body = div3.parentElement
				var card = card_body.parentElement
				card.remove()
				param.remove()
			});
		}
	
		var btn_supprimer = document.querySelectorAll('.supprimer')
		btn_supprimer.forEach(elt => supprimer(elt))
	}

	var i = 1
	// Ajouter une formation
	function ajouter_formation() {
		var formation_content =document.createElement('div')
		formation_content.className = "card mb-3"
		formation_content.innerHTML = `<div class="card-body">
			<div class="row">
				<div class="col-12">
					<div class="mb-3">
						<input type="text" name="titre_formation_`+ i +`"`+` id="titre_formation_`+ i +`"`+` placeholder="Formation" title="Entrer le titre de la formation" class="form-control">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="mb-3">
						<input type="text" name="nom_de_l_etablissement_`+ i +`"`+` id="nom_de_l_etablissement_`+ i +`"`+` placeholder="Nom de l'établissement" title="Entrer le nom de l'établissement" class="form-control">
					</div>
				</div>
			</div>
			<div class="row d-flex justify-content-between">
				<div class="col-4">
					<div class="mb-3">
						<label for="date_debut_formation_`+ i +`"`+` class="form-label">Date début</label>
						<input type="date" name="date_debut_formation_`+ i +`"`+` id="date_debut_formation_`+ i +`"`+` title="Definir la date de debut" class="form-control">
					</div>
				</div>
				<div class="col-4">
					<div class="mb-3">
						<label for="date_fin_formation_`+ i +`"`+` class="form-label">Date fin</label>
						<input type="date" name="date_fin_formation_`+ i +`"`+` id="date_fin_formation_`+ i +`"`+` title="Definir la date de fin" class="form-control">
					</div>
				</div>
				<div class="col-4">
					<div class="mb-3">
						<span><label for="coche_date_formation_en_cours_`+ i +`"`+` class="form-label me-3">En cours</label><input type="checkbox" name="coche_date_formation_en_cours_`+ i +`"`+` id="coche_date_formation_en_cours_`+ i +`"`+` class="form-check-input" style="outline: 1px solid #dee2e6;"></span>
						<input type="date" name="date_formation_en_cour_`+ i +`"`+` id="date_formation_en_cour_`+ i +`"`+` class="form-control">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 d-flex justify-content-end">
					<div class="mb-3 justify-content-between">
						<button class="btn btn-outline-danger supprimer">
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
		</div>`
		formation_container.append(formation_content)

		var education_content =document.createElement('p')
		education_content.id = "education_"+i
		education_content.className = "education mb-3"
		education_content.innerHTML = `<h4 class="diplome`+ i +`"`+`></h4>
		<span class="nom_de_l_etablissement`+ i +`"`+`></span><br/>
		<span><label class="date_debut_formation`+ i +`"`+`></label><label class="ms-2 me-2"> - </label><label class="date_fin_formation`+ i +`"`+`></label></span>`
		preview_education.append(education_content)
				
		var p = document.getElementById('education_'+i)

		// Déclaration des variables
		var titre_formation = document.getElementById('titre_formation_'+i)
		var nom_de_l_etablissement = document.getElementById('nom_de_l_etablissement_'+i)
		var date_debut_formation = document.getElementById('date_debut_formation_'+i)
		var date_fin_formation = document.getElementById('date_fin_formation_'+i)
		
		var previsualisation_diplome = document.querySelector('.diplome'+i)
		var previsualisation_nom_ecole = document.querySelector('.nom_de_l_etablissement'+i)
		var previsualisation_date_debut_formation = document.querySelector('.date_debut_formation'+i)
		var previsualisation_date_fin_formation = document.querySelector('.date_fin_formation'+i)
			
		titre_formation.addEventListener ('input', (event) => {
			previsualisation_diplome.textContent = titre_formation.value;
		});

		nom_de_l_etablissement.addEventListener ('input', (event) => {
			previsualisation_nom_ecole.textContent = nom_de_l_etablissement.value;
		});

		date_debut_formation.addEventListener ('input', (event) => {
			previsualisation_date_debut_formation.textContent = date_debut_formation.value;
		});

		date_fin_formation.addEventListener ('input', (event) => {
			previsualisation_date_fin_formation.textContent = date_fin_formation.value;
		});
		i++

		suppression(p);
	}

	// Ajouter une experience professionnelle
	function ajouter_experience() {
		var experience_content =document.createElement('div')
		experience_content.className = "card mb-3"
		experience_content.innerHTML = `<div class="card-body">
			<div class="row">
				<div class="col-12">
					<div class="mb-3">
						<input type="text" name="poste_occupe_`+ i +`"`+` id="poste_occupe_`+ i +`"`+` placeholder="Poste occupé" title="Entrer le poste occupé" class="form-control">
					</div>
				</div>
			</div>
			<div class="row d-flex justify-content-between">
				<div class="col-8">
					<div class="mb-3">
				<input type="text" name="nom_de_l_entreprise_`+ i +`"`+` id="nom_de_l_entreprise_`+ i +`"`+` placeholder="Nom de l'entreprise" title="Entrer le nom de l'entreprise" class="form-control">
					</div>
				</div>
				<div class="col-4">
					<div class="mb-3">
						<input type="text" name="ville_de_l_entreprise_`+ i +`"`+` id="ville_de_l_entreprise_`+ i +`"`+` placeholder="Ville" title="Entrer la ville de l'entreprise" class="form-control">
					</div>
				</div>
			</div>
			<div class="row d-flex justify-content-between">
				<div class="col-4">
					<div class="mb-3">
						<label for="date_debut_experience_`+ i +`"`+` class="form-label">Date début</label>
						<input type="date" name="date_debut_experience_`+ i +`"`+` id="date_debut_experience_`+ i +`"`+` title="Definir la date de debut" class="form-control">
					</div>
				</div>
				<div class="col-4">
					<div class="mb-3">
						<label for="date_fin_experience_`+ i +`"`+` class="form-label">Date fin</label>
						<input type="date" name="date_fin_experience_`+ i +`"`+` id="date_fin_experience_`+ i +`"`+` title="Definir la date de fin" class="form-control">
					</div>
				</div>
				<div class="col-4">
					<div class="mb-3">
						<span><label for="coche_date_experience_en_cours_`+ i +`"`+` class="form-label me-3">En cours</label><input type="checkbox" name="coche_date_experience_en_cours_`+ i +`"`+` id="coche_date_experience_en_cours_`+ i +`"`+` class="form-check-input" style="outline: 1px solid #dee2e6;"></span>
						<input type="date" name="date_experience_en_cours_`+ i +`"`+` id="date_experience_en_cours_`+ i +`"`+` class="form-control">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="mb-3">
						<textarea id="description_taches_effectuees_`+ i +`"`+` placeholder="Taches éffectuées" title="Listez les taches éffectuées" class="form-control" rows="4"></textarea>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 d-flex justify-content-end">
					<div class="mb-3 justify-content-between">
						<button class="btn btn-outline-danger supprimer">
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
		</div>`
		experience_container.append(experience_content)

		var experience_content =document.createElement('div')
		experience_content.id = "experience_"+i
		experience_content.className = "row mb-3 experience"
		experience_content.innerHTML = `<div class="col-3">
			<span><label class="date_debut`+ i +`"`+`></label><label class="ms-2 me-2"> - </label><label class="date_fin`+ i +`"`+`></label></span>
		</div>
		<div class="col-9">
			<h4 class="poste`+ i +`"`+`></h4>
			<h5 class="nom_de_l_entreprise`+ i +`"`+`></h5>
			<p class="description_tache_effectuee`+ i +`"`+`></p>
		</div>`
		preview_experience.append(experience_content)
				
		var div = document.getElementById('experience_'+i)

		// Déclaration des variables
		var poste_occupe = document.getElementById('poste_occupe_'+i)
		var nom_de_l_entreprise = document.getElementById('nom_de_l_entreprise_'+i)
		var date_debut_experience = document.getElementById('date_debut_experience_'+i)
		var date_fin_experience = document.getElementById('date_fin_experience_'+i)
		var description_taches_effectuees = document.getElementById('description_taches_effectuees_'+i)

		var previsualisation_poste = document.querySelector('.poste'+i)
		var previsualisation_nom_de_l_entreprise = document.querySelector('.nom_de_l_entreprise'+i)
		var previsualisation_date_debut = document.querySelector('.date_debut'+i)
		var previsualisation_date_fin = document.querySelector('.date_fin'+i)
		var previsualisation_description_tache_effectuee = document.querySelector('.description_tache_effectuee'+i)

		poste_occupe.addEventListener ('input', (event) => {
			previsualisation_poste.textContent = poste_occupe.value;
		});

		nom_de_l_entreprise.addEventListener ('input', (event) => {
			previsualisation_nom_de_l_entreprise.textContent = nom_de_l_entreprise.value;
		});

		date_debut_experience.addEventListener ('input', (event) => {
			previsualisation_date_debut.textContent = date_debut_experience.value;
		});

		date_fin_experience.addEventListener ('input', (event) => {
			previsualisation_date_fin.textContent = date_fin_experience.value;
		});

		description_taches_effectuees.addEventListener ('input', (event) => {
			previsualisation_description_tache_effectuee.textContent = description_taches_effectuees.value;
		});
		i++

		suppression(div);
	}
	
	// Ajouter une compétence
	function ajouter_competence() {
		var competence_content =document.createElement('div')
		competence_content.className = "card mb-3"
		competence_content.innerHTML = `<div class="card-body">
			<div class="row">
				<div class="col-12">
					<div class="mb-3">
						<input type="text" name="competence_`+ i +`"`+` id="competence_`+ i +`"`+` placeholder="Compétence" title="Entrer la compétence" class="form-control">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<div class="mb-3">
						<label for="niveau_de_competence_`+ i +`"`+` class="form-label">Niveau</label>
						<input type="range" size="1" min="0" max="5" step="1" value="0" name="niveau_de_competence_`+ i +`"`+` id="niveau_de_competence_`+ i +`"`+` title="Définisez le niveau de compétence" class="form-range">
					</div>
				</div>
				<div class="col-6">
					<div class="mb-3" style="padding-top: 23px;">
						<span id="intitule_niveau_de_competence_`+ i +`"`+` style="margin-top: 20px;">Définisez votre niveau</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 d-flex justify-content-end">
					<div class="mb-3 justify-content-between">
						<button class="btn btn-outline-danger supprimer">
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
		</div>`
		competence_container.append(competence_content)

		var competence_content =document.createElement('div')
		competence_content.id = "competence_bloc_"+i
		competence_content.className = "row mb-3"
		competence_content.innerHTML = `<div class="col-4"></div>
		<div class="col-8 d-flex justify-content-between">
			<div class="col-12">
				<label for="customRange`+ i +`"`+` class="form-label competence`+ i +`"`+`></label>
				<div class="progress">
					<div id="progress_bar_`+ i +`"`+` class="progress-bar bg-dark" role="progressbar" style="width: 8%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
				</div>
			</div>
		</div>`
		preview_competence.append(competence_content)
				
		var div = document.getElementById('competence_bloc_'+i)

		// Déclaration des variables
		var competence = document.getElementById('competence_'+i)
		var niveau_de_competence = document.getElementById('niveau_de_competence_'+i)
		var intitule_niveau_de_competence = document.getElementById('intitule_niveau_de_competence_'+i)

		var previsualisation_competence= document.querySelector('.competence'+i)
		var previsualisation_niveau_competence = document.getElementById('progress_bar_'+i)

		competence.addEventListener ('input', (event) => {
			previsualisation_competence.textContent = competence.value;
		});

		niveau_de_competence.addEventListener ('change', (event) => {
			if (niveau_de_competence.value == 0) {
				previsualisation_niveau_competence.style.width = "8%"
				previsualisation_niveau_competence.ariaValuenow = "0"
				previsualisation_niveau_competence.textContent = "0%"
				intitule_niveau_de_competence.textContent = "Définisez votre niveau";
			} else if (niveau_de_competence.value == 1) {
				previsualisation_niveau_competence.style.width = "15%"
				previsualisation_niveau_competence.ariaValuenow = "15"
				previsualisation_niveau_competence.textContent = "15%"
				intitule_niveau_de_competence.textContent = "Novice";
			} else if (niveau_de_competence.value == 2) {
				previsualisation_niveau_competence.style.width = "25%"
				previsualisation_niveau_competence.ariaValuenow = "25"
				previsualisation_niveau_competence.textContent = "25%"
				intitule_niveau_de_competence.textContent = "Débutant";
			} else if (niveau_de_competence.value == 3) {
				previsualisation_niveau_competence.style.width = "60%"
				previsualisation_niveau_competence.ariaValuenow = "60"
				previsualisation_niveau_competence.textContent = "60%"
				intitule_niveau_de_competence.textContent = "Intermediaire";
			} else if (niveau_de_competence.value == 4) {
				previsualisation_niveau_competence.style.width = "90%"
				previsualisation_niveau_competence.ariaValuenow = "90"
				previsualisation_niveau_competence.textContent = "90%"
				intitule_niveau_de_competence.textContent = "Compétent";
			} else if (niveau_de_competence.value == 5) {
				previsualisation_niveau_competence.style.width = "100%"
				previsualisation_niveau_competence.ariaValuenow = "100"
				previsualisation_niveau_competence.textContent = "100%"
				intitule_niveau_de_competence.textContent = "Expert";
			}
		});

		suppression(div);

		i++
	}
	
	// Ajouter une reférence
	function ajouter_reference() {
		var reference_content =document.createElement('div')
		reference_content.className = "card mb-3"
		reference_content.innerHTML = `<div class="card-body">
			<div class="row">
				<div class="col-12">
					<div class="mb-3">
						<input type="text" name="nom_du_responsable_`+ i +`"`+` id="nom_du_responsable_`+ i +`"`+` placeholder="Nom du responsable" title="Entrer le du responsable" class="form-control">
					</div>
				</div>
			</div>
			<div class="row d-flex justify-content-between">
				<div class="col-6">
					<div class="mb-3">
				<input type="text" name="job_occupation_`+ i +`"`+` id="job_occupation_`+ i +`"`+` placeholder="Poste occupé" title="Entrer le poste occupé" class="form-control">
					</div>
				</div>
				<div class="col-6">
					<div class="mb-3">
						<input type="text" name="company_name_`+ i +`"`+` id="company_name_`+ i +`"`+` placeholder="Nom de l'entreprise" title="Entrer le nom de l'entreprise" class="form-control">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="mb-3">
						<input type="tel" name="phone_number_`+ i +`"`+` id="phone_number_`+ i +`"`+` placeholder="Numéro de téléphone" title="Entrer le numéro de téléphone" class="form-control">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 d-flex justify-content-end">
					<div class="mb-3 justify-content-between">
						<button class="btn btn-outline-danger supprimer">
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
		</div>`
		reference_container.append(reference_content)

		var reference_content =document.createElement('p')
		reference_content.id = "reference_"+i
		reference_content.className = "reference mb-3"
		reference_content.innerHTML = `<h4 class="nom_du_responsable`+ i +`"`+`></h4>
		<span><label class="job_occupation`+ i +`"`+`></label><label class="ms-2 me-2">|</label><label class="company_name`+ i +`"`+`></label></span><br/>
		<span class="phone_number`+ i +`"`+`></span>`
		preview_reference.append(reference_content)
				
		var p = document.getElementById('reference_'+i)

		// Déclaration des variables
		var responsable = document.getElementById('nom_du_responsable_'+i)
		var job_occupation = document.getElementById('job_occupation_'+i)
		var company_name = document.getElementById('company_name_'+i)
		var phone_number = document.getElementById('phone_number_'+i)

		var previsualisation_nom_du_responsable = document.querySelector('.nom_du_responsable'+i)
		var previsualisation_job_occupation = document.querySelector('.job_occupation'+i)
		var previsualisation_company_name = document.querySelector('.company_name'+i)
		var previsualisation_phone_number = document.querySelector('.phone_number'+i)

		responsable.addEventListener ('input', (event) => {
			previsualisation_nom_du_responsable.textContent = responsable.value;
		});

		job_occupation.addEventListener ('input', (event) => {
			previsualisation_job_occupation.textContent = job_occupation.value;
		});

		company_name.addEventListener ('input', (event) => {
			previsualisation_company_name.textContent = company_name.value;
		});

		phone_number.addEventListener ('input', (event) => {
			previsualisation_phone_number.textContent = phone_number.value;
		});
		i++

		suppression(p);
	}

// Ecouteurs d'evenements : Informations personnelles
	// Photo de profile
	photo_de_profil.addEventListener ('change', (event) => {
		for (let i = 0; i < event.target.files.length; i++) {
			var file = event.target.files[i];
			profil.src = window.URL.createObjectURL(file);
		}
		console.log(file);
	});

	// Prenom
	prenom.addEventListener ('input', (event) => {
		previsualisation_prenom.textContent = prenom.value;
	});

	// Nom
	nom.addEventListener ('input', (event) => {
		previsualisation_nom.textContent = nom.value;
	});

	// Titre du profil
	titre_du_profil.addEventListener ('input', (event) => {
		previsualisation_titre_du_profil.textContent = titre_du_profil.value;
	});

	// Apropos de vous
	biographie.addEventListener ('input', (event) => {
		previsualisation_apropos_de_vous.textContent = biographie.value;
	});

	// Email
	email.addEventListener ('input', (event) => {
		previsualisation_email.textContent = email.value;
	});

	// Numero de telephone
	telephone.addEventListener ('input', (event) => {
		previsualisation_phone.textContent = telephone.value;
	});

	// Adresse
	adresse.addEventListener ('input', (event) => {
		previsualisation_adresse.textContent = adresse.value;
	});
	
	// Site internet
	site_internet.addEventListener ('input', (event) => {
		previsualisation_website.textContent = site_internet.value;
	});

	supprimer_informations_personnelles.addEventListener ('click', (event) => {
		photo_de_profil.value = ""
		prenom.value = ""
		nom.value = ""
		titre_du_profil.value = ""
		biographie.value = ""
		email.value = ""
		telephone.value = ""
		adresse.value = ""
		titre_du_profil.value = ""
		biographie.value = ""
		email.value = ""
		site_internet.value = ""
		profil.src = "../../assets/img/User.svg";
		previsualisation_prenom.textContent = ""
		previsualisation_nom.textContent = ""
		previsualisation_titre_du_profil.textContent = ""
		previsualisation_apropos_de_vous.textContent = ""
		previsualisation_email.textContent = ""
		previsualisation_phone.textContent = ""
		previsualisation_adresse.textContent = ""
		previsualisation_titre_du_profil.textContent = ""
		previsualisation_apropos_de_vous.textContent = ""
		previsualisation_email.textContent = ""
		previsualisation_website.textContent = ""
	});

	// Formations
	// Ajouter une formation
	btn_ajouter_formation.addEventListener ('click', (event) => {
		ajouter_formation();
	});

	// Expériences professionnelles
	// Ajouter une experience professionnelle
	btn_ajouter_experience.addEventListener ('click', (event) => {
		ajouter_experience();
	});

	// Compétences
	// Ajouter une compétence
	btn_ajouter_competence.addEventListener ('click', (event) => {
		ajouter_competence();
	});

	// Références
	// Ajouter une reférence
	btn_ajouter_reference.addEventListener ('click', (event) => {
		ajouter_reference();
	});