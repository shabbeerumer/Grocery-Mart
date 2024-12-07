{{-- 
<!doctype html>
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
    @extends('layout.layout')

    @section('content')
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
    <div class="firstimage">
      <h2 style="padding-top: 6rem;">CONTACT US</h2>
    </div>
    <div class="boxx">
      <h6 > <a href="">Home</a>/ <span>Contact us</span></h6>
    </div>
    
    

<!-- Contact -->


<section class="w3l-contact py-5" id="contact">
  <div class="container py-lg-5 py-4">
    <div class="row contact-block">
      <div class="col-md-6 contact-left pe-lg-5">
        <h3 class="mb-sm-4 mb-3">Contact Info</h3>
        <p class="cont-para mb-sm-5 mb-4">We enjoy discussing new projects and design challenges. Please share as much info, as possible so we can get the most out of our first catch-up.</p>
        <div class="cont-details">
            <p><i class="fas fa-map-marker-alt red-icon"></i> <span>10001, 5th Avenue, 12202 street, USA.</span></p>
            <p><i class="fas fa-phone red-icon"></i> <a href="tel:+1(21)2344567">+1(21) 112 7368</a></p>
            <p><i class="fas fa-envelope-open-text red-icon"></i> <a href="mailto:example@mail.com" class="mail">example@mail.com</a></p>
        </div>
        <h4 class="mb-3 mt-5">Follow Us</h4>
        <ul class="social-icons-contact">
            <li>
                <a href="#twitter" class="social-icon"><i class="fab fa-twitter"></i></a>
            </li>
            <li>
                <a href="#facebook" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
                <a href="#linkedin" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
            </li>
            <li>
                <a href="#github" class="social-icon"><i class="fab fa-github"></i></a>
            </li>
            <li>
                <a href="#instagram" class="social-icon"><i class="fab fa-instagram"></i></a>
            </li>
        </ul>
    </div>
      <div class="col-md-6 contact-right mt-md-0 mt-5 ps-lg-0">
        <form action="{{route('contactus.post')}}" method="post" class="signin-form">
          @csrf
          <div class="input-grids">
            <input type="text" name="name" id="w3lName" placeholder="Your Name*" class="contact-input" required="">
            <input type="email" name="email" id="w3lSender" placeholder="Your Email*" class="contact-input" required="">
            <input type="text" name="subject" id="w3lSubect" placeholder="Subject*" class="contact-input" required="">
            <input type="text" name="website_url" id="w3lWebsite" placeholder="Website URL*" class="contact-input" required="">
          </div>
          <div class="form-input">
            <textarea name="message" id="w3lMessage" placeholder="Type your message here*" required=""></textarea>
          </div>
          <button class="btn1 btn-style1">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</section>




















    <!-- end contact  -->



    <div class="map-iframe">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl" width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
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

    
    @endsection

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
</footer>
     --}}
    



{{-- 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html> --}}