<?php

include_once('../Controllers/connect_db.php');
session_start();
 $db=connect_db();
 
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$telephone=$_POST['tel'];
$code_pays=$_POST['code_pays'];
$photo=$_POST['photo'];

$email=$_POST['email'];
$pwd=$_POST['password'];

// $pwd=hash('sha256',$pwd);
$reques="UPDATE clients SET nom=?, prenom = ?,code_pays=?,tel=? WHERE id_client=".$_POST['id_user'].""; 
$exe=$db->prepare($reques);
$exe->execute(array($prenom,$nom,$code_pays,$telephone));

// table utilisateur
$reques="UPDATE utilisateurs SET email=?, photo = ?WHERE id_utilisateur=".$_POST['id_user'].""; 
$exe=$db->prepare($reques);
$exe->execute(array($email,$photo));
if($exe){
header('Location:../views/dashboard_client.php');
}else{
  echo "pas modifie";
}
?> 