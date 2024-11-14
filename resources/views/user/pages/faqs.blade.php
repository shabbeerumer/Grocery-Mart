{{-- 
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="FaQ.css" />

</head>

<body> --}}
    @extends('layout.layout')

    @section('content')

  <!-- heading -->
  {{-- <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <i class="fa-solid fa-user ms-5"></i>

      <a class="navbar-brand">
        <h1><b>Grocery Mart</b></h1>
      </a>

      <form class="d-flex">
        <i class="fa-solid fa-magnifying-glass me-5"></i>
        <i class="fa-solid fa-bag-shopping me-5"></i>
      </form>
    </div>

  </nav> --}}

  <!-- navber -->
   <div class="a2">
    {{-- <nav class="navbar navbar-expand-lg" style="background-color: #121cac;">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a style="color: white" class="nav-link active" aria-current="page" href="#">HOME</a>
            </li>
            <li class="nav-item dropdown">
              <a style="color: white" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                PRODUCTS
              </a>
              <div class="container">
                <div class="row">
                  <div class="col">
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#"></a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </div>
                  <div class="col">
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </div>
                  <div class="col">
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>

            <li class="nav-item">
              <a style="color: white" class="nav-link" href="#">ABOUT US</a>
            </li>
            <l class="nav-item e dropdown">
              <a style="color: white" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                PAGES
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Blog Post</a></li>
                <li><a class="dropdown-item" href="#">Blog Single</a></li>
                <li><a class="dropdown-item" href="#">Single</a></li>
                <li><a class="dropdown-item" href="#">FaQ</a></li>
                <li><a class="dropdown-item" href="#">ShortCodes</a></li>
              </ul>
            </l>
            <li class="nav-item">
              <a style="color: white" class="nav-link" aria-disabled="true">CONTACT US</a>
            </li>
          </ul>
          <div class="f">
            <img
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAA61JREFUWEftmFuopmMUx39/MY5NbkyOGWdhigy5GFG4cU5KMkqjwRQymuQ0FzSmJsUQmhJylohcOBeFCzQuJOUwOUvEBTnk0N+ztN7p8e73+7537/19u1FW7Yv9vms96/+u5//813o+sYWZtjA8/PcB2d4XWAFcCHwInCbpu3FVuneFbC8CbgFObCVfIWnDnAKyfRbwELB9R+LzJD0yJ4BsRwXXAldXCX8HtgK2zmeLJW2cK0C3AldUyV4CLgbeBHbJ5/Ml/TRxQLaDuHdViYI/qyTZ9lfA7vlunqQ/JgrI9uHAO7BZFjZICoD/mO1PgIX570JJn00a0NPAGZkkgB1TV8H2K8Dx+X6JpDcmBsj2EUVbgqRBaAMHSvq4Tmj7RmB1Plstac0kAQVvmu25W9JF7WS2Q4uC4GGxXfsEt8YBaoow2v4a2C0XXyTpvQ5AceSjanvnu1MkPTt2QKnG7zZfLqkh7pRctuP4Nwr9ERB69ONsQf2rQrbPAR7LRe+XdMGgBLbnAZuAPdMnKnTqbLeuDWhl9qvIsbacrOuGfbHtE4AXU7nD9Q7g8tmAagO6Cbg2QayUtH7UFti+DLi98nsGOFfSL6Niu963Aa0Cbk7HNZKaoz10bdsBKIA19k1pxOuCY5J+mw6wNqDzgQdygXslxczTy2xflSBq/+hxjwMhtMG3z4EdCk8PLs8PKfSYD0Se75ugNqDjigK/mi83Sdq/F5p0yjHltorofcI3Slo8CNC2pfSBdsd0OKCt0qMy5OlbnuJ66Ch/4EtJe3UCioe2nwLOTIf1kuLkzchsx0RwOnAkcFj+7dRabF3h2eZ5q0upYzp8MoNirDhIUnT3sZjtENsPiqyEjoVF2/l0YIWySm8BR6XT69HZy4n7axyIymhTTxLPSTq5XrdzyLe9BHitcrxT0qWzBWS7nkB/zXbz/khAWaUYKWqlDq25ciaVSqKHnERramyZpPvaHznwGlRmnhjknwdOqoJiMFtaRpKYCHqZ7f0KDx+tKBBxD5fTu7RrgaH3Mts7Ay8AR1fBUeobChmj+YYid5rtGE2WAdcA21ROL8fJkxTrTLGRF0XboU1xJzu7Iz6Gs5iXYuj/trSKXYE9ijLHTN7MVHXYPXFrGbbtIwEln8LvEuD66rbRa8vS6YuIldS0pYGxvQA10UnO2IbQqmOB7Yag+jnb0BPAg30Pw7QA1clzK4NbocYLgODbD0D88BAVeVvSn9MpY/jOGNB0E/X1/x/QqEr9DQRdJjRojjwSAAAAAElFTkSuQmCC" />
          </div>
        </div>
      </div>
    </nav> --}}

    
  <div class="container">
    <div class="row">
      <h2 style="padding-bottom: 19rem;" class="ps-5 pt-5">FaQ'S</h2>
    </div>
  </div>
