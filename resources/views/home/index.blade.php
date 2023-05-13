@extends('layouts.app-master')

@section('content')
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body style="background-color: #161616;">
    <div>
        @auth
        <div class="container">
        <div class="p-4 my-4 rounded-3" style="width: 70%; background-color: aliceblue; ">
            <h3>Always keep on Update</h3>
            <p class="lead" style="font-size: large;">Access Games Instantly
                from AAA to indie and everything in-between. Enjoy exclusive deals, automatic game updates, and other great perks.<a href="" class="text-success" target="_blank"></a></p>
            <p>        
            <a href="{{ route('users.create') }}" class="btn btn-dark btn-lg">Sign-up</a></p> 
        </div>
        <div class="row g-1">       
            <div class="col-md-6 ">
                <div data-aos="fade-right">
                <h1 style="color: #dd4b39; font-weight: bold;">Triple A and Indie</h1>
                <p style="color: white; font-size: 22px;">Bringing you New titles from blockbuster AAA hits to indie darlings. Check out some of the must-have indie games and AAA available on Gamesight</p>              
                <p><a href="" target="" class="btn  btn-outline-success">Browse the Store &raquo;</a></p>
            </div>
            </div>
    </div>
        <div class="container-fluid" style="align-items: center; justify-content: center; display: flex; margin-top: 15%; padding-bottom: 40px;">
            <div class="col-md-6 col-lg-6 ">
                <div data-aos="zoom-in-down">
                <h1 style="color: white; font-weight: bold; text-align: center;">Special <span style="color:rgb(37, 235, 169)">Deals</span></h1>
                <p style="color: white; font-size: large; text-align: center;">For games of every size and type, check out our weekly sale. Any gamer's library can be filled with the quantity of video games we have for sale.</p>
                <p style="color: white; font-size: large; text-align: center;">Now is the ideal moment to check out the sale and get any games you've had your eye on for a long, or to take a chance on a game that is significantly discounted but that you ordinarily wouldn't buy.</p>
                <p><a href="" target="" class="btn  btn-outline-success" >Browse the Store &raquo;</a></p>
                </div>
            </div>
        </div>
        </div>
    </section>
    </div>
