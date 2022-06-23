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


                <nav class=" navbar navbar-expand-lg navbar-light ">
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ">
                          <li class="nav-item">
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

                          @if(Session::get('username')) 
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


        <main>
            
                @yield('content')
            
        </main>


        <footer class="text-center mt-3">
            <h5>&copy; 2022 Recreation IT.</h5>
            <h5>Designed and Developed by Recreation IT.</h5>
          </footer>
  
          <script src="{{url('js/main.js')}}"></script>
  
          
  
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      </body>
  </html>