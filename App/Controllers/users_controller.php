<?php
	include 'connect_db.php';
	$action = $_GET['action'];
	$conn_db = connect_db();

	if ($action == "inscription") {
		// Recupération des données du formulaire d'inscription
		$prenom = $_POST['firstName'];
		$nom = $_POST['name'];
		$email = $_POST['mail'];
		$password = hash('sha256', $_POST['password']);
		$role = $_POST['role'];

		// Sélection de tous les utilisateurs de la base de données
		try {
			$select = $conn_db->query("SELECT * FROM utilisateurs");
			$usersList = $select->fetchAll();
		} catch(PDOException $exception) {
				echo "Erreur 1 : " . $exception->getMessage() . "<br/>";
		}

		// Vérifions que l'adresse email saisie par l'utilisateur n'existe pas dans notre base de données
		foreach ($usersList as $key => $user) {
			if ($email !== $user['email']) {
				$etat = true;
				break;
			} else {
				$etat = false;
			}
		}

		if ($etat) { // Si l'adresse email saisie par l'utilisateur n'existe pas dans notre base de données, on enregistre ses information dans la base de données 
			try {
				// Insertion dans la table utilisateurs
				$insertUser = $conn_db->prepare("INSERT INTO utilisateurs (email, mot_de_passe, role) VALUES (?, ?, ?)");
				$insertUser->execute([$email, $password, $role]);
			} catch(PDOException $exception) {
					echo "Erreur 2 : " . $exception->getMessage() . "<br/>";
			}
			$insertUser = null;

			try {
				// Sélection du dernier utilisateur enregistré dans la table utilisateurs
				$selectUser = $conn_db->query("SELECT * FROM utilisateurs WHERE id_utilisateur = LAST_INSERT_ID()");
				$userData = $selectUser->fetch();
			} catch(PDOException $exception) {
					echo "Erreur 3 : " . $exception->getMessage() . "<br/>";
			}

			try {
				// Insertion dans la table clients
				$insertCustomer = $conn_db->prepare("INSERT INTO clients (prenom, nom, id_utilisateur) VALUES (?, ?, ?)");
				$insertCustomer->execute([$prenom, $nom, $userData['id_utilisateur']]);
			} catch(PDOException $exception) {
					echo "Erreur 4 : " . $exception->getMessage() . "<br/>";
			}
			$selectUser = null;
			$insertCustomer = null;
			$conn_db = null;
			header('Location:../Views/login.php');
		} else { // Sinon, on affiche un message pour dire que cet utilisateur existe déjà 
			echo "Utilisateur existant";
		}
	}

	if ($action == "connexion") {
		// Recupération des données du formulaire de connexion
		$email = $_POST['mail'];
		$password = hash('sha256', $_POST['password']);

		// Sélection de tous les utilisateurs de la base de données
		try {
			$select = $conn_db->query("SELECT * FROM utilisateurs");
			$usersList = $select->fetchAll();
		} catch(PDOException $exception) {
				echo "Select Error: " . $exception->getMessage() . "<br/>";
		}

		// Vérifions que l'adresse email saisie par l'utilisateur existe dans notre base de données
		foreach ($usersList as $key => $user) {
			if ($email == $user['email']) {
				$etat = true;
				break;
			} else {
				$etat = false;
			}
		}

		if ($etat) { // Si l'adresse email saisie par l'utilisateur existe dans notre base de données,
			// On recupère son mot de passe et son role dans la base de données 
			$hash_password = $user['mot_de_passe'];
			$role = $user['role'];
			if ($password == $hash_password) { // Si le mot de passe saisie par l'utilisateur correspond au mot de passe en base de données, on démarre sa session et on le redirige vers son espace
				session_start();
				$_SESSION['username'] = $user['nom_utilisateur'];
				if ($role == "admin") {
					header('Location:../Views/dashboard_admin.php');
				}
				if ($role == "customer") {
					header('Location:../Views/dashboard_client.php');
				}
			} else { // Sinon, on affiche un message à l'utilisateur pour lui dire que le login ou le mot de passe est incorrecte
				echo "Login ou mot de passe incorrecte";
			}
		} else {
			echo "Erreur : Utilisateur inexistant ";
		}
	}
?>