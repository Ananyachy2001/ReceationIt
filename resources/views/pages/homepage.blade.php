

@extends('navbar.inc')
@section('content')
<main>
    <div id="carouselExampleIndicators" class="carousel slide bg-primary" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block  cover-pic" src="{{url('images/2.jpg')}}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block  cover-pic" src="{{url('images/1.jpg')}}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block  cover-pic" src="{{url('images/Cover2.svg')}}" alt="Third slide">
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

    {{-- <div>
        <img class=" cover-pic" src="{{url('images/Cover2.svg')}}" alt="">
        
    </div> --}}

</main>

@endsection