<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        
        <link rel="stylesheet" href="{{url('css/main.css')}}">
        <script src="https://kit.fontawesome.com/a1aaebfda1.js" crossorigin="anonymous"></script>


        
    </head>
    <body class="">
        <header class="">
            <div class="d-flex justify-content-between align-items-center  container-fluid ">

                <div class="d-flex justify-content-center align-items-center ">
                    <img class="img-fluid w-25" src="{{url('images/Transparent1.jpg')}}" alt="">
                    <div>
                        <h1>The Recreation IT</h1>
                        <p class="head-p">CREATE. RECREATE. CREATIVE. EXCELLENT</p>
                    </div>
                    
                </div>


                <nav class=" navbar navbar-expand-xl  navbar-light ">
                      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ">
                          <li class="nav-item ">
                            <a class="nav-url active navhover" aria-current="page" href="{{route('homepage')}}">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-url navhover" href="{{route('aboutus')}}">About Us</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-url navhover" href="{{route('ourwork')}}"">Our Work</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-url navhover" href="{{route('workbased')}}">Work Based</a>
                          </li>

                          <li class="nav-item">
                            <a class="nav-url navhover" href="{{route('contact')}}">Contact</a>
                          </li>

                          <li class="nav-item">
                            <a class="nav-url navhover" href="{{route('admin.noticelist')}}">Notices</a>
                          </li>

                          @if(Session::get('username')) 

                          <li class="nav-item">
                            <a class="nav-url navhover" href="{{route('career.jobadd')}}">Post Jobs</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-url navhover" href="{{route('career.joblist')}}">Career</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-url navhover" href="{{route('career.applylist')}}">See Applies</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-url navhover" href="{{route('admin.noticeadd')}}">Add Notice</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-url navhover" href="{{route('logout')}}">Logout</a>
                          </li>
                          @else
                          <li class="nav-item">
                            <a class="nav-url navhover" href="{{route('login')}}">Login</a>
                          </li>
                          @endif
                        </ul>
                      </div>
                    
                </nav>


            </div>
        </header>


        <main class="">
            
                @yield('content')
            
        </main>


        <footer class="text-center  foot-border">
            <h5>&copy; 2022 Recreation IT.</h5>
            <h5>Designed and Developed by Recreation IT.</h5>
          </footer>
  
          <script src="{{url('js/main.js')}}"></script>
  
          
  
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      </body>
  </html>