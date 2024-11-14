
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
            <div style="padding-right: 4px;">
              <i class="fa-solid fa-bag-shopping" style="color: red;font-size: x-large;"></i>
            </div>
            <div style="padding-left: 4px;">
              <i class="fa-solid fa-magnifying-glass" style="font-size: larger;"></i>
            </div>
            
          </div>
        </div>
        </div>
      </div>
      </div>
    </div>
    <div class="secondheader">
      <nav class="navbar navbar-expand-lg">
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
      <h2 style="padding-top: 40px;">BLOG POSTS</h2>
    </div>
    <div class="boxx">
      <h6>Home / <span>Blog Posts</span></h6>
    </div>
    <div class="para">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <img class="img-fluid radius-image" src="../images/IMG-20241023-WA0014.jpg" alt="shopping" style="width: 600px;">
          </div>
            <div class="col-lg-6 left-cont mt-lg-0 mt-5 ps-lg-4">
              <h2 style="margin-top: 30px;">At vero eos et accusamus</h2>
              <div class="d-flex align-items-center mt-3">
                <h6><i class="fas fa-user"></i> Mauree</h6>
                <h6 class="mx-3"><i class="fas fa-clock"></i> 7:00 pm - 8:00 pm</h6>
                <h6><i class="fas fa-calendar-alt"></i>Oct 10</h6>
              </div>
              <p class="mt-3">Sed luctus orci sit amet tempor luctus. Nullam non felis massa. Phasellus vitae
                fringilla
                sapien.</p>
              <p class="mt-3 mb-2">Sed luctus orci sit amet tempor luctus. Nullam non felis massa. Phasellus
                vitae fringilla
                sapien,
                quis dictum mi. Quisque consectetur egestas.Lorem ipsum dolor sit amet, consectetur
                adipiscing
                elit.</p>
                <button type="button" class="btn btn-outline-danger" style="width: 140px;">Read More</button>
            </div>
         
        </div>
      </div>
    </div>
    <hr>
    <div class="para1">
      <div class="container">
        <div class="row">
            <div class="col-lg-6 left-cont mt-lg-0 mt-5 ps-lg-4">
              <h2 style="margin-top: 30px;">Et iusto odio dignissimos</h2>
              <div class="d-flex align-items-center mt-3">
                <h6><i class="fas fa-user"></i>  Alliees</h6>
                <h6 class="mx-3"><i class="fas fa-clock"></i> 7:00 pm - 8:00 pm</h6>
                <h6><i class="fas fa-calendar-alt"></i>Oct 12</h6>
              </div>
              <p class="mt-3">Sed luctus orci sit amet tempor luctus. Nullam non felis massa. Phasellus vitae
                fringilla
                sapien.</p>
              <p class="mt-3 mb-2">Sed luctus orci sit amet tempor luctus. Nullam non felis massa. Phasellus
                vitae fringilla
                sapien,
                quis dictum mi. Quisque consectetur egestas.Lorem ipsum dolor sit amet, consectetur
                adipiscing
                elit.</p>
                <button type="button" class="btn btn-outline-danger" style="width: 140px;">Read More</button>
            </div>
          <div class="col-lg-6">
            <img class="img-fluid radius-image" src="../images/IMG-20241023-WA0012.jpg" alt="girlshopping" style="width: 600px;">
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="para2">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <img  class="img-fluid radius-image" src="../images/IMG-20241023-WA0015.jpg" alt="blurgirl" style="width: 550px;">
          </div>
            <div class="col-lg-6 left-cont mt-lg-0 mt-5 ps-lg-4">
              <h2 style="margin-top: 30px;">Deleniti atque corrupti</h2>
              <div class="d-flex align-items-center mt-3">
                <h6><i class="fas fa-user"></i>JOHNSON</h6>
                <h6 class="mx-3"><i class="fas fa-clock"></i> 7:00 pm - 8:00 pm</h6>
                <h6><i class="fas fa-calendar-alt"></i>Oct 14</h6>
              </div>
              <p class="mt-3">Sed luctus orci sit amet tempor luctus. Nullam non felis massa. Phasellus vitae
                fringilla
                sapien.</p>
              <p class="mt-3 mb-2">Sed luctus orci sit amet tempor luctus. Nullam non felis massa. Phasellus
                vitae fringilla
                sapien,
                quis dictum mi. Quisque consectetur egestas.Lorem ipsum dolor sit amet, consectetur
                adipiscing
                elit.</p>
                <button type="button" class="btn btn-outline-danger" style="width: 140px;">Read More</button>
            </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="para3">
      <div class="container">
        <div class="row">
            <div class="col-lg-6 left-cont mt-lg-0 mt-5 ps-lg-4">
              <h2 style="margin-top: 30px;">Id est laborum et dolorum</h2>
              <div class="d-flex align-items-center mt-3">
                <h6><i class="fas fa-user"></i>FURNIEW</h6>
                <h6 class="mx-3"><i class="fas fa-clock"></i> 7:00 pm - 8:00 pm</h6>
                <h6><i class="fas fa-calendar-alt"></i>Oct 16</h6>
              </div>
              <p class="mt-3">Sed luctus orci sit amet tempor luctus. Nullam non felis massa. Phasellus vitae
                fringilla
                sapien.</p>
              <p class="mt-3 mb-2">Sed luctus orci sit amet tempor luctus. Nullam non felis massa. Phasellus
                vitae fringilla
                sapien,
                quis dictum mi. Quisque consectetur egestas.Lorem ipsum dolor sit amet, consectetur
                adipiscing
                elit.</p>
                <button type="button" class="btn btn-outline-danger" style="width: 140px;">Read More</button>
            </div>
            <div class="col-lg-6">
              <img  class="img-fluid radius-image" src="../images/IMG-20241023-WA0017.jpg" alt="longcoat" style="width: 550px;">
            </div>
        </div>
      </div>
    </div>
    <div class="changerspot">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 ">
            <nav aria-label="Page navigation example">
              <ul class="pagination d-flex justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="newsletter">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <h3 style="color: aliceblue;">Newsletter</h3>
              <p style="color: aliceblue;">Excepteur sint occaecat cupidatat non proident, sunt.</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <form action="#" method="post">
                <input type="email" name="Email" placeholder="Email" required="" class="newsletter-input">
                <button type="submit" class="btn btn-style"><span class="fas fa-paper-plane"></span></button>
              </form>
            </div>
          </div>
        </div>
      </div>

  @endsection


  {{-- <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="r">
            <h4 class="f">CONTACT</h4>
          
            <p class="o mt-4"><a href=""><i class="fa-solid fa-location-dot" style="color: #0011ff;"></i>London, 235
                Terry, 10001</a></p>
            <p class="o mt-4"><a href=""><i class="fa-solid fa-envelope-open-text"
                  style="color: #0011ff;"></i>info@example.com</a></p>
            <p class="o mt-4"><a href=""><i class="fa-solid fa-phone" style="color: #0011ff;"></i>++44-000-888-999</a>
            </p>
          </div>
        </div>



        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-4">
              <h3 class="f" style="font-size: 25px;">INFORMATION</h3>
              <div class="o">
                <p class="mt-4"><a href=""> &raquo; About Us</a></p>
                <p><a href=""> &raquo; Contact Us</a></p>
                <p><a href=""> &raquo; Shortcodes</a></p>
                <p><a href=""> &raquo; FAQ's</a></p>
                <p><a href=""> &raquo; Special Products</a></p>
              </div>
            </div>

            <div class="col-lg-4">
              <h3 class="f" style="font-size: 25px;">CATEGORY</h3>
              <div class="o">
                <p class="mt-4"><a href="">&raquo; Fruits & Vegetables</a></p>
                <p><a href="">&raquo; Meats & Seafood</a></p>
                <p><a href="">&raquo; Bakery & Pastry</a></p>
                <p><a href="">&raquo; Beverages</a></p>
                <p><a href="">&raquo; Breakfast & Dairy</a></p>
              </div>
            </div>

            <div class="col-lg-4">
              <h3 class="f" style="font-size: 25px;">PROFILE</h3><br>
              <div class="o">
                <p><a href="">&raquo; Home</a></p>
                <p><a href="">&raquo; Today's Deals</a></p><br>
                <h5 class="ff">Follow Us</h5>
              </div>
              <div class="gg" style="margin-bottom: 30px;margin-top: 20px;">
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