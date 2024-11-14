{{-- 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
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
        <h2 style="padding-top: 40px;">SHORTCODES</h2>
      </div>
      <div class="boxx">
        <h6>Home / <span>Shortcodes</span></h6>
      </div>
      <div class="boot5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mainhead" style="text-align: center;margin-top: 60px;">
                        <h6 style="color: red;">BOOTSTRAP VERSION 5.0</h6>
                        <h1>Elements</h1>
                    </div>
                    <div class="case1">
                        <h2>Slides Only</h2>
                        <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true" style="margin-top: 50px;border: 1px solid rgb(189, 187, 187); border-width: 20px;height: 400px;">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="../images/blog1.jpg" class="d-block w-100" alt="click here" style="height: 400px;">
                              </div>
                              <div class="carousel-item">
                                <img src="../images/blog2.jpg" class="d-block w-100" alt="click here" style="height: 400px;">
                              </div>
                              <div class="carousel-item">
                                <img src="../images/blog3.jpg" class="d-block w-100" alt="click here" style="height: 400px;">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                          <p style="border: 1px solid gainsboro;padding: 30px;background-color: rgb(248, 245, 245);border-width: 40px;">
                           style="border: 1px solid gainsboro;text-align: center;">
                            div id='carouselExampleRide' class='carousel slide' data-bs-ride='true'> <br>
                            div class='carousel-inner'> <br>
                            div class='carousel-item active'> <br>
                            img src = ./images / untitled image (2).jpg class ='d-block w-100 alt='click here'> <br>
                            div>
                            div class='carousel-item active'> <br>
                            img src = ./images / untitled image (2).jpg class ='d-block w-100 alt='click here'> <br>
                            div>
                            div class='carousel-item active'> <br>
                            img src = ./images / untitled image (2).jpg class ='d-block w-100 alt='click here'> <br>
                            div> <br>
                            button class='carousel-control-next' type=button' data-bs-target='#carouselexample' data-bs-slide='pre'> <br>
                            span class=carousel-control-pre-icon' aria-hidden='true'>/span <br>
                            span class='visually-hidden'> previous ./>/> <br>
                            button class='carousel-control-next' type=button' data-bs-target='#carouselexample' data-bs-slide='pre'> <br>
                            span class=carousel-control-pre-icon' aria-hidden='true'>/span <br>
                            span class='visually-hidden'> previous ./>/> <br>
                            buttonn <br>
                            divv <br>
                          </p>
                          
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="boot52">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mainhead2" style="margin-top: 50px;">
                        <h2>Headings</h2>
                    </div>
                    <div class="case2" style="margin-top: 20px;border: 1px solid gainsboro;border-width: 40px;">
                        <h1>h1. Bootstrap heading</h1>
                        <h2>h2. Bootstrap heading</h2>
                        <h3>h3. Bootstrap heading</h3>
                        <h4>h4. Bootstrap heading</h4>
                        <h5>h5. Bootstrap heading</h5>
                        <h6>h6. Bootstrap heading</h6>
                    </div>
                    <p style="border: 1px solid gainsboro;padding: 30px;background-color: rgb(248, 245, 245);padding-inline: 40px;">
                        h1>h1. Bootstrap heading/h1> <br>
                 h2>h2. Bootstrap heading/h2> <br>
                 h3>h3. Bootstrap heading/h3> <br>
                 h4>h4. Bootstrap heading/h4> <br>
                 h5>h5. Bootstrap heading/h5 <br>
                 h6>h6. Bootstrap heading/h6> <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="boot53">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mainhead3" style="margin-top: 50px;">
                        <h2>Grids</h2>
                    </div>
                    <div class="case3" style="border: 1px solid gainsboro;border-width: 40px;">
                        <div class="container text-center">
                            <div class="row align-items-start">
                              <div class="col">
                                One of three columns
                              </div>
                              <div class="col">
                                One of three columns
                              </div>
                              <div class="col">
                                One of three columns
                              </div>
                            </div>
                          </div>
                    </div>
                    <p style="border: 1px solid gainsboro;padding: 30px;background-color: rgb(248, 245, 245);padding-inline: 20px;">
                        div class="container" <br>
                        div class="row <br>
                        div class="col <br>
                        Column <br>
                        /div <br>
                        div class="col" <br>
                        Column <br>
                        /div <br>
                        div class="col <br>
                        Column <br>
                        /div <br>
                        div class="col" <br>
                        Column <br>
                        /div <br>
                    </p>
                </div>
            </div>

        </div>
    </div>
    <div class="boot54">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mainhead4" style="margin-top: 50px;">
                        <h2>Abbreviations</h2>
                    </div>
                    <div class="case4" style="border: 1px solid gray;padding-inline: 20px;">
                        <p><abbr title="attribute">attr</abbr></p>
                <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>
                    </div>
                    <p style="border: 1px solid gainsboro;padding: 30px;background-color: rgb(248, 245, 245);">
                        abbr title='attribute'>attr /pp> <br>
                        p> abbr title='hypertext markup language' class= initialism'>HTML /abbr /p <br>
                        div> <br>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="boot55">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mainhead5" style="margin-top: 50px;">
                        <h2>Breadcrumb</h2>
                    </div>
                    <div class="case5" style="border: 1px solid rgb(65, 63, 63);padding-inline: 20px;padding: 30px;">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item active" aria-current="page">Home</li>
                            </ol>
                          </nav>
                          
                          <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#" style="color: red;">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                          </nav>
                          
                          <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#" style="color: red;">Home</a></li>
                              <li class="breadcrumb-item"><a href="#" style="color: red;">Library</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                          </nav>
                    </div>
                    <p style="border: 1px solid gainsboro;padding: 30px;background-color: rgb(248, 245, 245);">
                        nav aria-label="breadcrumb"> <br>
                            ol class="breadcrumb"> <br>
                              li class="breadcrumb-item active" aria-current="page">Home/li> <br>
                            /ol> <br>
                          /nav> <br>
                          
                          nav aria-label="breadcrumb"> <br>
                            ol class="breadcrumb"> <br>
                              li class="breadcrumb-item">a href="#">Home/a>/li> <br>
                              li class="breadcrumb-item active" aria-current="page">Library/li> <br>
                            /ol> <br>
                          /nav> <br>
                          
                          nav aria-label="breadcrumb"> <br>
                            ol class="breadcrumb"> <br> 
                              li class="breadcrumb-item">a href="#">Hom/a>/li> <br>
                              li class="breadcrumb-item">a href="#">Library/a>/li> <br>
                              li class="breadcrumb-item active" aria-current="page">Data/li> <br>
                            /ol> <br>
                          /nav> <br>
                    /p> <br> 
                /div> <br>
            /div> <br>
        /div> <br>
    /div> <br>
<div class="boot56">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="mainhead6" style="margin-top: 50px;">
                    <h2>Blockquotes</h2>
                </div>
                <div class="case6" style="border: 1px solid gray;margin-top: 20px;padding: 30px;">
                    <blockquote class="blockquote">
                        <p>A well-known quote, contained in a blockquote element.</p>
                      </blockquote>
                </div>
                <p style="border: 1px solid gainsboro;padding: 30px;background-color: rgb(248, 245, 245);">
                    blockquote> class= 'blockquote' > <br> p> A well-known quote, contained in a blockquote element. p> <br>/blockquote>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="boot57">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="mainhead7" style="margin-top: 50px;">
                    <h2>Buttons</h2>
                </div>
                <div class="case7" style="border: 1px solid gray;margin-top: 20px;padding: 30px;">
                    <button type="button" class="btn btn-primary">Primary</button>
                            <button type="button" class="btn btn-secondary" style="color: red;">Secondary</button>
                            <button type="button" class="btn btn-success">Success</button>
                            <button type="button" class="btn btn-danger">Danger</button>
                            <button type="button" class="btn btn-warning">Warning</button>
                            <button type="button" class="btn btn-info">Info</button>
                            <button type="button" class="btn btn-light">Light</button>
                            <button type="button" class="btn btn-dark">Dark</button>
                            
                            <button type="button" class="btn btn-link">Link</button>
                </div>
                <p style="border: 1px solid gainsboro;padding: 30px;background-color: rgb(248, 245, 245);">
                    button type="button" class="btn btn-primary">Primary/button> <br>
                            button type="button" class="btn btn-secondary">Secondary/button> <br>
                            button type="button" class="btn btn-success">Success/button> <br>
                            button type="button" class="btn btn-danger">Danger/button> <br>
                            button type="button" class="btn btn-warning">Warning/button> <br>
                            button type="button" class="btn btn-info">Info/button> <br>
                            button type="button" class="btn btn-light">Light/button> <br>
                            button type="button" class="btn btn-dark">Dark/button> <br>
                            
                            button type="button" class="btn btn-link">Link/button> <br>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="boot58">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="mainhead8" style="margin-top: 50px;">
                    <h2>Using grid markup</h2>
                </div>
                <div class="case8" style="border: 1px solid gray;margin-top: 20px;padding: 30px;">
                    <div class="row">
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Special title treatment</h5>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                              <a href="#" class="btn btn-danger">Go somewhere</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Special title treatment</h5>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                              <a href="#" class="btn btn-danger">Go somewhere</a>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                </div>
                <p style="border: 1px solid gainsboro;padding: 30px;background-color: rgb(248, 245, 245);">
                    div class="row"> <br>
                        div class="col-sm-6"> <br>
                          div class="card"> <br>
                            div class="card-body"> <br>
                              h5 class="card-title">Special title treatment/h5> <br>
                              p class="card-text">With supporting text below as a natural lead-in to additional content./p> <br>
                              a href="#" class="btn btn-primary">Go somewhere/a> <br>
                            /div> <br>
                          /div> <br>
                        /div> <br>
                        
                        div class="col-sm-6"> <br>
                          div class="card"> <br>
                            div class="card-body"> <br>
                              h5 class="card-title">Special title treatment/h5> <br>
                              p class="card-text">With supporting text below as a natural lead-in to additional content./p> <br>
                              a href="#" class="btn btn-primary">Go somewhere/a> <br>
                            /div> <br>
                          /div> <br>
                        /> <br>
                      /div> <br>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="boot59">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="mainhead9" style="margin-top: 50px;">
                    <h2>Modal Popup</h2>
                </div>
                <div class="case9" style="border: 1px solid gray;margin-top: 20px;padding: 30px;">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Launch demo modal
                      </button>
                      
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              ...
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                <p style="border: 1px solid gainsboro;padding: 30px;background-color: rgb(248, 245, 245);">
                    !-- Button trigger modal -- <br>
                    button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> <br>
                        Launch demo modal <br>
                      /button> <br>
                      
                      !-- Modal -- <br>
                      div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> <br>
                        div class="modal-dialog"> <br>
                          div class="modal-content"> <br>
                            div class="modal-header"> <br>
                              h5 class="modal-title" id="exampleModalLabel">Modal title/h5> <br>
                              button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">/button> <br>
                            /div> <br>
                            div class="modal-body"> <br>
                              ... <br>
                            /div> <br>
                            div class="modal-footer"> <br>
                              button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close/button> <br>
                              button type="button" class="btn btn-primary">Save changes/button> <br>
                            /div> <br>
                          /div> <br>
                        /div> <br>
                      /div> <br>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="boot510">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="mainhead10" style="margin-top: 50px;">
                    <h2>Progress</h2>
                </div>
                <div class="case10" style="border: 1px solid gray;margin-top: 20px;padding: 30px;">
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                </div>
                <p style="border: 1px solid gainsboro;padding: 30px;background-color: rgb(248, 245, 245);">
                    div class="progress"> <br>
                        div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">/div> <br>
                      /div> <br>
                      div class="progress"> <br>
                        div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">/div> <br>
                      /div> <br>
                      div class="progress"> <br>
                        div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">/div> <br>
                      /div> <br>
                      div class="progress"> <br>
                        div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">/div> <br>
                      /div> <br>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="boot511">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="mainhead11" style="margin-top: 50px;">
                    <h2>Form Controls</h2>
                </div>
                <div class="case11" style="border: 1px solid gray;margin-top: 20px;padding: 30px;">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                </div>
                <p style="border: 1px solid gainsboro;padding: 30px;background-color: rgb(248, 245, 245);">
                    div class="mb-3"> <br>
                        label for="exampleFormControlInput1" class="form-label">Email address/label> <br>
                        input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"> <br>
                      /div> <br>
                      div class="mb-3"> <br>
                        label for="exampleFormControlTextarea1" class="form-label">Example textarea/label> <br>
                        textarea class="form-control" id="exampleFormControlTextarea1" rows="3">/textarea> <br>
                      /div> <br>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="boot512" style="padding-bottom: 120px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="mainhead12" style="margin-top: 50px;">
                    <h2>Form Validation</h2>
                </div>
                <div class="case12" style="border: 1px solid gray;margin-top: 20px;padding: 30px;">
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">First name</label>
                          <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom02" class="form-label">Last name</label>
                          <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustomUsername" class="form-label">Username</label>
                          <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                              Please choose a username.
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationCustom03" class="form-label">City</label>
                          <input type="text" class="form-control" id="validationCustom03" required>
                          <div class="invalid-feedback">
                            Please provide a valid city.
                          </div>
                        </div>
                        <div class="col-md-3">
                          <label for="validationCustom04" class="form-label">State</label>
                          <select class="form-select" id="validationCustom04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                          </select>
                          <div class="invalid-feedback">
                            Please select a valid state.
                          </div>
                        </div>
                        <div class="col-md-3">
                          <label for="validationCustom05" class="form-label">Zip</label>
                          <input type="text" class="form-control" id="validationCustom05" required>
                          <div class="invalid-feedback">
                            Please provide a valid zip.
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                              Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                              You must agree before submitting.
                            </div>
                          </div>
                        </div>
                        <div class="col-12">
                          <button class="btn btn-danger" type="submit">Submit form</button>
                        </div>
                      </form>
                </div>
                <p style="border: 1px solid gainsboro;padding: 30px;background-color: rgb(248, 245, 245);">
                    form class="row g-3 needs-validation" novalidate> <br>
                        div class="col-md-4"> <br>
                          label for="validationCustom01" class="form-label">First name/label> <br>
                          input type="text" class="form-control" id="validationCustom01" value="Mark" required> <br>
                          div class="valid-feedback"> <br>
                            Looks good! <br>
                          /div> <br>
                        /div> <br>
                        div class="col-md-4"> <br>
                          label for="validationCustom02" class="form-label">Last name/label> <br>
                          input type="text" class="form-control" id="validationCustom02" value="Otto" required> <br>
                          div class="valid-feedback"> <br>
                            Looks good! <br>
                          /div> <br>
                        /div> <br>
                        div class="col-md-4"> <br>
                          label for="validationCustomUsername" class="form-label">Username/label> <br>
                          div class="input-group has-validation"> <br>
                            span class="input-group-text" id="inputGroupPrepend">@/span> <br>
                            input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required> <br>
                            div class="invalid-feedback"> <br>
                              Please choose a username. <br>
                            /div> <br>
                          /div> <br>
                        /div> <br>
                        div class="col-md-6"> <br>
                          label for="validationCustom03" class="form-label">City/label> <br>
                          input type="text" class="form-control" id="validationCustom03" required> <br>
                          div class="invalid-feedback"> <br>
                            Please provide a valid city. <br>
                          /div> <br>
                        /div> <br>
                        div class="col-md-3"> <br>
                          label for="validationCustom04" class="form-label">State/label> <br>
                          select class="form-select" id="validationCustom04" required> <br>
                            option selected disabled value="">Choose.../option> <br>
                            option>.../option> <br>
                          /select> <br>
                          div class="invalid-feedback"> <br>
                            Please select a valid state. <br>
                          /div> <br>
                        /div> <br>
                        div class="col-md-3"> <br>
                          label for="validationCustom05" class="form-label">Zip/label> <br>
                          input type="text" class="form-control" id="validationCustom05" required> <br>
                          div class="invalid-feedback"> <br>
                            Please provide a valid zip. <br>
                          /div> <br>
                        /div> <br>
                        div class="col-12"> <br>
                          div class="form-check"> <br>
                            input class="form-check-input" type="checkbox" value="" id="invalidCheck" required> <br>
                            label class="form-check-label" for="invalidCheck"> <br>
                              Agree to terms and conditions <br>
                            /label> <br>
                            div class="invalid-feedback"> <br>
                              You must agree before submitting. <br>
                            /div> 
                          /div> <br>
                        /div> <br>
                        div class="col-12"> <br>
                          button class="btn btn-primary" type="submit">Submit form/button> <br>
                        /div> <br>
                      /form> <br>
                </p>
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


    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>



  </html> --}}