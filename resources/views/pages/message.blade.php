@extends('navbar.inc')
@section('content')

<main>

<div class="col-8">

    <form action="{{route('home')}}" class=" border pt-4 pb-4 mt-4  rounded text-center" method="post">
        <!-- Cross Site Request Forgery-->
        {{csrf_field()}}
        <h2 class="heading-form text-center">Get in touch</h2>
        <h1 class="text-center">Ready to Get Started</h1>
        <div class=" form-group d-flex">
            <input class=" form-input m-3  " type="text" name="name" value="{{old('name')}}" placeholder="Name" class="form-control">
            @error('name')
                <span class="text-danger">{{$name}}</span>
            @enderror
            <input class=" form-input m-3 " type="text" name="email" value="{{old('email')}}" placeholder="Email" class="form-control">
            @error('email')
                <span class="text-danger">{{$email}}</span>
            @enderror
        </div>
        <div class=" form-group d-flex">
            <input  class=" form-input m-3  " type="text" name="phone" value="{{old('phone')}}" placeholder="Phone" class="form-control">
            @error('phone')
                <span class="text-danger">{{$phone}}</span>
            @enderror

            <input  class=" form-input m-3 " type="text" name="subject" value="{{old('subject')}}" placeholder="Subject" class="form-control">
            @error('subject')
                <span class="text-danger">{{$subject}}</span>
            @enderror
        </div>

        <div class="">                   
            <textarea class=" form-input m-3 msg-box" placeholder="Type Message" name="message" value="{{old('message')}}"  class="form-control"></textarea>
            @error('message')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <input type="submit" class="btn btn-primary p-3" value="Send Message" >
        </form>          

    </div>
</main>



@endsection