</div>

    <div class="container-fluid" style="background-color: #161616;">
        <section class="one" style="height: 100vh;">
        <div class="container-lg my-3">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                </ol>
                
                <div class="carousel-inner" style="padding-top: 10px;">
                    <div data-aos="fade-right">
                    <h3 style="color: white;">Upcoming Games</h3>
                    </div>
                    <div class="carousel-item active">
                        <img src="images/starfield.jpg" class="img-fluid rounded-3 "class="d-block w-100" alt="Slide 1" >
                        <div class="rounded-top">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Coming Soon</h5>
                            <p>STAY TUNE FOR NEW UPDATES</p>
                        </div>
                    </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/lilith.png" class="img-fluid rounded-3" class="d-block w-100" alt="Slide 2" >
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Coming Soon</h5>
                            <p>STAY TUNE FOR NEW UPDATES</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/warhammer40k.png" class="img-fluid rounded-3" class="d-block w-100" alt="Slide 3" >
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Coming Soon</h5>
                            <p>STAY TUNE FOR NEW UPDATES</p>
                        </div>
                    </div>
                </div>
        
                <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
                    
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
                    
                </a>
            </div>
    </div>

    <style>
        *{
            font-family:sans-serif ;
        }
    </style>
    
    
    <div class="container-fluid" style="background-color: #161616;">
        <section class="one" style="height: 100vh;">
            <div class="container">
                <div data-aos="fade-right">
                <h4 style="color: white;">Most Wanted Games</h4>
                </div>
                <div class="row" >
                    <div class="col-md-6 col-lg-4 col-12">
                        <div class="card-deck">
                            <div class="card mb-4">
                                <img class="card-img-top img-fluid" src="images/elden.jpg" alt="Card image cap">
                                <div class="card-body" style="background-color: aliceblue;">
                                <h4 class="card-title" >Elden Ring</h4>
                                <p class="card-text"></p>
                                <a href="#" class="btn btn-dark" style="font-size:smaller;">PURCHASE</a>
                                <button type="button" disabled="disabled" class="btn btn-outline-success btn-sm">P2,339</button>
                                <p class="card-text"><small class="text-muted" style="font-size: xx-small;">BASE GAME </small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-12">
                        <div class="card-deck">
                            <div class="card mb-4">
                                <img class="card-img-top img-fluid" src="images/stalker.jpg" alt="Card image cap">
                                <div class="card-body" style="background-color: aliceblue;">
                                <h4 class="card-title">S.T.A.L.K.E.R 2 </h4> 
                                <p class="card-text"></p>
                                <a href="#" class="btn btn-dark" style="font-size:smaller;">PRE-PURCHASE</a>
                                <button type="button" disabled="disabled" class="btn btn-outline-success btn-sm">P2,175</button>
                                <p class="card-text"><small class="text-muted" style="font-size: xx-small;">BASE GAME</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-12">
                        <div class="card-deck">
                            <div class="card mb-4">
                                <img class="card-img-top img-fluid" src="images/atomicheart.jpeg" alt="Card image cap">
                                <div class="card-body" style="background-color: aliceblue;">
                                <h4 class="card-title">Atomic Heart</h4>
                                <p class="card-text"></p>
                                <a href="#" class="btn btn-dark" style="font-size:smaller;">PURCHASE</a>
                                <button type="button" disabled="disabled" class="btn btn-outline-success btn-sm">P1,995</button>
                                <p class="card-text"><small class="text-muted" style="font-size: xx-small;">BASE GAME</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                
            
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card-deck">
                            <div class="card mb-4">
                                <img class="card-img-top img-fluid" src="images/hogwarts.jpg" alt="Card image cap">
                                <div class="card-body" style="background-color: aliceblue;">
                                <h4 class="card-title">Hogwarts Legacy</h4>
                                <p class="card-text"></p>
                                <a href="#" class="btn btn-dark" style="font-size:smaller;">PURCHASE</a>
                                <button type="button" disabled="disabled" class="btn btn-outline-success btn-sm">P2,500</button>
                                <p class="card-text"><small class="text-muted" style="font-size: xx-small;">BASE GAME</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card-deck">
                            <div class="card mb-4">
                                <img class="card-img-top img-fluid" src="images/wildhearts.jpg" alt="Card image cap">
                                <div class="card-body" style="background-color: aliceblue;">
                                <h4 class="card-title">Wild Hearts</h4>
                                <p class="card-text"></p>
                                <a href="#" class="btn btn-dark" style="font-size:smaller;">PURCHASE</a>
                                <button type="button" disabled="disabled" class="btn btn-outline-success btn-sm">P2,999</button>
                                <p class="card-text"><small class="text-muted" style="font-size: xx-small;">BASE GAME</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card-deck">
                            <div class="card mb-4">
                                <img class="card-img-top img-fluid" src="images/residentevil4.jpeg" alt="Card image cap">
                                <div class="card-body" style="background-color: aliceblue;">
                                <h4 class="card-title">Resident Evil 4</h4>
                                <p class="card-text"></p>
                                <a href="#" class="btn btn-dark" style="font-size:smaller;">PRE-PURCHASE</a>
                                <button type="button" disabled="disabled" class="btn btn-outline-success btn-sm">P2,979</button>
                                <p class="card-text"><small class="text-muted" style="font-size: xx-small;">BASE GAME</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <hr>
    <footer class="text-center text-lg-start text-white" style="background-color: #161616; font-size: small;" >
      <div class="container p-4 pb-0">
        <section class="">
          <div class="row">
            <div class="col-md-6 col-lg-3 col-xl-3 mx-auto mt-3">
                <div data-aos="fade-right">
              <h6 class="text-uppercase mb-2 font-weight-bold">GAMESIGHT</h6>
              <p style="text-align: justify;">
                Bringing you New titles from blockbuster AAA hits to indie darlings,
                Check out some of the must-have indie games and AAA available on Gamesight.
              </p>
                </div>
            </div>
            <hr class="w-100 clearfix d-md-none"/>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
             <div data-aos="fade-right">
              <h6 class="mb-2 font-weight-bold">CATEGORIES</h6>
              <p>
                <a >Upcoming Games</a><br>
                <a >Top Seller</a><br>
                <a >New Releases</a><br>
                <a >VR Games</a><br>
                <a >Top Wishlists</a><br>
              </p>
              </div>
            </div>
            <hr class="w-100 clearfix d-md-none" />
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <div data-aos="fade-left">
              <h6 class="text-uppercase mb-2 font-weight-bold">Contact</h6>
              <p><i class="fas fa-home mr-3"></i> Muntinlupa,Tunasan , PH</p>
              <p><i class="fas fa-envelope mr-3"></i> gamesight@gmail.com</p>
              <p><i class="fas fa-phone mr-3 "></i> + 987654321</p>
              <p ><i class="fas fa-phone mr-3"></i> + 987654321</p>
              </div>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <div data-aos="fade-left">
              <h6 class="text-uppercase mb-2 font-weight-bold" >Follow us</h6>
              <a
                 class="btn btn-primary btn-floating m-1"
                 style="background-color: #3b5998"
                 href="#!"
                 role="button"
                 ><i class="fab fa-facebook"></i></a>
              <a
                 class="btn btn-primary btn-floating m-1"
                 style="background-color: #55acee"
                 href="#!"
                 role="button"
                 ><i class="fab fa-twitter"></i
                ></a>
              <a
                 class="btn btn-primary btn-floating m-1"
                 style="background-color: #dd4b39"
                 href="#!"
                 role="button"
                 ><i class="fab fa-google"></i
                ></a>
             </a>
              <a
                 class="btn btn-primary btn-floating m-1"
                 style="background-color: #333333"
                 href="#!"
                 role="button"
                 ><i class="fab fa-github"></i
                ></a>
                </div>
            </div>
          </div>
        </section>
      </div>
      <div class="text-left p-3">
        © 2023 Copyright:
        <a >GAMESIGHT </a>
      </div>
      </div>
    </footer>
  </div>                
     </section>
    </div>

