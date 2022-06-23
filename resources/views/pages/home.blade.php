<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        
        <link rel="stylesheet" href="{{url('css/main.css')}}">
        <script src="https://kit.fontawesome.com/a1aaebfda1.js" crossorigin="anonymous"></script>


        
    </head>
    <body class="">
        <header class=" ">
            <div class="d-flex justify-content-between align-items-center  ">

                <div class="d-flex justify-content-center align-items-center ">
                    <img class="img-fluid w-25" src="{{url('images/Transparent1.jpg')}}" alt="">
                    <div>
                        <h1>The Recreation IT</h1>
                        <p class="head-p">CREATE. RECREATE. CREATIVE. EXCELLENT</p>
                    </div>
                    
                </div>


                <nav class="p-5 navbar navbar-expand-lg navbar-light ">
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ">
                          <li class="nav-item">
                            <a class="nav-url active" aria-current="page" href="#">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-url" href="#about">About Us</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-url" href="#our-wrk">Our Work</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-url" href="#wrk-based">Work Based</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-url" href="#cont">Contact</a>
                          </li>
                        </ul>
                      </div>
                    
                </nav>


            </div>
        </header>

        <main>
            <div>
                <img class=" cover-pic" src="{{url('images/Cover2.svg')}}" alt="">
                
            </div>
            <div id="about" class="about-us">

                <div class="d-flex justify-content-around align-middle m-3 p-5"> 
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

                <h1 class="text-center fw-bold">Work based</h1>
            </div>

            <div id="wrk-based" class="work-based">
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
                 

                  <div class="col-8">
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

        <footer class="text-center mt-3">
          <h5>&copy; 2022 Recreation IT.</h5>
          <h5>Designed and Developed by Recreation IT.</h5>
        </footer>

        <script src="{{url('js/main.js')}}"></script>

        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>