</div> 

  <!-- home link -->
  <div class="breadcrumb" style="padding-left: 46%;">
    <a href="index.html"> <b>Home</b> </a>&nbsp;&nbsp;&nbsp; <span> /&nbsp;&nbsp; FAQ's </span>
  </div>

  <br><br><br>

  <!-- headings and paragraph? -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <h5>1. Excepteur sint occaecat cupidatat non proident ?</h5>
        <br>
        <div class="" style="color: rgb(158, 158, 158);">

          <b>Ans.</b> But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
          born and I will give you a complete account of the system, and expound the actual teachings of the great
          explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure
          itself, because it is pleasure.
        </div>
        <br><br>

        <h5>2. Quis nostrum exercitationem ullam corporis suscipit ?</h5>
        <br>
        <div class="" style="color: rgb(158, 158, 158);">
        <b>Ans.</b> But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
        born and I will give you a complete account of the system, and expound the actual teachings of the great
        explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure
        itself, because it is pleasure.</div>
        <br><br>

        <h5>3. Nemo enim ipsam voluptatem quia voluptas sit ?</h5>
        <br>
        <div class="" style="color: rgb(158, 158, 158);">
        <b>Ans.</b> But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
        born and I will give you a complete account of the system, and expound the actual teachings of the great
        explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure
        itself, because it is pleasure.</div>
        <br><br>

        <h5>4. Ut enim ad minima veniam, quis nostrum exercitationem ?</h5>
        <br>
        <div class="" style="color: rgb(158, 158, 158);">
        <b>Ans.</b> But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
        born and I will give you a complete account of the system, and expound the actual teachings of the great
        explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure
        itself, because it is pleasure.</div>
        <br><br>

        <h5>5. Quis autem vel eum iure reprehenderit qui ?</h5>
        <br>
        <div class="" style="color: rgb(158, 158, 158);">
        <b>Ans.</b> But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
        born and I will give you a complete account of the system, and expound the actual teachings of the great
        explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure
        itself, because it is pleasure.</div>
        <br><br>

        <h5>6. Sed ut perspiciatis unde omnis iste natus error sit ?</h5>
        <br>
        <div class="" style="color: rgb(158, 158, 158);">
        <b>Ans.</b> But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
        born and I will give you a complete account of the system, and expound the actual teachings of the great
        explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure
        itself, because it is pleasure.</div>
        <br><br>

        <h5>7. Nam libero tempore, cum soluta nobis est ?</h5>
        <br>
        <div class="" style="color: rgb(158, 158, 158);">
        <b>Ans.</b> But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
        born and I will give you a complete account of the system, and expound the actual teachings of the great
        explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure
        itself, because it is pleasure.</div>
        <br><br>

        <h5>8. At vero eos et accusamus et iusto odio dignissimos ?</h5>
        <br>
        <div class="" style="color: rgb(158, 158, 158);">
        <b>Ans.</b> But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
        born and I will give you a complete account of the system, and expound the actual teachings of the great
        explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure
        itself, because it is pleasure.</div>
        <br><br>

        <h5>9. Itaque earum rerum hic tenetur a sapiente delectus ?</h5>
        <br>
        <div class="" style="color: rgb(158, 158, 158);">
        <b>Ans.</b> But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
        born and I will give you a complete account of the system, and expound the actual teachings of the great
        explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure
        itself, because it is pleasure.</div>
        <br><br>

        <h5>10. Vel illum qui dolorem eum fugiat quo voluptas nulla ?</h5>
        <br>
        <div class="" style="color: rgb(158, 158, 158);">
        <b>Ans.</b> But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
        born and I will give you a complete account of the system, and expound the actual teachings of the great
        explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure
        itself, because it is pleasure.</div>
        <br><br>

        <h5>11. Ut enim ad minima veniam, quis nostrum exercitationem ?</h5>
        <br>
        <div class="" style="color: rgb(158, 158, 158);">
        <b>Ans.</b> But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
        born and I will give you a complete account of the system, and expound the actual teachings of the great
        explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure
        itself, because it is pleasure.</div>
      </div>
    </div>
  </div>
  <br><br><br><br><br>




  <div class="newsletter">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <h3>Newsletter</h3>
          <p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
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



  {{-- <br><br><br><br>



  <div class="container py-4">
    <div class="row w3_footer_grids">
      <!-- Contact Section -->
      <div class="col-md-3 w3_footer_grid">
        <h2>Contact</h2><br>
        <ul class="address">
          <li><i class="fas fa-map-marker-alt"></i>London, 235 Terry, 10001</li>
          <li><i class="fas fa-envelope-open-text"></i><a href="mailto:info@example.com">info@example.com</a></li>
          <li><a href="tel:+44-000-888-999"><i class="fas fa-phone-alt"></i>+44-000-888-999</a></li>
        </ul>
      </div>

      <!-- Information Section -->
      <div class="col-md-3 w3_footer_grid">
        <h2>Information</h2>
        <ul class="info">
          <li><a href="about.html"><i class="fas fa-angle-right"></i>About Us</a></li>
          <li><a href="mail.html"><i class="fas fa-angle-right"></i>Contact Us</a></li>
          <li><a href="codes.html"><i class="fas fa-angle-right"></i>Shortcodes</a></li>
          <li><a href="faq.html"><i class="fas fa-angle-right"></i>FAQ's</a></li>
          <li><a href="products1.html"><i class="fas fa-angle-right"></i>Special Products</a></li>
        </ul>
      </div>

      <!-- Category Section -->
      <div class="col-md-3 w3_footer_grid">
        <h2>Category</h2>
        <ul class="info">
          <li><a href="products1.html"><i class="fas fa-angle-right"></i>Fruits &amp; Vegetables</a></li>
          <li><a href="products2.html"><i class="fas fa-angle-right"></i>Meats &amp; Seafood</a></li>
          <li><a href="products1.html"><i class="fas fa-angle-right"></i>Bakery &amp; Pastry</a></li>
          <li><a href="products2.html"><i class="fas fa-angle-right"></i>Beverages</a></li>
          <li><a href="products1.html"><i class="fas fa-angle-right"></i>Breakfast &amp; Dairy</a></li>
        </ul>
      </div>

      <!-- Profile and Social Media Section -->
      <div class="col-md-3 w3_footer_grid">
        <h2>Profile</h2>
        <ul class="info">
          <li><a href="index.html"><i class="fas fa-angle-right"></i>Home</a></li>
          <li><a href="products2.html"><i class="fas fa-angle-right"></i>Today's Deals</a></li>
        </ul>
        <h4>Follow Us</h4>
        <div class="agileits_social_button">
          <ul class="social-icons">
            <li><a href="#facebook" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#twitter" class="twitter"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#google" class="google"><i class="fab fa-google-plus-g"></i></a></li>
            <li><a href="#pinterest" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
          </ul>
        </div>
      </div>
      <br><br><br>
      <hr style="color:rgb(199, 197, 197); margin-bottom: 30px;">
      <br><br>
      <div class="z">
        <p style="text-align: center;">© 2021 Grocery Mart. All rights reserved. Design by <a href=""
            style="text-decoration: none; color:rgb(1, 1, 133);">W3Layouts</a></p>
      </div>

    </div>
  </div> --}}






  @endsection

{{-- 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/brands.min.js"
    integrity="sha512-N5K6sQXjzT79tR16zvBu7B0AqvYtHKvk3+eKuQWoVNQDGU5kR9W8OP3CTYtm3vVM2EtObrmtm0Jup17F718OyA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html> --}}