<script>
    AOS.init();
  </script>
</body>
@endauth
</div>
        <div>
        @guest

        <div class="container">
        <div class="p-4 my-4 rounded-3" style="width: 60%; background-color: aliceblue; ">
            <h3>GAMESIGHT</h3>
            <p class="lead" style="font-size: large;">Your viewing the home page. Please login to view the restricted data.<br>
            Crud application is unavailable on the homepage, Please make sure to register user information and login to view the restricted data.</p>
            <p>        
        </div>

        <div class="row g-1">       
            <div class="col-md-6 ">
                <div data-aos="fade-right">
                <h1 style="color: #dd4b39; font-weight: bold;">Triple A and Indie</h1>
                <p style="color: white; font-size: 22px;">Bringing you New titles from blockbuster AAA hits to indie darlings. Check out some of the must-have indie games and AAA available on Gamesight</p>              
                <p><a href="" target="" class="btn  btn-outline-success">Browse the Store &raquo;</a></p>
            </div>
            </div>
        </div>
        <div class="container-fluid" style="align-items: center; justify-content: center; display: flex; margin-top: 15%; padding-bottom: 40px;">
            <div class="col-md-6 col-lg-6 ">
                <div data-aos="zoom-in-down">
                <h1 style="color: white; font-weight: bold; text-align: center;">Special <span style="color:rgb(37, 235, 169)">Deals</span></h1>
                <p style="color: white; font-size: large; text-align: center;">For games of every size and type, check out our weekly sale. Any gamer's library can be filled with the quantity of video games we have for sale.</p>
                <p style="color: white; font-size: large; text-align: center;">Now is the ideal moment to check out the sale and get any games you've had your eye on for a long, or to take a chance on a game that is significantly discounted but that you ordinarily wouldn't buy.</p>
                <p><a href="" target="" class="btn  btn-outline-success" >Browse the Store &raquo;</a></p>
                </div>
            </div>
        </div>
        </div>
        </section>
        </div>


        <script>
    AOS.init();
  </script>
        @endguest
        </div>

@endsection