@extends('layout.layout')

@section('content')
@foreach ($data1 as $item)
    
<div class="banner ">
    <div class="container  containerone" >
      <h2 class=" text-white  ">
        {{-- Deals on --}}
        {{$item->first_text}}
        <br>
        <span class="text-danger spanone ">
          {{-- Household Products --}}
          {{$item->second_text}}

        </span>
        <br>
        {{-- Flat --}}

        <i>
          {{-- 25% Discount --}}
          {{$item->third_text}}
        </i>
      </h2>
    </div>
   </div>
   @endforeach

    
   <div class="container-fluid  p-2">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a href="#" class="text-decoration-none breadcrumb-item-a">Home</a></li>
        <li class="breadcrumb-item active breadcrumb-item-li" aria-current="page">Product 2</li>
      </ol>
    </nav>
   </div>
   
   <div class="container">
    <div class="row " >
          
      <div class="col-md-4 ">
        <div class="">
    
            <!-- Categories Section -->
            @foreach ($data2->take(1) as $item)
            <div class="mb-3">
                <h3 class="h3one">
                    {{-- Categories --}}
                    {{$item->main_title}}
                </h3>
                <div class="">
                    <div class="card divone">
                        <div class="card-body">
                            <ul>
                                <li class="lione"><a href="" class="aone">{{$item->first_text}}</a></li>
                                <li class="lione"><a href="" class="aone">{{$item->second_text}}</a></li>
                                <li class="lione"><a href="" class="aone">{{$item->third_text}}</a></li>
                                <li class="lione"><a href="" class="aone">{{$item->fourth_text}}</a></li>
                                <li class="lione"><a href="" class="aone">{{$item->fifth_text}}</a></li>
                                <li class="lione"><a href="" class="aone">{{$item->sixth_text}}</a></li>
                                <li class="lione"><a href="" class="aone">{{$item->seventh_text}}</a></li>
                                <li class="lione"><a href="" class="aone">{{$item->eighth_text}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    
            <!-- Brand Section -->
            @foreach ($data2->skip(1) as $item)
            <div class="mb-3">
                <h3 class="h3one">
                    {{-- Brand --}}
                    {{$item->main_title}}
                </h3>
                <div class="">
                    <div class="card divone">
                        <div class="card-body">
                            <ul>
                                <li class="lione"><input type="checkbox"> <a href="" class="aone ms-1">{{$item->first_text}}</a></li>
                                <li class="lione"><input type="checkbox"> <a href="" class="aone ms-1">{{$item->second_text}}</a></li>
                                <li class="lione"><input type="checkbox"> <a href="" class="aone ms-1">{{$item->third_text}}</a></li>
                                <li class="lione"><input type="checkbox"> <a href="" class="aone ms-1">{{$item->fourth_text}}</a></li>
                                <li class="lione"><input type="checkbox"> <a href="" class="aone ms-1">{{$item->fifth_text}}</a></li>
                                <li class="lione"><input type="checkbox"> <a href="" class="aone ms-1">{{$item->sixth_text}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    
         
    
        </div>
    </div>
    
      <div class="col-md-8">
        <div class="row">
          @foreach ($data3 as $item)
              
            <div class="col-lg-6 mb-2">  
                <div class="card text-bg-dark">  
                    <img src= "../image/{{$item->image}}"
                    {{-- "../images/pbg3.jpg" --}}
                     class="card-img" alt="...">  
                    <div class="card-img-overlay  pb-5 ps-5 ms-5 d-flex flex-column mb-3  justify-content-end">  
                        <h3 class="card-title text-white  ">
                          {{$item->first_text}}
                          {{-- Kitchen Appliances --}}
                        </h3>  
                        <h4 class="card-text text-danger " >
                          {{$item->second_text}}

                          {{-- Up To --}}
                        </h4>  
                        <h6 class="card-text ">
                          {{$item->third_text}} 
                          {{-- 25% Discount --}}
                        </h6>  
                    </div>  
                </div>  
            </div>
            @endforeach

          {{-- <div class="col-lg-6">
            <div class="card text-bg-dark">
              <img src="../images/pbg4.jpg" class="card-img" alt="...">
              <div class="card-img-overlay text-start cardone">
                <h4 class="card-title ">Home Entertainment

                </h4>
                <h4 class="card-text me-5 text-danger" >Mega
                </h4>
                <h4 class="card-text">Deals</h4>
              </div>
            </div>
          </div> --}}
        </div>
        <div class="row mt-3">
          <div class="col-lg-8">
            <h3 class="">Showing Results: 0-5</h3>
          </div>
          <div class="col-lg-4">
            <select name="" id="" class="p-2 ">
              <option value="">Default sorting</option>
              <option value="">Sort by popularity</option>
              <option value="">Sort by average rating</option>
              <option value="">Sort by newness</option>
              <option value="">Sort by price: low to high</option>
              <option value="">Sort by price: high to low</option>

            </select>
          </div>
        </div>
        
        <div class="row flex-row ">
          @foreach ($data4->take(9) as $item)
              <div class="col-md-4 mb-2">
                  <div class="card border-0 bg-light position-relative">
                      <div class="wrapper position-relative">
                          <img src="../image/{{$item->first_image}}"
                               class="card-img-top img-fluid main-image" alt="..." id="img7">
                          <div class="w"></div>
                          <div class="z-3 eye">
                              <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                  <i class="bi bi-eye-fill"></i>
                              </a>
                          </div>
                          <!-- Modal 1 (Default Modal) -->
                          <!-- (your modal code here) -->
                      </div>
                      <div class="card-body text-center w-100">
                          <h5 class="card-title">
                              <a href="#" class="text-decoration-none text-danger card-title-a">
                                  {{$item->first_text}}
                              </a>
                          </h5>
                          <p class="card-text">
                              <span class="text-decoration-line-through text-secondary">
                                  {{$item->cut_text}}
                              </span>
                              <i>{{$item->second_text}}</i>
                          </p>
                          <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                              <button type="button" class="btn btn-outline-secondary text-dark card-body-button">Add To Cart</button>
                          </a>
                          <!-- Modal 2 (Transparent Backdrop) -->
                          <!-- (your modal code here) -->
                      </div>
                  </div>
              </div>
          @endforeach
      </div>
      
        {{-- <div class="row mb-3 rowone mt-2">
          <div class="col-md-4 mb-2">
  <div class="card border-0 bg-light position-relative ">
    <div class="wrapper position-relative">
      <img src="../images/p1.png" class="card-img-top img-fluid main-image" alt="..." id="img7">
      <div class="w"></div>
      <div class="z-3 eye">
        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">
          <i class="bi bi-eye-fill"></i>
        </a>
      </div>

      <!-- Modal 1 (Default Modal) -->
      <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body row">
              <div class="col-md-5">
                <img src="../images/p1.png" alt="" class="img-fluid">
              </div>
              <div class="col-md-7">
                <h4 class="text-danger">Winterwear Liquid</h4>
                <p>
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                </p>
                <div class="rating d-inline-flex">
                  <div><i class="bi bi-star"></i></div>
                  <div><i class="bi bi-star"></i></div>
                  <div><i class="bi bi-star"></i></div>
                  <div><i class="bi bi-star"></i></div>
                  <div><i class="bi bi-star"></i></div>
                </div>
                <div class="mt-2 mb-2">
                  <span class="text-decoration-line-through text-secondary me-2">$650</span>
                  <p class="d-inline">$245</p>
                </div>
                <button type="button" class="btn btn-outline-dark  btn-hover">Add To Cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="card-body text-center w-100">
      <h5 class="card-title">
        <a href="#" class="text-decoration-none text-danger card-title-a">Winterwear Liquid</a>
      </h5>
      <p class="card-text">
        <span class="text-decoration-line-through text-secondary">$650</span>
        <i>$245</i>
      </p>
      <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2">
        <button type="button" class="btn btn-outline-secondary text-dark card-body-button">Add To Cart</button>
      </a>

      <!-- Modal 2 (Transparent Backdrop) -->
      <div class="modal fade transparent-modal" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-one">
          <div class="modal-content">
            <div class="modal-body">
              <div class="card shadow ">
                <div class="card-body">
                  <div class="d-flex p-2 justify-content-between">
                    <div>
                      <p><a href="#" class="text-decoration-none modala">Winterwear Liquid</a></p>
                    </div>
                    <div class="w-50 modaldiv1">
                      <div class="d-inline">
                        <input type="text" class="input1">
                      </div>
                      <div class="d-inline">
                        <button type="button" class="btn btn-outline-secondary btn-sm">x</button>
                      </div>
                      <div class="d-inline">
                        <span class="modalspan">$1470.00</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-flex pt-2 justify-content-between">
                <div>
                  <h4>Subtotal: $2205.00 USD</h4>
                </div>
                <div>
                  <button type="button" class="btn btn-sm btn-outline-dark border-0 text-danger" data-bs-dismiss="modal">Shop More</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

         

          <div class="col-md-4 mb-2">
              <div class="card border-0 bg-light position-relative ">
                  <div class="wrapper position-relative">
                      <img src="../images/p3.png" class="card-img-top img-fluid main-image" alt="..." id="img8">
                      <div class="w"></div>
                      <div class="z-3 eye">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                          <i class="bi bi-eye-fill"></i>
                        </a>
                      </div>
                
                      <!-- Modal 1 (Default Modal) -->
                      <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-body row">
                              <div class="col-md-5">
                                <img src="../images/p3.png" alt="" class="img-fluid">
                              </div>
                              <div class="col-md-7">
                                <h4 class="text-danger">Dry Bucket Mop
                                </h4>
                                <p>
                                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                
                                </p>
                                <div class="rating d-inline-flex">
                                  <div><i class="bi bi-star"></i></div>
                                  <div><i class="bi bi-star"></i></div>
                                  <div><i class="bi bi-star"></i></div>
                                  <div><i class="bi bi-star"></i></div>
                                  <div><i class="bi bi-star"></i></div>
                                </div>
                                <div class="mt-2 mb-2">
                                  <span class="text-decoration-line-through text-secondary me-2">$960</span>
                                  <p class="d-inline">$920</p>
                                </div>
                                <button type="button" class="btn btn-outline-dark text-dark btn-hover">Add To Cart</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                  </div>
                  <div class="card-body text-center w-100">
                      <h5 class="card-title">
                          <a href="" class="text-decoration-none text-danger card-title-a">Dry Bucket Mop</a>
                      </h5>
                      <p class="card-text">
                          <span class="text-decoration-line-through text-secondary">$960</span>
                          <i>$920</i>
                      </p>
                      <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                        <button type="button" class="btn btn-outline-secondary text-dark card-body-button">Add To Cart</button>
                      </a>
                
                      <!-- Modal 2 (Transparent Backdrop) -->
                      <div class="modal modal1 fade " id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-one">
                          <div class="modal-content">
                            <div class="modal-body">
                              <div class="card">
                                <div class="card-body">
                                  <div class="d-flex p-2 justify-content-between">
                                    <div>
                                      <p><a href="#" class="text-decoration-none text-dark">Dry Bucket Mop</a></p>
                                    </div>
                                    <div class="w-50 modaldiv1">
                                      <div class="d-inline">
                                        <input type="text" class="input1">
                                      </div>
                                      <div class="d-inline">
                                        <button type="button" class="btn btn-outline-secondary btn-sm">x</button>
                                      </div>
                                      <div class="d-inline">
                                        <span>$1470.00</span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="d-flex pt-2 justify-content-between">
                                <div>
                                  <h4>Subtotal: $2205.00 USD</h4>
                                </div>
                                <div>
                                  <button type="button" class="btn btn-sm btn-outline-dark border-0 text-danger" data-bs-dismiss="modal">Shop More</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  <div class="position-absolute top-0 end-0 p-2 text-white text-center z-3">
                      <p class="pone text-center">New</p>
                  </div>
              </div>
          </div>

          <div class="col-md-4 mb-2">
              <div class="card border-0 bg-light position-relative ">
                  <div class="wrapper position-relative">
                      <img src="../images/p5.png" class="card-img-top img-fluid main-image" alt="..." id="img9">
                      <div class="w"></div>
                      <div class="z-3 eye">
                          <i class="bi bi-eye-fill"></i>
                      </div>
                  </div>
                  <div class="card-body text-center w-100">
                      <h5 class="card-title">
                          <a href="" class="text-decoration-none text-danger card-title-a">Surf excel Lq</a>
                      </h5>
                      <p class="card-text">
                          <span class="text-decoration-line-through text-secondary">$300</span>
                          <i>$180</i>
                      </p>
                      <button type="button" class="btn btn-outline-secondary text-dark card-body-button">Add To Cart</button>
                  </div>
              </div>
          </div>
      </div>

      <div class="row mb-3 rowone">
          <!-- Card 4 -->
          <div class="col-md-4 mb-2">
              <div class="card border-0 bg-light position-relative ">
                  <div class="wrapper position-relative">
                      <img src="../images/p7.png" class="card-img-top img-fluid main-image" alt="..." id="img10">
                      <div class="w"></div>
                      <div class="z-3 eye">
                          <i class="bi bi-eye-fill"></i>
                      </div>
                  </div>
                  <div class="card-body text-center w-100">
                      <h5 class="card-title">
                          <a href="" class="text-decoration-none text-danger card-title-a">Wooden Spatula</a>
                      </h5>
                      <p class="card-text">
                          <span class="text-decoration-line-through text-secondary">$150</span>
                          <i>$145</i>
                      </p>
                      <button type="button" class="btn btn-outline-secondary text-dark card-body-button">Add To Cart</button>
                  </div>
              </div>
          </div>

          <!-- Card 5 -->
          <div class="col-md-4 mb-2">
              <div class="card border-0 bg-light position-relative ">
                  <div class="wrapper position-relative">
                      <img src="../images/p9.png" class="card-img-top img-fluid main-image" alt="..." id="img11">
                      <div class="w"></div>
                      <div class="z-3 eye">
                          <i class="bi bi-eye-fill"></i>
                      </div>
                  </div>
                  <div class="card-body text-center w-100">
                      <h5 class="card-title">
                          <a href="" class="text-decoration-none text-danger card-title-a">Dry Cleaning Wipes</a>
                      </h5>
                      <p class="card-text">
                          <span class="text-decoration-line-through text-secondary">$280</span>
                          <i>$250</i>
                      </p>
                      <button type="button" class="btn btn-outline-secondary text-dark card-body-button">Add To Cart</button>
                  </div>
              </div>
          </div>

          <!-- Card 6 -->
          <div class="col-md-4 mb-2">
              <div class="card border-0 bg-light position-relative ">
                  <div class="wrapper position-relative">
                      <img src="../images/p11.png" class="card-img-top img-fluid main-image" alt="..." id="img12">
                      <div class="w"></div>
                      <div class="z-3 eye">
                          <i class="bi bi-eye-fill"></i>
                      </div>
                  </div>
                  <div class="card-body text-center w-100">
                      <h5 class="card-title">
                          <a href="" class="text-decoration-none text-danger card-title-a">GARBAGE BAG</a>
                      </h5>
                      <p class="card-text">
                          <span class="text-decoration-line-through text-secondary">$20</span>
                          <i>$15</i>
                      </p>
                      <button type="button" class="btn btn-outline-secondary text-dark card-body-button">Add To Cart</button>
                      <div class="position-absolute top-0 end-0 p-2 text-white text-center z-3">
                          <p class="pone text-center">New</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="row mb-3 rowone">
          <!-- Card 1 -->
          
          <div class="col-md-4 mb-2">
            <div class="card border-0 bg-light position-relative ">
                <div class="wrapper position-relative">
                    <img src="../images/p3.png" class="card-img-top img-fluid main-image" alt="..." id="img8">
                    <div class="w"></div>
                    <div class="z-3 eye">
                        <i class="bi bi-eye-fill"></i>
                    </div>
                </div>
                <div class="card-body text-center w-100">
                    <h5 class="card-title">
                        <a href="" class="text-decoration-none text-danger card-title-a">Dry Bucket Mop</a>
                    </h5>
                    <p class="card-text">
                        <span class="text-decoration-line-through text-secondary">$960</span>
                        <i>$920</i>
                    </p>
                    <button type="button" class="btn btn-outline-secondary text-dark card-body-button">Add To Cart</button>
                </div>
                <div class="position-absolute top-0 end-0 p-2 text-white text-center z-3">
                    <p class="pone text-center">New</p>
                </div>
            </div>
        </div>
          <!-- Card 2 -->
         
          <div class="col-md-4 mb-2">
            <div class="card border-0 bg-light position-relative ">
                <div class="wrapper position-relative">
                    <img src="../images/p5.png" class="card-img-top img-fluid main-image" alt="..." id="img9">
                    <div class="w"></div>
                    <div class="z-3 eye">
                        <i class="bi bi-eye-fill"></i>
                    </div>
                </div>
                <div class="card-body text-center w-100">
                    <h5 class="card-title">
                        <a href="" class="text-decoration-none text-danger card-title-a">Surf excel Lq</a>
                    </h5>
                    <p class="card-text">
                        <span class="text-decoration-line-through text-secondary">$300</span>
                        <i>$180</i>
                    </p>
                    <button type="button" class="btn btn-outline-secondary text-dark card-body-button">Add To Cart</button>
                </div>
            </div>
        </div>

          <!-- Card 3 -->
          <div class="col-md-4 mb-2">
            <div class="card border-0 bg-light position-relative abc">
                <div class="wrapper position-relative">
                    <img src="../images/p1.png" class="card-img-top img-fluid main-image" alt="..." id="img7">
                    <div class="w"></div>
                    <div class="z-3 eye">
                        <i class="bi bi-eye-fill"></i>
                    </div>
                </div>
                <div class="card-body text-center w-100">
                    <h5 class="card-title">
                        <a href="" class="text-decoration-none text-danger card-title-a">Winterwear Liquid</a>
                    </h5>
                    <p class="card-text">
                        <span class="text-decoration-line-through text-secondary">$650</span>
                        <i>$245</i>
                    </p>
                    <button type="button" class="btn btn-outline-secondary text-dark card-body-button">Add To Cart</button>
                </div>
            </div>
        </div>
         
      </div> --}}
  
      </div>
    </div>
   </div>
   <div class="container-fluid p-5 newsletter">
    <div class="row p-2 text-white">
        <div class="col-lg-7 coltwo">
            <div>
                <h2>Newsletter</h2>
            </div>
            <div>Excepteur sint occaecat cupidatat non proident, sunt.</div>
        </div>
        <div class="col-lg-5 pt-2">
            <form action="{{route('pds4.stc')}}" method="POST" class="d-inline w-100">
              @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter email" aria-label="Recipient's username" aria-describedby="button-addon2" name="first_text">
                    <button class="btn btn-outline-secondary bg-danger text-white spantwo border-0" type="submit" id="button-addon2">
                        <i class="bi bi-send ps-1 mx-auto"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection


