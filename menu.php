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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Mon restaurant </title>

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

<body class="sub_page">
  <div class="hero_area">

    <div class="bg-box">
      <img src="images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
              <?php
require 'header.php'; ?>
    <!-- end header section -->
  </div>

  <!-- food section -->
  <section class="food_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Bienvenu sur notre restaurant
        </h2>
      </div>

      <ul class="filters_menu">
        <li class="active" data-filter="*">All</li>
        <li data-filter=".burger">Entree</li>
        <li data-filter=".pizza">Plats</li>
        <li data-filter=".pasta">Déserts</li>
      </ul>

     <div class="filters-content">
  <div class="row grid">
    <?php
    $d = new Apiclient();
    $cities = $d->Donnee();
    foreach ($cities['data'] as $city) {
      for ($i = 0; $i < count($city['items']); $i++) {
        ?>
        <div class="col-sm-6 col-lg-4 all pizza">
          <div class="box">
            <div>
              <div class="img-box">
                <img src="<?php echo $city['items'][$i]['images'][1]; ?>" alt="<?php echo $city['items'][$i]['images'][1]; ?>">
              </div>
              <div class="detail-box">
                <h5><?php echo $city['items'][$i]['name_fr']; ?></h5>
                <div class="options">
                  <h6>$20</h6>
                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-<?php echo $i; ?>">
                    <i style="color:white;" class="fa fa-eye fa-x"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
               <div class="modal fade" id="modal-<?php echo $i; ?>">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                         <div class="col-lg-4"> <h4 class="modal-title"><?php echo $city['items'][$i]['name_fr']; ?></h4></div>
                          <div class="col-lg-8 text-right"> <img src="<?php echo $city['items'][$i]['images'][1]; ?>" style="width:80px;height:80px;" alt="<?php echo $city['items'][$i]['images'][1]; ?>"></div>
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
    <?php
      }
    }
    ?>
  </div>
</div>


    </div>
  </section>

  <!-- end food section -->

  <!-- footer section -->
            <?php
require 'footer.php'; ?>
  <!-- footer section -->

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
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>