
{{-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body> --}}
    {{-- <div class="firstheader">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="fhdata">
          <div>
            <i class="fa-solid fa-user" style="font-size: larger;"></i>
          </div>
          <div>
            <h1 style="font-weight: 400px;">Grocery Mart</h1>
            <p style="text-align: center;font-size: smaller;"><span>ONLINE GROCERY SHOPPING</span></p>
          </div>
          <div style="display: flex;">
            
            <div style="padding-left: 4px; margin-right:50px">
              <i class="fa-solid fa-magnifying-glass" style="font-size: larger;"></i>
            </div>
            <div style="padding-right: 4px;">
              <i class="fa-solid fa-bag-shopping" style="color: red;font-size: x-large; " id="fa-solid"></i>
            </div>
            
          </div>
        </div>
        </div>
      </div>
      </div>
    </div>
    <div class="secondheader">
      <nav class="navbar navbar-expand-lg" style="height: 5rem;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#" style="color: white;">HOME</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                  PRODUCTS
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: white;">ABOUT US</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                  PAGES
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: white;">CONTACT US</a>
              </li>
            </ul>
            <i class="fa-regular fa-moon" class="bright" style="color: white;margin-right: 90px;font-size: x-large;"></i>
          </div>
        </div>
      </nav>
    </div> --}}
    @extends('layout.layout')

    @section('content')
    <div class="firstimage">
      <h2 style="padding-top: 6rem;">ABOUT US</h2>
    </div>


    
    <div class="boxx">
      <h6 > <a href="">Home</a>/ <span>About</span></h6>
    </div>
    
    
    <div class="para1">
      <div class="container">
        <div class="row">
            <div class="col-lg-6 left-cont mt-lg-0 mt-5 ps-lg-4">
              <h2 style="margin-top: 30px;">Best Offers & Best Deals In Our Mart!</h2>
              
              <p class="mt-3">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p class="mt-3 mb-2">Sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla ariatur in reprehenderit.</p>
                <button type="button" class="btn btn-outline-danger" style="width: 12rem; ">View Our product</button>
            </div>
          <div class="col-lg-6">
            <img class="img-fluid radius-image" src="../images/about.jpg" alt="girlshopping" style="width: 600px;">
          </div>
        </div>
      </div>
    </div>
    <section class="team w3l-team py-5">
      <div class="container py-lg-4 py-4">
        <h3 style="text-align: center;">Meet Our Team</h3>
        <div class="row text-center mt-4 pt-lg-2">
          <div class="col-lg-3 col-sm-6">
            <div class="team-block-single">
              <div class="team-grids">
                <a href="#team">
                  <img src="../images/team3.jpg" class="img-fluid" alt="">
                  </a><div class="team-info"><a href="#team">
                    </a><div class="social-icons-section"><a href="#team">
                      </a><a class="fac" href="#facebook">
                        <span class="fab fa-facebook-f"></span>
                      </a>
                      <a class="twitter mx-2" href="#twitter">
                        <span class="fab fa-twitter"></span>
                      </a>
                      <a class="google" href="#google-plus">
                        <span class="fab fa-google-plus-g"></span>
                      </a>
                    </div>
                  </div>
                
              </div>
              <div class="team-bottom-block p-4">
                <h5 class="member mb-1"><a href="#team">Olive Yew</a></h5>
                <small>Title Goes Here</small>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
            <div class="team-block-single">
              <div class="team-grids">
                <a href="#team">
                  <img src="../images/team2.jpg" class="img-fluid" alt="">
                  </a><div class="team-info"><a href="#team">
                    </a><div class="social-icons-section"><a href="#team">
                      </a><a class="fac" href="#facebook">
                        <span class="fab fa-facebook-f"></span>
                      </a>
                      <a class="twitter mx-2" href="#twitter">
                        <span class="fab fa-twitter"></span>
                      </a>
                      <a class="google" href="#google-plus">
                        <span class="fab fa-google-plus-g"></span>
                      </a>
                    </div>
                  </div>
                
              </div>
              <div class="team-bottom-block p-4">
                <h5 class="member mb-1 active"><a href="#team">Aida Joe</a></h5>
                <small>Title Goes Here</small>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
            <div class="team-block-single">
              <div class="team-grids">
                <a href="#team">
                  <img src="../images/team4.jpg" class="img-fluid" alt="">
                  </a><div class="team-info"><a href="#team">
                    </a><div class="social-icons-section"><a href="#team">
                      </a><a class="fac" href="#facebook">
                        <span class="fab fa-facebook-f"></span>
                      </a>
                      <a class="twitter mx-2" href="#twitter">
                        <span class="fab fa-twitter"></span>
                      </a>
                      <a class="google" href="#google-plus">
                        <span class="fab fa-google-plus-g"></span>
                      </a>
                    </div>
                  </div>
                
              </div>
              <div class="team-bottom-block p-4">
                <h5 class="member mb-1"><a href="#team">Teri Dac</a></h5>
                <small>Title Goes Here</small>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
            <div class="team-block-single">
              <div class="team-grids">
                <a href="#team">
                  <img src="../images/team1.jpg" class="img-fluid" alt="">
                  </a><div class="team-info"><a href="#team">
                    </a><div class="social-icons-section"><a href="#team">
                      </a><a class="fac" href="#facebook">
                        <span class="fab fa-facebook-f"></span>
                      </a>
                      <a class="twitter mx-2" href="#twitter">
                        <span class="fab fa-twitter"></span>
                      </a>
                      <a class="google" href="#google-plus">
                        <span class="fab fa-google-plus-g"></span>
                      </a>
                    </div>
                  </div>
                
              </div>
              <div class="team-bottom-block p-4">
                <h5 class="member mb-1"><a href="#team">Anton Bne</a></h5>
                <small>Title Goes Here</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="team-bottom py-5">
      <div class="container py-lg-5 py-4">
        <h3>Are You Ready For Deals? Flat <span>30% Offer </span>on Mobiles</h3>
        <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
          voluptatibus maiores alias consequatur aut <br> perferendis doloribus asperiores
          repellat.</p>
        <a href="products2.html">Shop Now <i class="las la-arrow-right" style="font-size:25px; "></i></a>
      </div>
    </div>
    <div class="container-fluid  p-5 newsletter">
        <div class="row p-2 text-white">
          <div class="col-lg-7 coltwo">
            <div class="">
              <h2>Newsletter</h2>
            </div>
            <div class="">Excepteur sint occaecat cupidatat non proident, sunt.</div>
          </div>
          <div class="col-lg-5 pt-2">
            <div class="input-group mb-3 rounded-3">
              <input type="email" class="form-control " placeholder="Enter email" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <span class="input-group-text bg-danger text-white spantwo border-0" id="basic-addon2">
                <i class="bi bi-send ps-1 mx-auto"></i>
              </span>
            </div>
          </div>
        </div>
       </div>

    
    
    {{-- <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="r">
              <h4 class="f">CONTACT</h4>
              <p class="o mt-4"><a href=""><i class="fa-solid fa-location-dot icon"></i>London, 235 Terry, 10001</a></p>
              <p class="o mt-4"><a href=""><i class="fa-solid fa-envelope-open-text icon"></i>info@example.com</a></p>
              <p class="o mt-4"><a href=""><i class="fa-solid fa-phone icon"></i>++44-000-888-999</a></p>
            </div>
          </div>
        
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-4">
                <h3 class="f" style="font-size: 25px;">INFORMATION</h3>
                <div class="o">
                  <p class="mt-4"><a href=""> <i class="las la-angle-right"></i> About Us</a></p>
                  <p><a href=""><i class="las la-angle-right"></i>  Contact Us</a></p>
                  <p><a href=""> <i class="las la-angle-right"></i> Shortcodes</a></p>
                  <p><a href=""> <i class="las la-angle-right"></i> FAQ's</a></p>
                  <p><a href=""> <i class="las la-angle-right"></i> Special Products</a></p>
                </div>
              </div>
        
              <div class="col-lg-4">
                <h3 class="f" style="font-size: 25px;">CATEGORY</h3>
                <div class="o">
                  <p class="mt-4"><a href=""><i class="las la-angle-right"></i> Fruits & Vegetables</a></p>
                  <p><a href=""><i class="las la-angle-right"></i> Meats & Seafood</a></p>
                  <p><a href=""><i class="las la-angle-right"></i> Bakery & Pastry</a></p>
                  <p><a href=""><i class="las la-angle-right"></i> Beverages</a></p>
                  <p><a href=""><i class="las la-angle-right"></i> Breakfast & Dairy</a></p>
                </div>
              </div>
        
              <div class="col-lg-4">
                <h3 class="f" style="font-size: 25px;">PROFILE</h3><br>
                <div class="o">
                  <p><a href=""><i class="las la-angle-right"></i> Home</a></p>
                  <p><a href=""><i class="las la-angle-right"></i> Today's Deals</a></p><br>
                  <h5 class="ff">Follow Us</h5>
                </div>
                <div class="gg" style="margin-bottom: 30px; margin-top: 20px;">
                  <i class="fa-brands fa-facebook"></i>
                  <i class="fa-brands fa-twitter"></i>
                  <i class="fa-brands fa-google-plus-g"></i>
                  <i class="fa-brands fa-pinterest-p"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <br><br>
      <hr style="color:rgb(199, 197, 197); margin-bottom: 30px;">
      <div class="z">
        <p style="text-align: center;">© 2021 Grocery Mart. All rights reserved. Design by <a href=""
            style="text-decoration: none; color:rgb(1, 1, 133);">W3Layouts</a></p>
      </div>
  </footer> --}}
    
    
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html> --}}
@endsection
