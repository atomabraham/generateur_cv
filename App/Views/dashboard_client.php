<?php
session_start();
include_once('../Controllers/connect_db.php');
$db=connect_db();
// recuperer les champs

$q =null;

    if (isset($_GET['q'])){
        $q = $_GET['q'];
    }
function cv() {

   ?>
   <div class="d-flex">
   <img src="../img/th.jpg">
   <div class="modl "style="border:100px; background-color:#f1f1f9;width: 50%;  height: 20vw;margin-left:3%;">
         <button style="margin-top:25%; margin-left:40%;background-color:#113cf9; border-radius:10%;color:white;border:none;"><a href="modeles_cv.php">creer cv</a></button>
       </div>
   </div>   
   <?php
}

function dashbord(){
    ?> 
    <div class="modl "style="border:100px; background-color:#f1f1f9;width: 50%;  height: 50%;">
        <button style="margin-top:25%;margin-left:40%;background-color:#113cf9; border-radius:10%;color:white;border:none;"><a href="modeles_cv.php">creer cv</a></button>
    </div>
    <h4>Offres d'emplois</h4>
        
    <?php

}



?>
 <?php

function profil(){
include_once('../Controllers/connect_db.php');
$db=connect_db();
if(isset($_SESSION['username'])){
// recuperer les champs
$request= "SELECT * FROM clients "; 
$clients=$db->prepare($request);
$clients->execute();
$listclient=$clients->fetch();
// print_r($_SESSION['user']);


$requests="SELECT * FROM utilisateurs where id_utilisateur=LAST_INSERT_ID() ";
$users=$db->prepare($requests);
$users->execute();
$listusers=$users->fetch();
print_r($listclient['nom']);
        ?>
<div class="row" style=" background-color:  #f1f1f1;">
       
        <div class="col-md-3">
            <h6 >Mon profil</h6>
        </div>
        <div class="col-md-6"></div>
        <div class="col-md-3 col-sm-3 col-xm-3">
             <form method="POST" action="../Controllers/modify_user.php?q=modifier">
            <input type="hidden"  name="id_user" value="<?php echo $listclient['id_client']?>">
              <button type="submit" style="background-color:#113cf9;color:white; border:none;border-radius:10%;">
              modifier </button>
              
           </form>
        </div>
     </div>
    
  <div class="row">
    <div class="col-md-6">
     <form method="POST" action="" >  
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label " style="color:black;">Email address</label>
                    <input type="email" name="email"disabled class="form-control" id="exampleFormControlInput1" value="<?php echo $_SESSION['username']['email']?>">
                    </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" style="color:black;">nom</label>
                    <input type="pseudo" name="nom" disabled class="form-control" id="exampleFormControlInput1" value="<?php echo $listclient['nom'];?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" style="color:black;">password</label>
                    <input type="password" name="password" disabled class="form-control" id="exampleFormControlInput1" value="<?php echo $_SESSION['username']['mot_de_passe']?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" style="color:black;">telephone</label>
                    <input type="number" name="tel" disabled class="form-control" id="exampleFormControlInput1" value="<?php echo $listclient['telephone'];?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" style="color:black;">nom_utilisateur</label>
                    <input type="number" name="pseudo" disabled class="form-control" id="exampleFormControlInput1" value="">
                </div>
                <input type="number" name="modifier" disabled class="form-control" id="exampleFormControlInput1">
                
    </form>
</div>
<div class="col-md-6">
    <div class="img">
      <form method="POST">

      <input style="margin-top:20%;" type="file" >
     </form>  
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" style="color:black;">code-pays</label>
        <input type="text" class="form-control"disabled id="exampleFormControlInput1"value="<?php echo $listclient['code_pays'];?>">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label" style="color:black;">prenom</label>
        <input type="text" class="form-control"disabled id="exampleFormControlInput1"value="<?php echo $listclient['prenom'];?>">
    </div>
  </div>
</div>

    
        <?php
}
else{
  echo "session fermee";

}
}
function deconnexion(){
if(isset($_SESSION['user'])){
session_destroy();
header('Location:../../index.php');

}
else{
  echo "Session innexistante";
}
}
function propos(){
    
    ?>
      <h3 class="text-center"> A PROPOS</h3>
      <label class="text-center" style="color:black;"><b>Notre objectif:permettre a toute personne de pouvoir avoir un cv le plus rapide possible
        afin d'etre embauche facilement.
    </b></label>
      <p style="margin-top:5%;"class="text-center" ><b>Chez cv_generator</b>, nous pensons que la création d'un CV professionnel doit être simple, rapide et accessible à tous. Que vous soyez PDG ou en début de carrière,<br> la prochaine étape de votre carrière commence toujours par la bonne première impression que vous véhiculez par votre CV.</p>
    <?php
}

?>
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
    <div class="container-fluid h">
      <div class="header row " >
        <div class="hd col-md-8 col-sm-8">
          <span>BIENVENUE 
            <?php
            if(isset($_SESSION['client'])){
              echo $_SESSION['client']['nom'];

            }
            ?>
          dans Votre</span><br>
          <label> espace client</label><br>
        </div>
        <div class="col-md-4">

          <a href="?q=profil" >  
            <img src="../../assets/img/user1.svg" class="img1">
          </a>
          <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" style="margin-left:70%;margin-top:-10%;"type="button" data-bs-toggle="dropdown" aria-expanded="false">
    pseudo
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">parametre</a></li>
    <li><a class="dropdown-item" href="?q=deconnexion">deconnexion</a></li>
  
  </ul>
</div>
          
          
           </p>
        </div>
      </div>
   
      <div class="row">
      <div class="col-md-2 div1">
      <div class="sidebar">
          <ul type="none">
            <li class="left_bar">
              <a href="?q=Dashbord" class="a" style="color:black;">
                <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                <span class="title">Tableau</span>
              </a>  
            </li>
            <li class="left_bar">
              <a href="?q=cv"class="a">
                <span class="icon"><ion-icon name="reader-outline"></ion-icon></span>
                <span class="title">cv</span>
              </a>  
            </li>
          
            <li class="left_bar">
              <a href="#" class="a">
                <span class="icon"><ion-icon name="file-tray-full-outline"></ion-icon></span>
                <span class="title">service</span>
              </a>  
            </li>
       
          <li class="left_bar">
              <a href="?q=propos" class="a">
                <span class="icon "><ion-icon name="file-tray-full-outline"></ion-icon></span>
                <span class="title">a propos</span>
              </a>  
            </li>
          </ul>
        </div>
      </div>
        <div class="col-md-1"></div>        
        <div class="col-md-9 div2">
          <?php 
          if ($q=='cv'){
            cv();
          }
          else if($q=='Dashbord'){
            dashbord();
          }
          else if($q=='profil'){
            profil();
          }
          else if($q=='propos'){
            propos();
          }
          else if($q=='deconnexion'){
            deconnexion();
            
          }
          
          
        
          ?>
        </div>
      </div>
    </div>
       
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
    <script src="https://kit.fontawesome.com/45b8fbd474.js" crossorigin="anonymous"></script>
  </body>
</html>

