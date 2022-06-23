@extends('navbar.inc')
@section('content')
@if(Session::get('admin_id'))

<main>
    <div id="our-wrk" class="our-work">
        <h1 class="text-center fw-bold">Our Work</h1>

        <div class="row row-cols-1 row-cols-md-3 g-3 m-5">
          <div class="col p-5 ">
            <div class="card worked-box">
             
              <div class="card-body">
                <h5 class="card-title topic-title">Programming</h5>
              </div>
              <img  src="{{url('images/a1.jpg')}}" class="img-fluid card2-image " alt="...">
            </div>
          </div>
          <div class="col p-5 ">
            <div class="card worked-box">
             
              <div class="card-body">
                <h5 class="card-title topic-title">Digital Marketing</h5>
              </div>
              <img  src="{{url('images/a2.jpg')}}" class="img-fluid card2-image " alt="...">
            </div>
          </div>
          <div class="col p-5 ">
            <div class="card worked-box">
             
              <div class="card-body ">
                <h5 class="card-title topic-title">Graphics Design</h5>
              </div>
              <img  src="{{url('images/Capture1.jpg')}}" class="img-fluid card2-image " alt="...">
            </div>
          </div>

        </div>




    </div>
            
</main>

@endif



@endsection