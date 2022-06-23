@extends('navbar.inc')
@section('content')

<main>

            <div id="wrk-based" class="work-based">

                <h1 class="text-center fw-bold workbase-heading">Work based</h1>

                <div class="row row-cols-1 row-cols-md-3 g-3 m-5">
                    <div class="col p-5 ">
                      <div class="card ">
                       
                        <div class="card-body">
                          <h5 class="card-title  text-center card-head">Programming</h5>
                        </div>
                        <img  src="{{url('images/2.jpg')}}" class="img-fluid card-image " alt="...">
                      </div>
                    </div>
                    <div class="col p-5 ">
                      <div class="card ">
                       
                        <div class="card-body">
                          <h5 class="card-title  text-center card-head">Digital Marketing</h5>
                        </div>
                        <img  src="{{url('images/DM.jpg')}}" class="img-fluid card-image " alt="...">
                      </div>
                    </div>
                    <div class="col p-5 ">
                      <div class="card ">
                       
                        <div class="card-body">
                          <h5 class="card-title  text-center card-head">Graphics Design</h5>
                        </div>
                        <img  src="{{url('images/GraphicsD.jpg')}}" class="img-fluid card-image " alt="...">
                      </div>
                    </div>
                    <div class="col p-5 ">
                      <div class="card ">
                       
                        <div class="card-body">
                          <h5 class="card-title  text-center card-head">Web Development</h5>
                        </div>
                        <img  src="{{url('images/WebDev.jpg')}}" class="img-fluid card-image " alt="...">
                      </div>
                    </div>

                  </div>

            </div>
            
</main>



@endsection