@extends('navbar.inc')
@section('content')

<main>
    <div id="about" class="about-us">

        <div class="d-flex justify-content-around align-middle m-0 p-5"> 
            <img class="about-pic" src="{{url('images/1.jpg')}}" alt="">

            <div class="">
                <h1 class="mb-4 pt-3">About Us</h1>
                <h5 class="mb-5">Our team comes with the experience and knowledge</h5>
                <ul class="goal-border">
                    <button id="com-des" class="goal-btn active">Who We Are</button>
                    <button id="com-vis" class="goal-btn">Our Vision</button>
                    <button id="com-his" class="goal-btn">Our History</button>
                </ul>

                <p id="company-des" class="company-detail" >We are a creative startup company</p>
                <p id="company-vision" class="company-detail" >We are a creative startup company and
                     our vision is to be a brand in near future</p>
                <p id="company-history"  class="company-detail">We are a startup company with great ambition and dedication</p>


            </div>
     
        </div>

</main>



@endsection