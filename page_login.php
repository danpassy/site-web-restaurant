
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
    $message = "Nom d'utilisateur ou mot de passe incorrect.";
  }
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mon restaurant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="images/f7.png">
    <link rel="shortcut icon" href="images/f7.png">
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <h1 style="color:white;font-family:lucida;"> KITCHEN OF KINGS <img src="images/f7.png" style="width:50px;height:50px"></h1>
                    </a>
                </div>
                <div class="login-form">
                    <form method="POST" action="#">
                     <?php if(isset($message)) { ?> <span class="text-danger">nom d'utilisateur ou mot de passe incorrect</span> <?php } ?>
                        <div class="form-group">
                            <label for="username"> User Name </label>
                            <input type="text" class="form-control" placeholder="Your name" id="username" name="username" required="required">
                        </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" placeholder="Your Password" id="password" name="password" required="required">
                        </div>
                                <div class="checkbox">
                                    <label>
                                <input type="checkbox"> Forgot your password </input>
                            </label>
                                </div>
                                <button type="submit" style="margin-bottom-bottom:20px;"  id="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Connexion</button>
                                 <br />

                                  <button  style="margin-top:10px; " id="submit" name="submit" class="btn btn-primary btn-flat m-b-30 m-t-30"><a class="text-white" href="enregistrement.php">Inscription </a></button>                            
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>
