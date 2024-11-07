{{-- <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Grocery Mart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="home.js">
</head>

<body> --}}

    @extends('layout.layout')

    @section('content')


    <section class="one">
        <div class="container">
            <div class="row">
                @foreach ($data as $item)

                <div class="col-lg-6 ">
                    <div class="top">
                        <div class="img-text">
                            <p>{{$item->title}}</p>
                            <h1>{{$item->description}}</h1>
                        </div>
                        <div class="img-button">
                            <a href="">{{$item->button_text}}</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="main-img">
                        <img src="../image/{{$item->image}}" alt="">
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>


    <section class="two">
        <div class="container">
            <div class="row">
                @if($data2->isNotEmpty())
                    <!-- Display the first item image only once -->
                    <div class="col-lg-4 col-md-6 col-sm-12 video">
                        <img src="../image/{{$data2->last()->first_image}}" class="img-fluid" style="border-radius: 10px; height: 90%;">
                    </div>
                @endif
    
                <div class="col-lg-8 nav-line">
                    <nav class="line" style="background-color: white;">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist" style="gap: 40px;">
                            <button class="nav-link active vegetable" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true">VEGETABLES</button>
                            <button class="nav-link color" id="nav-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                    aria-selected="false">Meats & Seafood</button>
                            <button class="nav-link color" id="nav-contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                    aria-selected="false">Bakery</button>
                            <button class="nav-link color" id="nav-disabled-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-disabled" type="button" role="tab" aria-controls="nav-disabled"
                                    aria-selected="false">Beverages</button>
                        </div>
                    </nav>
    
                    <!-- Display different items under each tab -->
                    <div class="tab-content" id="nav-tabContent">
                        
                        <!-- Vegetables Tab (3 items) -->
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                            <div class="row row-img">
                                @foreach ($data2->slice(0, 3) as $item) <!-- Get first 3 items for Vegetables -->
                                    <div class="col-lg-4 col-md-6 col-sm-12 line-img" style="display: flex; flex-direction: column; align-items: center;">
                                        <img src="../image/{{$item->second_image}}" alt=""
                                             style="background-color: whitesmoke; border-radius: 10px;" class="img-fluid">
                                        <p style="text-align: center; font-weight: 700; color: red; font-size: 17px;">{{$item->title}}</p>
                                        <div style="display: flex; align-items: center; justify-content: center;">
                                            <h6 style="text-decoration: line-through; margin-right: 10px;">{{$item->cut_price}}</h6>
                                            <h5><i>{{$item->price}}</i></h5>
                                        </div>
                                        <button type="button" class="btn-hover" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            {{$item->button_text}}
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                        </div>
    
                        <!-- Meats & Seafood Tab (2 items) -->
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                            <div class="row row-img">
                                @foreach ($data2->slice(3, 2) as $item) <!-- Get next 2 items for Meats & Seafood -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 line-img" style="display: flex; flex-direction: column; align-items: center;">
                                        <img src="../image/{{$item->second_image}}" alt=""
                                             style="background-color: whitesmoke; border-radius: 10px;" class="img-fluid">
                                        <p style="text-align: center; font-weight: 700; color: red; font-size: 17px;">{{$item->title}}</p>
                                        <div style="display: flex; align-items: center; justify-content: center;">
                                            <h6 style="text-decoration: line-through; margin-right: 10px;">{{$item->cut_price}}</h6>
                                            <h5><i>{{$item->price}}</i></h5>
                                        </div>
                                        <button type="button" class="btn-hover" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            {{$item->button_text}}
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                        </div>
    
                        <!-- Bakery Tab (1 item) -->
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                            <div class="row row-img">
                                @foreach ($data2->slice(5, 1) as $item) <!-- Get 1 item for Bakery -->
                                    <div class="col-lg-4 col-md-6 col-sm-12 line-img" style="display: flex; flex-direction: column; align-items: center;">
                                        <img src="../image/{{$item->second_image}}" alt=""
                                             style="background-color: whitesmoke; border-radius: 10px;" class="img-fluid">
                                        <p style="text-align: center; font-weight: 700; color: red; font-size: 17px;">{{$item->title}}</p>
                                        <div style="display: flex; align-items: center; justify-content: center;">
                                            <h6 style="text-decoration: line-through; margin-right: 10px;">{{$item->cut_price}}</h6>
                                            <h5><i>{{$item->price}}</i></h5>
                                        </div>
                                        <button type="button" class="btn-hover" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            {{$item->button_text}}
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                        </div>
    
                        <!-- Beverages Tab (1 item) -->
                        <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">
                            <div class="row row-img">
                                @foreach ($data2->slice(6, 1) as $item) <!-- Get 1 item for Beverages -->
                                    <div class="col-lg-4 col-md-6 col-sm-12 line-img" style="display: flex; flex-direction: column; align-items: center;">
                                        <img src="../image/{{$item->second_image}}" alt=""
                                             style="background-color: whitesmoke; border-radius: 10px;" class="img-fluid">
                                        <p style="text-align: center; font-weight: 700; color: red; font-size: 17px;">{{$item->title}}</p>
                                        <div style="display: flex; align-items: center; justify-content: center;">
                                            <h6 style="text-decoration: line-through; margin-right: 10px;">{{$item->cut_price}}</h6>
                                            <h5><i>{{$item->price}}</i></h5>
                                        </div>
                                        <button type="button" class="btn-hover" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            {{$item->button_text}}
                                        </button>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
     {{-- @foreach ($data2 as $item)
     <section class="two">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 video">
                    <img src="../image/{{$item->first_image}}" class="img-fluid" style="border-radius: 10px; height: 90%;">


                </div>

                <div class="col-lg-8 nav-line">
                    <nav class="line" style="background-color: white;">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist" style="gap: 40px;">
                            <button class="nav-link active vegetable" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">VEGETABLES</button>
                            <button class="nav-link color" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false">Meats & Seafood</button>
                            <button class="nav-link color" id="nav-contact-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                aria-selected="false">Bakery</button>
                            <button class="nav-link color" id="nav-disabled-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-disabled"
                                aria-selected="false">Beverages</button>
                        </div>
                    </nav>


                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab" tabindex="0">
                            <div class="row row-img">
                                <div class="col-lg-4 col-md-6 col-sm-12 line-img"
                                    style="display: flex; flex-direction: column; align-items: center;">
                                    <img src="../image/{{$item->second_image}}" alt=""
                                        style="background-color: whitesmoke; border-radius: 10px;" class="img-fluid">

                                    <p style="text-align: center; font-weight: 700; color: red; font-size: 17px;">
                                    {{$item->title}}
                        
                                    </p>

                                    <div style="display: flex; align-items: center; justify-content: center;">
                                        <h6 style="text-decoration: line-through; margin-right: 10px;">{{$item->cut_price}}</h6>
                                        <h5><i>{{$item->price}}</i></h5>
                                    </div>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn-hover" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        {{$item->button_text}}
                                    </button>


                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4 col-md-6 col-sm-12  line-img"
                                    style="display: flex; flex-direction: column; align-items: center;">
                                    <img src="../images/a2.png" alt=""
                                        style="background-color: whitesmoke; border-radius: 10px;">

                                    <p style="text-align: center; font-weight: 700; color: red; font-size: 17px;">
                                        Brinjal long 500g</p>

                                    <div style="display: flex; align-items: center; justify-content: center;">
                                        <h6 style="text-decoration: line-through; margin-right: 10px;">$330</h6>
                                        <h5><i>$302</i></h5>
                                    </div>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn-hover" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Add To Cart
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                   
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12  line-img"
                                    style="display: flex; flex-direction: column; align-items: center;">
                                    <img src="../images/a3.png" alt=""
                                        style="background-color: whitesmoke; border-radius: 10px;">

                                    <p style="text-align: center; font-weight: 700; color: red; font-size: 17px;">Palak
                                        250g</p>
                                    <div style="display: flex; align-items: center; justify-content: center;">
                                        <h6 style="text-decoration: line-through; margin-right: 10px;">$250</h6>
                                        <h5><i>$200</i></h5>
                                    </div>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn-hover" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Add To Cart
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                            tabindex="0">


                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12"
                                    style="display: flex; flex-direction: column; align-items: center;">
                                    <img src="../images/b1.png" alt=""
                                        style="background-color: whitesmoke; border-radius: 10px;">

                                    <p style="text-align: center; font-weight: 700; color: red; font-size: 17px;">Ladies
                                        Finger 500g</p>

                                    <div style="display: flex; align-items: center; justify-content: center;">
                                        <h6 style="text-decoration: line-through; margin-right: 10px;">$380</h6>
                                        <h5><i>$350</i></h5>
                                    </div>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn-hover" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Add To Cart
                                    </button>


                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4 col-md-6 col-sm-12"
                                    style="display: flex; flex-direction: column; align-items: center;">
                                    <img src="../images/a1.png" alt=""
                                        style="background-color: whitesmoke; border-radius: 10px;">

                                    <p style="text-align: center; font-weight: 700; color: red; font-size: 17px;">Ladies
                                        Finger 500g</p>

                                    <div style="display: flex; align-items: center; justify-content: center;">
                                        <h6 style="text-decoration: line-through; margin-right: 10px;">$380</h6>
                                        <h5><i>$350</i></h5>
                                    </div>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn-hover" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Add To Cart
                                    </button>


                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-12"
                                    style="display: flex; flex-direction: column; align-items: center;">
                                    <img src="../images/b1.png" alt=""
                                        style="background-color: whitesmoke; border-radius: 10px;">

                                    <p style="text-align: center; font-weight: 700; color: red; font-size: 17px;">Palak
                                        250g</p>
                                    <div style="display: flex; align-items: center; justify-content: center;">
                                        <h6 style="text-decoration: line-through; margin-right: 10px;">$250</h6>
                                        <h5><i>$200</i></h5>
                                    </div>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn-hover" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Add To Cart
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>


                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"
                            tabindex="0">

                            <div class="col-lg-4 col-md-6 col-sm-12"
                                style="display: flex; flex-direction: column; align-items: center;">
                                <img src="../images/c1.png" alt="" style="background-color: whitesmoke; border-radius: 10px;">

                                <p style="text-align: center; font-weight: 700; color: red; font-size: 17px;">Ladies
                                    Finger 500g</p>

                                <div style="display: flex; align-items: center; justify-content: center;">
                                    <h6 style="text-decoration: line-through; margin-right: 10px;">$380</h6>
                                    <h5><i>$350</i></h5>
                                </div>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn-hover" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Add To Cart
                                </button>


                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab"
                            tabindex="0">...</div>
                    </div>
                </div>
            </div>
        </div>
    </section>      
     @endforeach --}}
   

    <section class="three" style="margin-top: 50px;">
        <div class="container-fluid">
            <div class="row">
                @foreach ($data3 as $item)
                    
                <div class="col-lg-6 back-one">
                    <div class="back-one" style="background-image: url('../image/{{$item->first_image}}');">
                        <div class="back-text">
                            <p>{{$item->title}}</p>
                            <h1>20% <span style="color: rgb(18, 17, 17);"><i>{{$item->subtitle}}</i></span></h1>
                            <a href="SHOP NOW">{{$item->first_button_text}}</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 back-two" style="background-image: url('../image/{{$item->second_image}}');">
                    <div class="back-tex">
                        <h4>{{$item->second_button_text}}</h4>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="h-4">
                <h2 class="Deals"><span>
                        <hr>
                    </span> Special Deals</h2>
            </div>
            <div class="row four">
                @foreach ($data4 as $item)
                    
                <div class="col-lg-6">
                    <div class="special-img" style="position: relative;">
                        <img src="../image/{{$item->first_image}}" alt="" style="border-radius: 10px;">
                        <h4 style="position: absolute;">{{$item->first_text}} <br> <span style="padding-left: 31px;">
                            {{-- BESR
                                PRODUCTS --}}
                                {{$item->second_text}}
                            </span></h4>
                        <div class="special-text">
                            <h5>
                                {{$item->fourth_text}} 

                                {{-- 30% --}}

                            </h5>
                            <p>
                                {{-- Off- --}}
                            </p>
                        </div>
                        <img 
                        src= "../image/{{$item->second_image}}"
                        {{-- "../images/bgs5.jpg" --}}
                         alt="" style="margin-top: 30px; border-radius: 10px;">
                        <h3>
                            {{$item->third_text}}
                            {{-- BEST STORE  --}}
                            <br> <span style="padding-left: 25px;">
                                {{$item->fourth_text}}

                            {{-- For GROCERIES --}}
                        </span></h3>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="special" style="position: relative;">
                        <img src= "../image/{{$item->third_image}}"
                        {{-- "../images/bgs4.jpg"  --}}
                        alt="" style="height: 100%; width: 100%;">
                        <div class="big-deal">
                            <h3>
                                {{-- BIG --}}
                                 <span style="font-weight: bold;">
                                    {{$item->second_text}}
                                {{-- DEALS --}}
                            </span></h3>
                            <h4 style="font-weight: bold; font-size: 32px; color: rgb(226, 42, 42); font-weight: bold;">
                                {{-- SAVE UP --}}
                                {{$item->first_text}}
                            </h4>
                            <p style="font-size: 30px; padding-left: 80px;">
                                {{$item->third_text}}
                                {{-- TO --}}
                            </p>
                            <h2
                                style="font-weight: bold; font-size: 30px; padding-left: 60px; color: rgb(234, 50, 50);">
                                {{-- 30% --}}
                                {{$item->first_text}}
                            </h2>
                        </div>
                    </div>

                </div>
                @endforeach

            </div>
        </div>
    </section>



    <section style="background-color: #fafafb; margin-top: 100px;">
        <div class="container">
            <h2 style="text-align: center; padding-top: 60px; padding-bottom: 50px;">Top Products</h2>
            <div class="row">
                @foreach ($data5 as $product)
                    <div class="col-lg-3 mb-5">
                        <div class="card border-0 bg-light position-relative abc">
                            <div class="wrapper position-relative">
                                <img src="../image/{{ $product['first_image'] }}"
                                     class="card-img-top img-fluid main-image"
                                     alt="{{ $product['title'] }}"
                                     data-second-image="../image/{{ $product['second_image'] }}"
                                     onmouseover="swapImage(this)"
                                     onmouseout="resetImage(this)">
                            </div>
                            <div class="card-body text-center w-100">
                                <h5 class="card-title">
                                    <a href="#" class="text-decoration-none text-danger card-title-a">{{ $product['title'] }}</a>
                                </h5>
                                <p class="card-text">
                                    <span class="text-decoration-line-through text-secondary">${{ $product['discounted_price'] }}</span>
                                    <i>${{ $product['price'] }}</i>
                                </p>
                                <button type="button" class="btn btn-outline-secondary text-dark card-body-button">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    

    <section>
        <div class="container-fluid">
            <h2 style="text-align: center; font-weight: 600; margin-top: 100px;"><span>
                    <hr style="width: 100px;">
                    @foreach ($data6 as  $item)
                    
                </span> {{$item->main_text}}</h2>
                @endforeach

            <div class="slider-container">
                <button class="prev-btn" onclick="movePrev()">&#10094;</button>
                <div class="slider" style="margin-top: 50px;">
                    <div class="slider-wrapper">
                        @foreach ($data6 as  $item)
                        <img src="../image/{{$item->first_image}}" alt="Image 1">
                        @endforeach
                        {{-- <img src="../images/tb1.png" alt="Image 1">
                        <img src="../images/tb2.png" alt="Image 2">
                        <img src="../images/tb3.png" alt="Image 3">
                        <img src="../images/tb4.png" alt="Image 4">
                        <img src="../images/tb5.png" alt="Image 5">
                        <img src="../images/tb1.png" alt="Image 1">
                        <img src="../images/tb2.png" alt="Image 2">
                        <img src="../images/tb3.png" alt="Image 3">
                        <img src="../images/tb4.png" alt="Image 4">
                        <img src="../images/tb5.png" alt="Image 5"> --}}
                    </div>
                </div>
                <button class="next-btn" onclick="automove()">&#10095;</button>
            </div>
        </div>
    </section>



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


    {{-- <footer>
        <div class="container">
            <div class="row" style="margin-top: 40px;">
                <div class="col-lg-3">
                    <h2>CONTACT</h2>
                    <hr style="width: 70px;">

                    <div class="icon-location">
                        <i class="fa-solid fa-location-dot"> </i>
                        <span style="color: #363636; margin-left: 20px;">London, 235 Terry, 10001</span>
                    </div>

                    <div class="icon-email">
                        <i class="fa-solid fa-envelope-open-text"></i>
                        <span style="color: #363636; margin-left: 20px;">info@example.com</span>
                    </div>

                    <div class="icon-phone">
                        <i class="fa-solid fa-phone"></i>
                        <span style="color: #363636; margin-left: 20px;">++44-000-888-999</span>
                    </div>

                </div>

                <div class="col-lg-3">
                    <h2>Information</h2>
                    <hr style="width: 70px;">
                    <ul class="list">
                        <li style="margin-top: 10px;"><span><i class="fa-solid fa-angle-right"></i></span> <a
                                href="About Us">About Us</a></li>
                        <li style="margin-top: 10px;"> <span><i class="fa-solid fa-angle-right"></i></span><a
                                href="Contact Us">Contact Us</a>
                        </li>
                        <li style="margin-top: 10px;"> <span><i class="fa-solid fa-angle-right"></i></span><a
                                href="Shortcodes">Shortcodes</a>
                        </li>
                        <li style="margin-top: 10px;"> <span><i class="fa-solid fa-angle-right"></i></span><a
                                href="FAQ's">FAQ's</a></li>
                        <li style="margin-top: 10px;"> <span><i class="fa-solid fa-angle-right"></i></span><a
                                href="Special Products">Special
                                Products</a></li>
                    </ul>
                </div>


                <div class="col-lg-3">
                    <h2>Category</h2>
                    <hr style="width: 70px;">
                    <ul class="list">
                        <li style="margin-top: 10px;"><span><i class="fa-solid fa-angle-right"></i></span> <a
                                href="Fruits & Vegetables">Fruits &
                                Vegetables</a></li>
                        <li style="margin-top: 10px;"> <span><i class="fa-solid fa-angle-right"></i></span><a
                                href=" Meats & Seafood"> Meats &
                                Seafood</a>
                        </li>
                        <li style="margin-top: 10px;"> <span><i class="fa-solid fa-angle-right"></i></span><a href="Bakery & Pastry
                            ">Bakery & Pastry
                            </a>
                        </li>
                        <li style="margin-top: 10px;"> <span><i class="fa-solid fa-angle-right"></i></span><a
                                href="Beverages">Beverages</a></li>
                        <li style="margin-top: 10px;"> <span><i class="fa-solid fa-angle-right"></i></span><a href=" Breakfast & Dairy
                            ">Breakfast & Dairy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3">
                    <h2>Profile</h2>
                    <hr style="width: 70px;">
                    <ul class="list">
                        <li style="margin-top: 10px;"><span><i class="fa-solid fa-angle-right"></i></span> <a
                                href="Home">Home</a></li>
                        <li style="margin-top: 10px;"> <span><i class="fa-solid fa-angle-right"></i></span><a
                                href="Today's Deals">Today's
                                Deals</a>
                        </li>

                        <h5 class="mt-4">Follow Us</h5>
                    </ul>

                    <ul class="facebook" style="list-style: none; display: flex; gap: 20px;">
                        <li><i class="fa-brands fa-facebook"></i></li>
                        <li><i class="fa-brands fa-twitter"></i></li>
                        <li><i class="fa-brands fa-google-plus-g"></i></li>
                        <li><i class="fa-solid fa-p"></i></li>
                    </ul>

                </div>

            </div>

            <div class="row text-center">
                <hr style="width: 100%;">
                <p>© 2021 Grocery Mart. All rights reserved. Design by <span style="color: #3c43a4;"> W3Layouts</span>
                </p>
            </div>

        </div>
    </footer>


    <script>
        let currentPosition = 0;
        const totalImages = 10;
        const imagesToShow = 4;
        const imageWidthPercentage = 100 / imagesToShow;
        const sliderWrapper = document.querySelector('.slider-wrapper');

        function automove() {
            if (currentPosition > -(totalImages - imagesToShow)) {
                currentPosition--;
            } else {
                currentPosition = 0;
            }
            updateSliderPosition();
        }
        function movePrev() {
            if (currentPosition < 0) {
                currentPosition++;
                updateSliderPosition();
            }
        }
        function updateSliderPosition() {
            sliderWrapper.style.transform = `translateX(${currentPosition * imageWidthPercentage}%)`;
        }

        setInterval(automove, 3000);


    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html> --}}
@endsection
