             <?php 
   session_start();

         if(!isset($_SESSION['Client'])){
              header('Location: login.php');

         }
?>


              <?php
require 'Apiclient.php'; ?>

<!DOCTYPE html>
<html>

<head>
  
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">
  
  <title> Welcome</title>
 
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
   
</head>
<script>
        function replaceImageOnError(imageElement) {
    // Remplacez la source de l'image par une autre source
    imageElement.error = null;
    imageElement.src = "image_error.jpg";
  }

    </script>

<body>

     <?php $d = new Apiclient();
       $cities =$d->Donnee(); 
                    ?>
  
  <div class="hero_area">
    <div class="bg-box" style="width: 100%;height: 100%;opacity: 100%;">
      <img style=" width: 100%;height: 100%;object-fit: cover; object-position: center;  border: 2px solid #ccc;position: absolute;top: 0; left: 0; transition: opacity 0.5s ease-in-out;" src="images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
   <?php
require 'header.php'; ?>
    <!-- end header section -->
    <!-- slider section -->
<!-- The Modal -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
             <img style=" width: 100%;height: 100%;object-fit: cover; object-position: center;  border: 2px solid #ccc;position: absolute;top: 0; left: 0; transition: opacity 0.5s ease-in-out;" src="<?php    echo $cities['data'][0]['items'][0]['images'][2];?>" alt="">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                     <?php    echo $cities['data'][0]['items'][0]['name_fr'];?>
                    </h1>
                    <p>
                     <?php    echo $cities['data'][0]['items'][0]['ingredients'][0]['name_fr'];?>  <?php    echo $cities['data'][0]['items'][0]['ingredients'][1]['name_fr'];?>
                      <?php    echo $cities['data'][0]['items'][0]['ingredients'][2]['name_fr'];?>  <?php    echo $cities['data'][0]['items'][0]['ingredients'][3]['name_fr'];?>
                    </p>
                    <div class="btn-box">
                      <a href="#section" class="btn1">
                        Détails
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
             <img style=" width: 100%;height: 100%;object-fit: cover; object-position: center;  border: 2px solid #ccc;position: absolute;top: 0; left: 0; transition: opacity 0.5s ease-in-out;" src="<?php    echo $cities['data'][0]['items'][0]['images'][2];?>" alt="">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                       <?php    echo $cities['data'][0]['items'][1]['name_fr'];?>
                    </h1>
                    <p>
                                           <?php    echo $cities['data'][0]['items'][1]['ingredients'][0]['name_fr'];?>  <?php    echo $cities['data'][0]['items'][1]['ingredients'][1]['name_fr'];?>
                      <?php    echo $cities['data'][0]['items'][1]['ingredients'][2]['name_fr'];?>  <?php    echo $cities['data'][0]['items'][1]['ingredients'][3]['name_fr'];?>
                    </p>
                    <div class="btn-box">
                      <a href="#section" class="btn1">
                          Détails
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
             <img style=" width: 100%;height: 100%;object-fit: cover; object-position: center;  border: 2px solid #ccc;position: absolute;top: 0; left: 0; transition: opacity 0.5s ease-in-out;" src="<?php    echo $cities['data'][0]['items'][1]['images'][2];?>" alt="" >
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                     <?php    echo $cities['data'][0]['items'][2]['name_fr'];?>
                    </h1>
                    <p>
                                           <?php    echo $cities['data'][0]['items'][2]['ingredients'][0]['name_fr'];?>  <?php    echo $cities['data'][0]['items'][2]['ingredients'][1]['name_fr'];?>
                      <?php    echo $cities['data'][0]['items'][2]['ingredients'][2]['name_fr'];?>  <?php    echo $cities['data'][0]['items'][0]['ingredients'][3]['name_fr'];?>
                    </p>
                    <div class="btn-box">
                      <a href="#section" class="btn1">
                          Détails
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
          </ol>
        </div>
      </div> </section>
                 
    <!-- end slider section -->
  </div>

  <!-- offer section -->


  <!-- end offer section -->

  <!-- food section -->

  <section class="food_section layout_padding-bottom" id="section"style="background-color: gray;">
    <div class="container">
      <div class="heading_container heading_center" style="background-color: red;">
        <h2 style="background-color: indigo; color:white">
          <i> <b> Welcome to the KITCHEN OF KINGS </b> </i>
        </h2>
      </div>

      <ul class="filters_menu" style="display: flex;">
       <div class="menu66"style="flex: 1; text-align: center;background-color: blue;"> <li class="active" data-filter="*">All</li> </div>
      <div class = "menu66"style="flex: 1; text-align: center;background-color: cyan;">  <li data-filter=".burger"style="font-weight: bold; color: red;">ENTRANCE</li> </div>
        <div class = "menu66"style="flex: 1; text-align: center;background-color: yellow;"> <li data-filter=".pizza"style="font-weight: bold; color: red;">FLAT</li> </div>
        <div class = "menu66"style="flex: 1; text-align: center;background-color: green;"> <li data-filter=".pasta"style="font-weight: bold; color: red;">DESSERT</li>  </div>
      </ul>
  <div class="row grid" style="background-color: gray;">
    <?php
    $d = new Apiclient();
    $cities = $d->Donnee();
    foreach ($cities['data'] as $city) {

        ?>

           <?php if($city['name_fr']=="Entrées"){?>
            <?php       for ($i = 0; $i < count($city['items']); $i++) {?>
                        <div class="col-sm-6 col-lg-4 all burger">        
                         <div class="box">
                          <div>
                            <div class="img-box" style="background-color: cyan;">
                              <img src="<?php
      if (isset($city['items'][$i]['images'][1])) {
          echo $city['items'][$i]['images'][1];
      } else {
          echo null;
      }
?>" onerror="replaceImageOnError(this)">
                            </div>
                            <div class="detail-box">
                              <h5><?php echo $city['items'][$i]['name_fr']; ?></h5>
                              <div class="options"style="background-color: cyan;">
                              <h4><?php echo $city['items'][$i]['prices'][0]['price']; ?>£</h4>
                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-<?php echo $i; ?>">
                                  <i style="color:white;color: black;" class="fa fa-eye fa-x">  <--- Details</i>
                                </button>                               
                              </div>
                            </div>
                          </div>
                          <button style="position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);">Add to Cart</button>
                          </div>
                         <div class="modal fade" id="modal-<?php echo $i; ?>">
                          <div class="modal-dialog" >
                            <div class="modal-content"style="background-color: cyan;">
                              <div class="modal-header">
                               <div class="col-lg-4"> <h4 class="modal-title"><?php echo $city['items'][$i]['name_fr']; ?></h4></div>
                                <div class="col-lg-8 text-right"> <img  src="<?php
if (isset($city['items'][$i]['images'][1])) {
    echo $city['items'][$i]['images'][1];
} else {
    echo null;
}
?>" style="width:80px;height:80px;" onerror="replaceImageOnError(this)"></div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                            
                                <p><b>Ingrédients:</b> <ul>  <?php for($j = 0; $j < count($cities['data'][0]['items'][$i]['ingredients']);$j++){?><li><?php    echo $cities['data'][0]['items'][$i]['ingredients'][$j]['name_fr'];?></li> <?php } ?></ul> </p>
                              </div>
                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
                             
                              </div>
                            </div>
                          </div>
                        </div>
                          </div>
           <?php } }  ?>
                      <?php if($city['name_fr']=="Plats"){?>
                         <?php       for ($b = 0; $b < count($city['items']); $b++) {?>
                       <div class="col-sm-6 col-lg-4 all pizza">        
                        <div class="box">
                          <div>
                            <div class="img-box" style="background-color: yellow;">
                              <img src="<?php
if (isset($city['items'][$b]['images'][1])) {
    echo $city['items'][$b]['images'][1];
} else {
    echo null;
}
?>" onerror="replaceImageOnError(this)">
                            </div>
                            <div class="detail-box">
                              <h5><?php echo $city['items'][$b]['name_fr']; ?></h5>
                              <div class="options" style="background-color: yellow;">
                              <h4><?php echo $city['items'][$b]['prices'][0]['price']; ?>£</h4>
                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-l<?php echo $b; ?>">
                                  <i style="color:white;" class="fa fa-eye fa-x"> <---Details</i>
                                </button>
                                <button style="position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);">Add to Cart</button>
                              </div>
                            </div>
                          </div>
                          </div>
                        <div class="modal fade" id="modal-l<?php echo $b; ?>">
                          <div class="modal-dialog">
                            <div class="modal-content"style="background-color: yellow;">
                              <div class="modal-header">
                               <div class="col-lg-4"> <h4 class="modal-title"><?php echo $city['items'][$b]['name_fr']; ?></h4></div>
                                <div class="col-lg-8 text-right"> <img name="monImage"  src="<?php
if (isset($city['items'][$b]['images'][1])) {
    echo $city['items'][$b]['images'][1];
} else {
    echo null;
}
?>" style="width:80px;height:80px;"  onerror="replaceImageOnError(this)"></div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                            
                                <p><b>Ingrédients:</b> <ul>  <?php for($p = 0; $p < count($cities['data'][1]['items'][$b]['ingredients']);$p++){?><li><?php    echo $cities['data'][1]['items'][$b]['ingredients'][$p]['name_fr'];?></li> <?php } ?></ul> </p>
                              </div>
                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
                            
                              </div>
                            </div>
                          </div>
                        </div>
                          </div>
           <?php }}  ?>
                                 <?php if($city['name_fr']=="Desserts"){?>
                                  <?php       for ($d = 0; $d < count($city['items']); $d++) {?>
                       <div class="col-sm-6 col-lg-4 all pasta">        
                        <div class="box">
                          <div>
                            <div class="img-box"style="background-color: green;">
                              <img src="<?php echo $city['items'][$d]['images'][0]; ?>" onerror="replaceImageOnError(this)">
                            </div>
                            <div class="detail-box">
                              <h5><?php echo $city['items'][$d]['name_fr']; ?></h5>
                              <div class="options"style="background-color: green;">
                              <h4><?php echo $city['items'][$d]['prices'][0]['price']; ?>£</h4>
                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-p<?php echo $d; ?>">
                                  <i style="color:white;" class="fa fa-eye fa-x"> <---Details</i>
                                </button>
                                <button style="position: absolute; bottom: 0; left: 50%; transform: translateX(-50%);">Add to Cart</button>
                              </div>
                            </div>
                          </div>
                          </div>
                        <div class="modal fade" id="modal-p<?php echo $d; ?>">
                          <div class="modal-dialog">
                            <div class="modal-content"style="background-color: green;">
                              <div class="modal-header">
                               <div class="col-lg-4"> <h4 class="modal-title"><?php echo $city['items'][$d]['name_fr']; ?></h4></div>
                                <div class="col-lg-8 text-right"> <img name="monImage"  src="<?php echo $city['items'][$d]['images'][0]; ?>" style="width:80px;height:80px;" onerror="replaceImageOnError(this)"></div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                            
                                <p><b>Ingrédients:</b> <ul>  <?php for($dd = 0; $dd < count($cities['data'][2]['items'][$d]['ingredients']);$dd++){?><li><?php    echo $cities['data'][2]['items'][$d]['ingredients'][$dd]['name_fr'];?></li> <?php } ?></ul> </p>
                              </div>
                              <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
                              
                              </div>
                            </div>
                          </div>
                        </div>
                          </div>
           <?php } } ?>

    <?php
      
    }
    ?>
  </div>
    </div>
  </section>

  <!-- end food section -->
  <?php
require 'footer.php'; ?>
  <!-- footer section -->
  
  <!-- about section -->

  <!-- end about section -->

  <!-- book section -->

  <!-- end book section -->

  <!-- client section -->


  <!-- end client section -->

  <!-- footer section -->



</body>

 <!-- jQery -->
 <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>



</html>