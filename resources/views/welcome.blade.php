@extends('layout')


@section('slider')
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="slaids1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="slaids2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="slaids3.jpg" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="slaids4.jpg" alt="Third slide">
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
@endsection

@section('content')
  
<!--bloga ieraksti-->
<div class="row justify-content-center">
<div class="card w-25 text-center col-sm-3">
        <div class="card-header">
          New Zealand
        </div>
        <div class="card-body">
          <h5 class="card-title">Piha Valley walk</h5>
          <p class="card-text">15.08.2018</p>
          <a href="/laravel/blog/public/blog" class="btn btn-primary btn1">Read more</a>
        </div>
      </div>
<div class="card w-25 text-center col-sm-3">
            <div class="card-header">
              Australia
            </div>
            <div class="card-body">
              <h5 class="card-title">Gold Coast</h5>
              <p class="card-text">20.05.2018</p>
              <a href="#" class="btn btn-primary btn2">Read more</a>
            </div>
          </div>
<div class="card w-25 text-center col-sm-3">
                <div class="card-header">
                    New Zealand
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Life Wellington</h5>
                    <p class="card-text">20.11.2017</p>
                  <a href="#" class="btn btn-primary btn3">Read more</a>
                </div>
              </div>
            </div>
<div class="row justify-content-center">
<div class="card w-25 text-center col-sm-3">
                    <div class="card-header">
                        New Zealand
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Napier street art</h5>
                        <p class="card-text">05.11.2017</p>
                      <a href="#" class="btn btn-primary btn2">Read more</a>
                    </div>
                  </div>
<div class="card w-25 text-center col-sm-3">
                        <div class="card-header">
                            Montenegro
                          </div>
                          <div class="card-body">
                            <h5 class="card-title">Hiking in Kotor</h5>
                            <p class="card-text">15.06.2017</p>
                          <a href="#" class="btn btn-primary btn3">Read more</a>
                        </div>
                      </div>
<div class="card w-25 text-center col-sm-3">
                            <div class="card-header">
                                Turkey
                              </div>
                              <div class="card-body">
                                <h5 class="card-title">Pamukkale day trip</h5>
                                <p class="card-text">03.06.2017</p>
                              <a href="#" class="btn btn-primary btn1">Read more</a>
                            </div>
                          </div>
</div>
@endsection
