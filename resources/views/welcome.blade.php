<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Gala Projekts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    
    <link href="https://fonts.googleapis.com/css?family=Acme|Dancing+Script|Lobster|Limelight|Quicksand:700&amp;subset=latin-ext" rel="stylesheet">

   
</head>
<body>
<?php include 'header.php';?>

    <!--bootstrap daļa-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="css/palm.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="css/palm2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="css/palm3.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
<!--bloga ieraksti-->
<div class="row justify-content-center">
<div class="card w-25 text-center col-sm-3">
        <div class="card-header">
          New Zaland
        </div>
        <div class="card-body">
          <h5 class="card-title">Piha Valley walk</h5>
          <p class="card-text">15.08.2018</p>
          <a href="blog.php" class="btn btn-primary btn1">Lasīt</a>
        </div>
      </div>
<div class="card w-25 text-center col-sm-3">
            <div class="card-header">
              Place
            </div>
            <div class="card-body">
              <h5 class="card-title">Event</h5>
              <p class="card-text">Date</p>
              <a href="#" class="btn btn-primary btn2">Lasīt</a>
            </div>
          </div>
<div class="card w-25 text-center col-sm-3">
                <div class="card-header">
                    Place
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Event</h5>
                    <p class="card-text">Date</p>
                  <a href="#" class="btn btn-primary btn3">Lasīt</a>
                </div>
              </div>
            </div>
<div class="row justify-content-center">
<div class="card w-25 text-center col-sm-3">
                    <div class="card-header">
                        Place
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Event</h5>
                        <p class="card-text">Date</p>
                      <a href="#" class="btn btn-primary btn2">Lasīt</a>
                    </div>
                  </div>
<div class="card w-25 text-center col-sm-3">
                        <div class="card-header">
                            Place
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">Event</h5>
                            <p class="card-text">Date</p>
                          <a href="#" class="btn btn-primary btn3">Lasīt</a>
                        </div>
                      </div>
<div class="card w-25 text-center col-sm-3">
                            <div class="card-header">
                                Place
                              </div>
                              <div class="card-body">
                                <h5 class="card-title">Event</h5>
                                <p class="card-text">Date</p>
                              <a href="#" class="btn btn-primary btn1">Lasīt</a>
                            </div>
                          </div>
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top">&#8679</button>



<?php include 'footer.php'; ?>
     <!--bootstrapam-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="proj.js"></script>
</body>
</html>