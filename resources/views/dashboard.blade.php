@extends('base')

@extends('navbar')

@section('title', 'Dashboard')

@section('content')
<header>
  <style>
    .carousel-item:nth-child(1) {
      background-image: url('images/AXIE.jpeg ');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }

    @media (min-width: 600px) {
      #introCarousel {
        margin-top: -13.05px;
      }
      #introCarousel,
      .carousel-inner,
      .carousel-item,
      .carousel-item.active {
        height: 100vh;
      }
    }
    
  </style>
  <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 1000;">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-4 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="https://mdbootstrap.com/docs/standard/" target="_blank"></a>
          </li>
        </ul>

        <ul class="navbar-nav d-flex flex-row">
          </li>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="introCarousel" class="carousel slide carousel-fade shadow-1-strong" data-mdb-ride="carousel">
    <ol class="carousel-indicators">
      <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
      <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
      <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
    </ol>


    <div class="carousel-inner">
      <div class="carousel-item active">
      </div>
</header>
<main class="mt-5">
  <div class="container">
    <section>
      <div class="row">
        <div class="col-md-3 gx-2 mb-2">
          <div class="bg-image " data-mdb-ripple-color="light">
            <img src="images/COVER.jpg" style="width:250px " />
            <a href="#!">
            </a>
          </div>
        </div>

        <div class="col-md-6 gx-5 mb-4">
          <h6><strong>AXIE: BATTLE</strong></h6>
          <p class="text-muted">
          Build unstoppable teams of Axies and conquer your enemies!
Each Axie has unique strengths and weaknesses based on its genes. With billions of possible genetic combinations, the possibilities are truly infinite!
          </p>
          <h6><strong>Play & Earn</strong></h6>
          <p class="text-muted">
          Axie is a new type of game, partially owned and operated by its players.

Earn AXS tokens by playing and use them to decide the future of the game!
          </p>
        </div>
      </div>
    </section>
    <hr class="my-5" />
    <style>
    
    </style>
   
@endsection