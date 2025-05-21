<?php
session_start(); // démarrer une session

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Récupérer les valeurs du formulaire de connexion
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Connexion à la base de données
  try {
    $db='Resto_Luxe';
    $user='root';
    $password_db='';
    $url='localhost';
    $port=3306;
    $pdo = new PDO('mysql:host='.$url.';port='.$port.';dbname='.$db,
                   $user, $password_db);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    die("Erreur de connexion à la base de données: " . $e->getMessage());
  }

  // Vérifier les informations d'identification de l'utilisateur
  $stmt = $pdo->prepare("SELECT * FROM Client WHERE Nom_Client=:Nom_Client AND Password=:Password");
  $stmt->bindParam(':Nom_Client', $username);
  $stmt->bindParam(':Password', $password);
  $stmt->execute();
  $compte = $stmt->fetch(PDO::FETCH_ASSOC);
  if($compte) {
    // Informations d'identification correctes, rediriger vers la page d'accueil
    $_SESSION['Client'] = $compte; // stocker l'utilisateur dans la session
    header('Location: index.php');
    exit();
  } else {
    // Informations d'identification incorrectes, afficher un message d'erreur
    $message = "Username or password incorrect !";
  }
}
?>
              <?php
require 'Apiclient.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Connexion</title>
   <style>
   body{ background-color: white;}
   </style>
    <!-- Custom fonts for this template-->
    <link href="vendor2/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets2/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body class="bg-gradient-primary">
<br />
<br />
<br />
<br />
<br />
    <div class="container"style="background-color: pink;" >
            <?php $d = new Apiclient();
       $cities =$d->Donnee(); 
                    ?>
           <p style="position: absolute; top: 20%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white; font-size: 20px; font-weight: bold;"><b><i>You're almost there, our menus are waiting for you! </i></b></p>
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6"><img  src="<?php    echo $cities['data'][1]['items'][1]['images'][1];?>" style=" width:100%;height:100%;background-image:white;">
                            <p style="position: absolute; top: 10%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white; font-size: 20px; font-weight: bold;"><b>Homemade burger</b></p>
                        </div>

                            <div class="col-lg-6">
                                <div class="p-5" style="background-color: gray;">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4" style="font-family: lucida;">KITCHEN OF KINGS</h1>
                                    </div>
                                    <form class="user" method="POST" action="#">
                                    <?php if(isset($message)) { ?> <span class="text-danger">Username or password incorrect</span> <?php } ?>

                                        <div class="form-group">
                                            <input for="username" class="form-control form-control-user"
                                                id="username" name="username" required="required" aria-describedby="emailHelp"
                                                placeholder="Your user name here">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" required="required" placeholder="Your Password here">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck" style="color: white;">Remember Me</label>
                                            </div>
                                        </div>
                                         <button type="submit" class="btn btn-primary btn-user btn-block"  id="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30" style="background-color: brown;">Connexion</button>

                                        <hr>
 
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot your password ?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="enregistrement.php">Create a new account ?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor2/jquery/jquery.min.js"></script>
    <script src="vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor2/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets2/js/sb-admin-2.min.js"></script>

</body>

</html>