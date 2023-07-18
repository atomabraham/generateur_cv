
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="icon" href="../../assets/img/logo_3.svg" alt="cv_generator-logo">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/dashboard_client.css">
  </head>
  <body>
<?php
include_once('../Controllers/connect_db.php');
session_start();
 $db=connect_db();

if(isset($_SESSION['username'])){
//  //recuper les champs du client
$request="SELECT* from clients where id_client=".$_POST['id_user'].""; 
$clients=$db->prepare($request);
$clients->execute();
$listclient=$clients->fetch();
 // les champs du users
 $requests="SELECT * FROM utilisateurs where id_utilisateur=".$_POST['id_user']." ";
 $users=$db->prepare($requests);
 $users->execute();
 $listusers=$users->fetch();
 
?>
  <div class="row">
     <form method="POST" action="../Controllers/update_user1.php" > 
     <div class="row" style=" background-color:  #f1f1f1;">
        <div class="col-md-3">
            <h6 >Mon profil</h6>
        </div>
        <div class="col-md-6"></div>
        <div class="col-md-3 col-sm-3 col-xm-3">
   
        <input type="hidden" name="id_user" value="<?php echo $listclient['id_client']?>">
              <button type="submit" style="background-color:#113cf9;color:white; border:none;border-radius:10%;">
              modifier </button>
        
     </div>
      </form>
     <div class="col-md-6"> 
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label " style="color:black;">Email address</label>
                    <input type="email" name="email"   class="form-control" id="exampleFormControlInput1" value="<?php echo $_SESSION['username']['email']?>">
                    </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" style="color:black;">nom</label>
                    <input type="pseudo" name="nom"   class="form-control" id="exampleFormControlInput1" value="<?php echo $listclient['nom'];?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" style="color:black;">password</label>
                    <input type="password" name="password"   class="form-control" id="exampleFormControlInput1" value="<?php echo $listusers['mot_de_passe']?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" style="color:black;">telephone</label>
                    <input type="number"   name="tel" class="form-control" id="exampleFormControlInput1" value="<?php echo $listclient['telephone'];?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" style="color:black;">nom_utilisateur</label>
                    <input type="text" class="form-control"   name="nom_utilisateur" id="exampleFormControlInput1" value="<?php echo $listusers['nom_utilisateur']?>">
                </div>
                <input type="number" name="modifier"   class="form-control" id="exampleFormControlInput1">
</div>            

<div class="col-md-6">
    <div class="img">
      <input style="margin-top:20%;" type="file" name="photo">
     
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" style="color:black;">code-pays</label>
        <input name="code_pays" type="text"   class="form-control" id="exampleFormControlInput1"value="<?php echo $listclient['code_pays'];?>">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" style="color:black;">prenom</label>
        <input type="text" name="prenom"   class="form-control" id="exampleFormControlInput1"value="<?php echo $listclient['prenom'];?>">
    </div>

</form>
</div>
<?php
}else{
  echo "session fermee";    
}
    ?>