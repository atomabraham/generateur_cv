<?php
$q = NULL;
if (isset($_GET['q'])) {
  $q = $_GET['q'];
}
function Historique()
{
?>
<?php
}

function Modele()
{
  ?>

  <?php
}

function dashboard()
{
  ?>
  <h3 style="margin-top:03%">Résumé des activités</h3>
  <table class="table table-striped">
    <tr>
      <th>Cv téléchargés</th>
      <th>Cv en cours d'édition</th>
      <th>Evaluation</th>
      <th>Modèles</th>
    </tr>
    <tr>
      <td>1000</td>
      <td>500</td>
      <td>4.5/5</td>
      <td>10</td>
    </tr>
  </table>

  <!-- #add chart-->
  <div class="grahbox">
    <div class="box"><canvas id="myChart"></canvas></div>
    <div class="box"><canvas id="evina"></canvas></div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="main">
        <h2 style="align-text">Catégories d'appareils</h2>
        <ul>
          <li><i class="fa fa-fw fa-mobile"></i> Mobile : 60%</li>
          <li><i class="fa fa-fw fa-desktop"></i> Desktop : 30%</li>
          <li><i class="fa fa-fw fa-tablet"></i> Tablette : 10%</li>
        </ul>
      </div>
    </div>
    <div class="col-md-6">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
      the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
      it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
      typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
      containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
      versions of Lorem Ipsum</div>
  </div>

  <div>
    <canvas id="myChart">
      <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.0/dist/chart.umd.min.js"></script>
      <script defer src="../../assets/js/chart.js"></script>
    </canvas>
  </div>
  <?php

}

function client()
{
  ?>
  <?php
  require('../Controllers/connect_db.php');
  // Connect to MySQL database
  $pdo = connect_db();
  // Get the page via GET request (URL param: page), if non exists default the page to 1
  $page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int) $_GET['page'] : 1;
  // Number of records to show on each page
  $records_per_page = 5;

  $request = "SELECT*from clients";
  $allUsers = $pdo->prepare($request);
  $allUsers->execute();
  $Users = $allUsers->fetchAll();
  ?>
  <table class="table table-striped">
    <h3 style="margin-top:03%">LISTE CLIENTS</h3>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">prenom</th>
        <th scope="col">nom</th>
        <th scope="col">code_pays</th>
        <th scope="col">telephone</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      for ($i = 0; $i < count($Users); $i++) {
        ?>
        <tr>
          <th scope="row">
            <?php echo $i + 1 ?>
          </th>
          <td>
            <?= $Users[$i]['prenom'] ?>
          </td>
          <td>
            <?= $Users[$i]['nom'] ?>
          </td>
          <td>
            <?= $Users[$i]['code_pays'] ?>
          </td>
          <td>
            <?= $Users[$i]['telephone'] ?>
          </td>
          <td class="d-flex">

            <form method="POST" action="update_user.php?id=<?= $Users[$i]['id_client'] ?>">
              <button type="submit" class="b_sub"><i class="fa-solid fa-pencil" style="color: #80ff85;"></i></button>
            </form>
          </td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
  <?php
?>
<?php
}



function utilisateur()
{
  ?>
  <?php

  require('../Controllers/connect_db.php');
  // Connect to MySQL database
  $pdo = connect_db();
  // Get the page via GET request (URL param: page), if non exists default the page to 1
  $page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int) $_GET['page'] : 1;
  // Number of records to show on each page
  $records_per_page = 5;

  $request = "SELECT*from utilisateurs";
  $allUsers = $pdo->prepare($request);
  $allUsers->execute();
  $Users = $allUsers->fetchAll();
  ?>
  <table class="table table-striped">
    <h3 style="margin-top:03%">LISTE ADMINS</h3>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">nom_utilisateur</th>
        <th scope="col">email</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      for ($i = 0; $i < count($Users); $i++) {
        ?>
        <tr>
          <th scope="row">
            <?php echo $i + 1 ?>
          </th>
          <td>
            <?= $Users[$i]['nom_utilisateur'] ?>
          </td>
          <td>
            <?= $Users[$i]['email'] ?>
          </td>
          <div class="container">
        <div class="row">
            <div class="col-md-8 mt-4">
                <?php if(isset($_SESSION['message'])) : ?>
                    <h5 class="alert alert-success"><?= $_SESSION['message']; ?></h5>
                <?php 
                    unset($_SESSION['message']);
                    endif; 
                ?>

                <div class="card">
                    <div class="card-header">
                        <h3>Insert data into database using PDO in PHP</h3>
                    </div>
                    <div class="card-body">
                        
                        <form action="add_dmin.php" method="POST">
                            <div class="mb-3">
                                <label>Nom_utilisateur</label>
                                <input type="text" name="nom_utilisateur" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>mot_de_passe'</label>
                                <input type="password" name="mot_de_passe'" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label>role</label>
                                <input type="text" name="role" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_student_btn" class="btn btn-primary">submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
          <td class="d-flex">
            <form method="POST" action="update_user.php?id=<?= $Users[$i]['id_utilisateur'] ?>">
              <button type="submit" class="b_sub"><i class="fa-solid fa-pencil" style="color: #80ff85;"></i></button>
            </form>

            <form method="POST" action="delete_user.php?id=<?= $Users[$i]['id_utilisateur']; ?>">
              <button type="submit" class="b_sub"><i class="fa-solid fa-trash" style="color: #ff8080;"></i></button>
            </form>
          </td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
  <?php
} ?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <link rel="icon" href="../../assets/img/logo_3.svg" alt="cv_generator-logo">
  <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/css/dashboard_admin.css">
</head>

<body>
  <!-- #header-->
  <div class="navbar ">
    <div class="vide"></div>
    <div class="menu">
      <div>
        <img src="../../assets/img/20221217_222916.jpg" alt="Photo de profil">
      </div>
      <div>
        <span href="#">admin</span>
      </div>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
          aria-expanded="false">Menu</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">parametre</a></li>
          <li><a class="dropdown-item" href="login.php">Deconnexion</a></li>
        </ul>
      </li>
    </div>
  </div>
  <!-- #header end-->

  <div class="row">
    <div class="col-md-2 div1">
      <div class="sidebar">
        <ul type="none">
          <li class="left_bar">
            <a href="?q=dashboard">
              <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
              <span class="title">Tableau</span>
            </a>
          </li>
          <li class="left_bar">
            <a href="?q=modele">
              <span class="icon"><ion-icon name="reader-outline"></ion-icon></span>
              <span class="title">Modele</span>
            </a>
          </li>
          <div class="dropdown left_bar">
            <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
            <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              utilisateurs
            </button>
            <ul class="dropdown-menu">

              <li class="left_bar">
                <a href="?q=utilisateurs" class="dropdown-item">

                  <span class="title">Admins</span>
                </a>
              </li>

              <li class="left_bar">
                <a href="?q=client" class="dropdown-item">

                  <span class="title">client</span>
                </a>
              </li>

            </ul>
          </div>

          <li class="left_bar">
            <a href="?q=Historique">
              <span class="icon"><ion-icon name="file-tray-full-outline"></ion-icon></span>
              <span class="title">Historique</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-md-10 div2">

      <?php
      if ($q == 'dashboard') {
        dashboard();
      } else if ($q == 'utilisateurs') {
        utilisateur();
      }
      if ($q == 'modele') {
        Modele();

      } else if ($q == 'historique') {
        Historique();
      }
      if ($q == 'client') {
        client();
      }
      ?>
    </div>
  </div>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="https://kit.fontawesome.com/45b8fbd474.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
    integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
    integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
    crossorigin="anonymous"></script>
</body>

</html>