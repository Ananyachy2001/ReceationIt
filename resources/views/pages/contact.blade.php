@extends('navbar.inc')
@section('content')

<main>
    <div id="cont" class="contact">
        <div class="row row-cols-1 g-4">
           <div class="col-4">
             <div class="card card-border">
               <div class="card-body d-flex align-middle">
                 <div class="p-2">
                   <i class="fa-solid fa-phone phone-icon rounded-circle "></i>
                 </div>
                 
                 <div class="card-text ps-4"> 
                   <h5 class="heading-contact">Phone</h5>
                   <p class="contact-detail">01313919269</p>
                   <p class="contact-detail">therecreationit@gmail.com</p>
                 
                 </div>
               </div>
             </div>
             <div class="card card-border">
               <div class="card-body d-flex align-middle ">
                 <div class="p-2">
                   <i class="fa-solid fa-map phone-icon rounded-circle"></i>
                 </div>
                 
                 <div class="card-text ps-4"> 
                   <h5 class="heading-contact">Address</h5>
                   <p class="contact-detail">D block, Aftabnagar Dhaka-1212</p>
                   <p class="contact-detail">Bangladesh</p>
                 
                 </div>
               </div>
             </div>
             <div class="card card-border">
               <div class="card-body d-flex align-middle ">
                 <div class="p-2">
                   <i class="fa-solid fa-clipboard-list phone-icon rounded-circle"></i>
                 </div>
                 
                 <div class="card-text ps-4"> 
                   <h5 class="heading-contact">Schedule</h5>
                   <p class="contact-detail">24 Hours / 7 Days Open</p>
                   <p class="contact-detail">Office time: 10 AM - 5:30 PM</p>
                 
                 </div>
               </div>
             </div>
           </div>
          

           <div class="col-8 p-0 m-0">
                   <form action="{{route('home')}}" class=" border pt-4 pb-4 mt-4  rounded text-center" method="post">
                       <!-- Cross Site Request Forgery-->
                       {{csrf_field()}}
                       <h2 class="heading-form text-center">Get in touch</h2>
                       <h1 class="text-center">Ready to Get Started</h1>
                       <div class=" form-group d-flex">
                           <input class=" form-input m-3  " type="text" name="name" value="{{old('name')}}" placeholder="Name" class="form-control">
                           @error('name')
                               <span class="text-danger">{{$message}}</span>
                           @enderror
                           <input class=" form-input m-3 " type="text" name="email" value="{{old('email')}}" placeholder="Email" class="form-control">
                           @error('email')
                               <span class="text-danger">{{$message}}</span>
                           @enderror
                       </div>
                       <div class=" form-group d-flex">
                           <input  class=" form-input m-3  " type="text" name="phone" value="{{old('phone')}}" placeholder="Phone" class="form-control">
                           @error('phone')
                               <span class="text-danger">{{$message}}</span>
                           @enderror

                           <input  class=" form-input m-3 " type="text" name="subject" value="{{old('subject')}}" placeholder="Subject" class="form-control">
                           @error('subject')
                               <span class="text-danger">{{$message}}</span>
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
          </div>
       </div>

       

     </div>
            
</main>



@endsection