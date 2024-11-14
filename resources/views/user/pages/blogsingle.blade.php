{{-- 
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="./style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css"
    integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#" style="color: white;">HOME</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                style="color: white;">
                PRODUCTS
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color: white;">ABOUT US</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                style="color: white;">
                PAGES
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
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
    <h2 style="padding-top: 40px;">BLOG SINGLE</h2>
  </div>
  <div class="boxx">
    <h6>Home / <span>Blog Single</span></h6>
  </div>
  <div class="imagesss" style="text-align: center;margin-top: 120px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <img class="img-fluid radius-image" src="../images/IMG-20241023-WA0011.jpg" alt="" style="width: 900px; height: 400px;"> 
        </div>
      </div>
    </div>
  </div>
  <div class="singledata">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="single-post-image mt-4">
            <div class="post-content">
                <h5>Groceries</h5>
                <h3 class="text-start mb-3">At vero eos et accusamus et iusto odio dignissimos</h3>
            </div>
        </div>
        <div class="single-post-content">
          <p class="mb-4">Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
              consectetur.Ea consequuntur illum facere aperiam sequi optio consectetur adipisicing
              elitFuga,
              suscipit totam animi consequatur saepe blanditiis.Lorem ipsum dolor sit amet,Ea consequuntur
              illum facere aperiam sequi optio consectetur adipisicing elit..Lorem ipsum, dolor sit amet
              consectetur adipisicing elit. At, corrupti odit? At iure facere, porro repellat officia
              quas,
              dolores magnam assumenda soluta odit harum voluptate inventore ipsa maiores fugiat accusamus
              eos
              nulla. Iure voluptatibus explicabo officia.</p>
          <p class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, corrupti odit? At
              iure
              facere, porro repellat officia quas, dolores magnam assumenda soluta odit harum voluptate
              inventore ipsa maiores fugiat accusamus eos nulla. Iure voluptatibus explicabo officia.</p>
          <blockquote class="quote my-4">
              <q>
                  Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio
                  consectetur.Ea
                  consequuntur illum facere aperiam sequi optio consectetur adipisicing elitFuga, suscipit
                  totam
                  animi consequatur.</q>
              <footer class="blockquote-footer mt-3" style="color: red;">
                  Alexander tony</footer>
          </blockquote>
          <p class="mb-4">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id
              erat
              eu ullamcorper. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in
              culpa quis. . </p>

          <p class="mb-4">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id
              erat
              eu ullamcorper. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in
              culpa quis. . </p>
      </div>
      <div class="sing-post-thumb mb-lg-5 mb-4 row">
        <div class="col-sm-6">
            <a href="#url"><img src="../images/IMG-20241023-WA0015.jpg" class="img-fluid radius-image" alt=""></a>
        </div>
        <div class="col-sm-6 mt-sm-0 mt-3">
            <a href="#url"><img src="../images/IMG-20241023-WA0014.jpg" class="img-fluid radius-image" alt=""></a>
        </div>
    </div>
    <p class="mt-4">Vivamus a ligula quam. Ut blandit eu leo non suscipit. <a href="#" class="use-admin">Anna
      Delpan</a> In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla
  quis
  lorem neque, mattis venenatis lectus.<a href="#" class="use-admin"> Delpan Deo</a>
  In
  interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis
  lectus. Duis
  feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum
  ullamcorper
  dolor eu mattis.Nulla quis lorem neque</p>
  <p class="mt-4 mb-4">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id
    erat
    eu ullamcorper. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in
    culpa quis. . </p>
    <p class="mb-4">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id
      erat
      eu ullamcorper. Nunc id ipsum fringilla, gravida felis vitae. Phasellus lacinia id, sunt in
      culpa quis.. </p>
      <h3 class="title-small mt-4 mb-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h3>
      <p class="mt-4">A ligula quam. Ut blandit eu leo non suscipit. <a href="#" class="use-admin">Anna
        Delpan</a> In interdum ullamcorper dolor eu mattis.Nulla quis lorem neque,Nulla
    quis
    lorem neque, mattis venenatis lectus.<a href="#" class="use-admin"> Delpan Deo</a>
    In
    interdum ullamcorper dolor eu mattis.Nulla quis lorem neque, mattis venenatis
    lectus. Duis
    feugiat tortor sed.Nulla quis lorem neque, mattis venenatis lectus. In interdum
    ullamcorper
    dolor eu mattis.Nulla quis lorem neque</p>
    <ul class="share-post my-5" style="text-decoration: none; list-style-type: none;">
      <li>
          <h4 class="side-title mr-4">Share this post :</h4>
      </li>
      <li>
          <a href="#link" class="facebook" title="Facebook">
              <span class="fab fa-facebook-f" aria-hidden="true"></span>
          </a>
      </li>
      <li>
          <a href="#link" class="twitter" title="Twitter">
              <span class="fab fa-twitter" aria-hidden="true"></span>
          </a>
      </li>
      <li>
          <a href="#link" class="instagram" title="Instagram">
              <span class="fab fa-instagram" aria-hidden="true"></span>
          </a>
      </li>
  </ul>
  <div class="single-pagination" style="text-decoration: none;border: 1px solid transparent;justify-content: space-between; padding: 40px;background-color: #e6e3e3;text-align: center;">
      <button type="button" class="btn btn-outline-secondary"><a class="prev-post pull-left" href="#prev" style="text-decoration: none;color: gray"><span class="fa fa-arrow-left" aria-hidden="true"></span>
        Previous Post</a></button>
    <button type="button" class="btn btn-outline-secondary"><a class="next-post pull-right" href="#next" style="text-decoration: none;color: gray;">Next Post <span class="fa fa-arrow-right" aria-hidden="true"></span></a></button>
</div>

<h3>Comments</h3>
  <div class="blogimgdata3" style="display: flex;margin-top: 90px;">
      <div>
          <img src="../images/IMG-20241023-WA0016.jpg" alt="manwatch" style="height: 70px;border-radius: 50px;">
      </div>
      <div style="border: 1px solid transparent;padding-inline: 10px;background-color:  #e6e3e3;">
          <h4>Bradley</h4>
          <p>22 Aug 2023 | <span style="color: red;">Reply</span></p>
          <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam rerum, quidem, libero
              dicta officia recusandae iste quae, inventore quia culpa <br> eligendi commodi dolorem atque
              aliquid.
          </p>
      </div>
  </div>
  <div class="blogimgdata3" style="display: flex;">
      <div>
          <img src="../images/IMG-20241023-WA0019.jpg" alt="manwatch" style="height: 70px;border-radius: 50px;">
      </div>
      <div style="border: 1px solid transparent;padding-inline: 10px;background-color:  #e6e3e3;">
          <h4>Bradley</h4>
          <p>22 Aug 2023 | <span style="color: red;">Reply</span></p>
          <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam rerum, quidem, libero
              dicta officia recusandae iste quae, inventore quia culpa <br> eligendi commodi dolorem atque
              aliquid.
          </p>
          <div class="blogimgdata3" style="display: flex;">
            <div>
                <img src="../images/IMG-20241023-WA0013.jpg" alt="manwatch" style="height: 70px;border-radius: 50px;">
            </div>
            <div style="border: 1px solid transparent;background-color:  #e6e3e3;padding-inline: 10px;">
                <h4>Bradley</h4>
                <p>22 Aug 2023 | <span style="color: red;">Reply</span></p>
                <p>
                    We are glad that you are satisfied and happy!!!
                </p>
            </div>
        </div>
         
      </div>
     
  </div>


  <div class="reply mt-5" id="reply" style="padding-bottom: 120px;">
      <h3 class="post-content-title py-3">Leave a reply</h3>
      <form action="#" method="POST">
          <div class="form-group reply">
              <div class="input-grids row mb-md-4 mb-3">

                  <div class="form-group col-lg-6">
                      <input type="text" name="Name" class="form-control" placeholder="Your Name*" required="">
                  </div>
                  <div class="form-group col-lg-6 mt-lg-0 mt-3">
                      <input type="email" name="Email" class="form-control" placeholder="Email*" required="">
                  </div>
              </div>
              <textarea class="form-control" placeholder="Your Message" id="exampleFormControlTextarea1" rows="4"></textarea>

              <div class="post-submit mt-4"
               {{-- style="text-align: end;" --}}
               >
                  <button class="btn btn-danger 
                  {{-- btn-style --}}
                  " 
                  type="submit">Post Comment <i class="fas fa-arrow-right ms-lg-4 ms-2"></i> </button>
              </div>
          </div>
      </form>
  </div>
  

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


  {{-- <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h3>CONTACT</h3>
          <ul class="address">
            <li>
              <i class="fa-solid fa-location-dot"></i>London, 235 Terry, 10001
            </li>
            <li>
              <i class="fa-solid fa-inbox"></i>info@example.com
            </li>
            <li>
              <i class="fa-solid fa-phone"></i>++44-000-888-999
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h3>INFORMATION</h3>
          <ul class="address">
            <li>
              <i class="fa-solid fa-angle-right"></i>About Us
            </li>
            <li>
              <i class="fa-solid fa-angle-right"></i>Contact Us
            </li>
            <li>
              <i class="fa-solid fa-angle-right"></i>Shortcodes
            </li>
            <li>
              <i class="fa-solid fa-angle-right"></i>FAQ's
            </li>
            <li>
              <i class="fa-solid fa-angle-right"></i>Special Products
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h3>CATEGORY</h3>
          <ul class="address">
            <li>
              <i class="fa-solid fa-angle-right"></i>Fruits & Vegetables
            </li>
            <li>
              <i class="fa-solid fa-angle-right"></i>Meats & Seafood
            </li>
            <li>
              <i class="fa-solid fa-angle-right"></i>Bakery & Pastry
            </li>
            <li>
              <i class="fa-solid fa-angle-right"></i>Beverages
            </li>
            <li>
              <i class="fa-solid fa-angle-right"></i>Breakfast & Dairy
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h3>PROFILE</h3>
          <ul class="address">
            <li>
              <i class="fa-solid fa-angle-right"></i>Home
            </li>
            <li>
              <i class="fa-solid fa-angle-right"></i>Today's Deals
            </li>
            <h4>Follow Us</h4>
         
            <li>
              <i class="fa-brands fa-facebook"></i>
            </li>
            <li>
              <i class="fa-brands fa-x-twitter"></i>
            </li>
            <li>
              <i class="fa-brands fa-google"></i>
            </li>
            <li>
              <i class="fa-brands fa-pinterest"></i>
            </li>
          </ul>
          
        </div>
      </div>
    </div>
  </div> --}}
 


  
@endsection


















  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html> --}}