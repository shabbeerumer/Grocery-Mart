
 @extends('layout.layout')

@section('content')
   
       <div class="banner">
        <div class="container containerone">
          <h2 class=" text-white ">
            Top Selling
            <br>
            <span class="text-danger spanone ">Kitchen Products</span>
            <br>
            Flat
            <i>25% Discount</i>
          </h2>
        </div>
       </div>
        
       <div class="container-fluid  p-2">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="#" class="text-decoration-none breadcrumb-item-a">Home</a></li>
            <li class="breadcrumb-item active breadcrumb-item-li" aria-current="page">Product 1</li>
          </ol>
        </nav>
       </div>
       
       <div class="container">
        <div class="row " >
          <div class="col-md-4 ">
            <div class="">
              <div class="mb-3 ">
                <h3 class="h3one">
                 {{-- ---  --}}
                 Categories
                </h3>
                <div class="">
                  <div class="card divone" >
                    <div class="card-body">
                     <ul>
                      <li class="lione"><a href="" class="aone">
                        Ready Meal & Mixes
                      </a></li>
                      <li class="lione"><a href="" class="aone">
                        Food Combo</a></li>
                      <li class="lione"><a href="" class="aone">
                        Kitchen Tools  
                      </a></li>
                      <li class="lione"><a href="" class="aone">
                        Cookware  
                      </a></li>
                      <li class="lione"><a href="" class="aone">
                        Outdoor Cooking  
                      </a></li>
                      <li class="lione"><a href="" class="aone">
                      Hand Juicers  
                      </a></li>
                      <li class="lione"><a href="" class="aone">
                        Chocolates  
                        </a></li>
                        <li class="lione"><a href="" class="aone">
                          Dry Fruit, Nut & Seed 
                          </a></li>
                     </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <h3 class="h3one">
                  Brand
                </h3>
                <div class="">
                  <div class="card divone" >
                    <div class="card-body">
                     <ul>
                      <li class="lione">
                        <input type="checkbox">
  
                        <a href="" class="aone ms-1">
                          ADILAID
                      </a></li>
                      <li class="lione">
                        <input type="checkbox">
  
                        <a href="" class="aone  ms-1">
                        American Garden</a></li>
                      <li class="lione">
                        <input type="checkbox">
  
                        <a href="" class="aone  ms-1">
                        Being Bania  
                      </a></li>
                      <li class="lione">
                        <input type="checkbox">
  
                        <a href="" class="aone  ms-1">
                        BudhRam  
                      </a></li>
                      <li class="lione">
                        <input type="checkbox">
  
                        <a href="" class="aone  ms-1">
                        Aachi 
                      </a></li>
                      <li class="lione">
                        <input type="checkbox">
  
                        <a href="" class="aone  ms-1">
                        Daily Food 
                      </a></li>
                     
                     </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <h3 class="h3one ">
                  Price
                </h3>
                <div class="">
                  <div class="card divone" >
                    <div class="card-body">
                     <ul>
                      <li class="lione">
                        <input type="checkbox">
  
                        <a href="" class="aone ms-1">
                          Below $ 100
                      </a></li>
                      <li class="lione">
                        <input type="checkbox">
  
                        <a href="" class="aone  ms-1">
                          $ 100-500</a></li>
                      <li class="lione">
                        <input type="checkbox">
  
                        <a href="" class="aone  ms-1">
                          $ 1k-10k 
                      </a></li>
                      <li class="lione">
                        <input type="checkbox">
  
                        <a href="" class="aone  ms-1">
                          $ 10k-20k
                      </a></li>
                      <li class="lione">
                        <input type="checkbox">
  
                        <a href="" class="aone  ms-1">
                          $ Above 20k 
                      </a></li>
                     
                     
                     </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         
          </div>
          <div class="col-md-8">
            <div class="row">
              <div class="col-lg-6 mb-2">
                <div class="card text-bg-dark">
                  <img src="../images/pbg1.jpg" class="card-img" alt="...">
                  <div class="card-img-overlay text-end p-5 ">
                    <h3 class="card-title me-5">Best</h3>
                    <h4 class="card-text me-5 text-danger" >Price</h4>
                    <h6 class="card-text">on Vegetable</h6>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card text-bg-dark">
                  <img src="../images/pbg2.jpg" class="card-img" alt="...">
                  <div class="card-img-overlay text-start mt-md-5">
                    <h3 class="card-title me-5">Best Deals
                    </h3>
                    <h4 class="card-text me-5 text-danger" >For New
                    </h4>
                    <h6 class="card-text">Products</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-lg-8 col-md-6">
                <h4 class="">Showing Results: 0-1</h4>
              </div>
              <div class="col-lg-4 col-md-6 ">
                <div class="">
                  <select name="" id="" class="p-2">
                    <option value="">Default sorting</option>
                    <option value="">Sort by popularity</option>
                    <option value="">Sort by average rating</option>
                    <option value="">Sort by newness</option>
                    <option value="">Sort by price: low to high</option>
                    <option value="">Sort by price: high to low</option>
  
                  </select>
                </div>
             
              </div>
            </div>
            <div class="row mb-3 rowone">
              <!-- Card 1 -->
              <div class="col-md-4 mb-2">
                  <div class="card border-0 bg-light position-relative abc">
                      <div class="wrapper position-relative">
                          <img src="../images/pp1.png" class="card-img-top img-fluid main-image" alt="..." id="img1">
                          <div class="w"></div>
                          <div class="z-3 eye">
                              <i class="bi bi-eye-fill"></i>
                          </div>
                      </div>
                      <div class="card-body text-center w-100">
                          <h5 class="card-title">
                              <a href="" class="text-decoration-none text-danger card-title-a">Red Chilli Powder</a>
                          </h5>
                          <p class="card-text">
                              <span class="text-decoration-line-through text-secondary">$280</span>
                              <i>$180</i>
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
                  <div class="card border-0 bg-light position-relative abc">
                      <div class="wrapper position-relative">
                          <img src="../images/pp3.png" class="card-img-top img-fluid main-image" alt="..." id="img2">
                          <div class="w"></div>
                          <div class="z-3 eye">
                              <i class="bi bi-eye-fill"></i>
                          </div>
                      </div>
                      <div class="card-body text-center w-100">
                          <h5 class="card-title">
                              <a href="" class="text-decoration-none text-danger card-title-a">Fortune Rice</a>
                          </h5>
                          <p class="card-text">
                              <span class="text-decoration-line-through text-secondary">$30</span>
                              <i>$25</i>
                          </p>
                          <button type="button" class="btn btn-outline-secondary text-dark card-body-button">Add To Cart</button>
                      </div>
                  </div>
              </div>
  
              <!-- Card 3 -->
              <div class="col-md-4 mb-2">
                  <div class="card border-0 bg-light position-relative abc">
                      <div class="wrapper position-relative">
                          <img src="../images/pp5.png" class="card-img-top img-fluid main-image" alt="..." id="img3">
                          <div class="w"></div>
                          <div class="z-3 eye">
                              <i class="bi bi-eye-fill"></i>
                          </div>
                      </div>
                      <div class="card-body text-center w-100">
                          <h5 class="card-title">
                              <a href="" class="text-decoration-none text-danger card-title-a">Freedom Oil</a>
                          </h5>
                          <p class="card-text">
                              <span class="text-decoration-line-through text-secondary">$950</span>
                              <i>$810</i>
                          </p>
                          <button type="button" class="btn btn-outline-secondary text-dark card-body-button">Add To Cart</button>
                      </div>
                  </div>
              </div>
          </div>
  
          <div class="row mb-3 rowone">
              <!-- Card 4 -->
              <div class="col-md-4 mb-2">
                  <div class="card border-0 bg-light position-relative abc">
                      <div class="wrapper position-relative">
                          <img src="../images/pp7.png" class="card-img-top img-fluid main-image" alt="..." id="img4">
                          <div class="w"></div>
                          <div class="z-3 eye">
                              <i class="bi bi-eye-fill"></i>
                          </div>
                      </div>
                      <div class="card-body text-center w-100">
                          <h5 class="card-title">
                              <a href="" class="text-decoration-none text-danger card-title-a">Lipton Green Tea</a>
                          </h5>
                          <p class="card-text">
                              <span class="text-decoration-line-through text-secondary">$32</span>
                              <i>$29</i>
                          </p>
                          <button type="button" class="btn btn-outline-secondary text-dark card-body-button">Add To Cart</button>
                      </div>
                  </div>
              </div>
  
              <!-- Card 5 -->
              <div class="col-md-4 mb-2">
                  <div class="card border-0 bg-light position-relative abc">
                      <div class="wrapper position-relative">
                          <img src="../images/pp9.png" class="card-img-top img-fluid main-image" alt="..." id="img5">
                          <div class="w"></div>
                          <div class="z-3 eye">
                              <i class="bi bi-eye-fill"></i>
                          </div>
                      </div>
                      <div class="card-body text-center w-100">
                          <h5 class="card-title">
                              <a href="" class="text-decoration-none text-danger card-title-a">Amul Wheat Atta</a>
                          </h5>
                          <p class="card-text">
                              <span class="text-decoration-line-through text-secondary">$450</span>
                              <i>$425</i>
                          </p>
                          <button type="button" class="btn btn-outline-secondary text-dark card-body-button">Add To Cart</button>
                      </div>
                      <div class="position-absolute top-0 end-0 p-2 text-white text-center z-3">
                          <p class="pone text-center">New</p>
                      </div>
                  </div>
              </div>
  
              <!-- Card 6 -->
              <div class="col-md-4 mb-2">
                  <div class="card border-0 bg-light position-relative abc">
                      <div class="wrapper position-relative">
                          <img src="../images/pp11.png" class="card-img-top img-fluid main-image" alt="..." id="img6">
                          <div class="w"></div>
                          <div class="z-3 eye">
                              <i class="bi bi-eye-fill"></i>
                          </div>
                      </div>
                      <div class="card-body text-center w-100">
                          <h5 class="card-title">
                              <a href="" class="text-decoration-none text-danger card-title-a">MOTHER'S Mango Pickle</a>
                          </h5>
                          <p class="card-text">
                              <span class="text-decoration-line-through text-secondary">$30</span>
                              <i>$22</i>
                          </p>
                          <button type="button" class="btn btn-outline-secondary text-dark card-body-button">Add To Cart</button>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row mb-3 rowone">
            <!-- Card 1 -->
            <div class="col-md-4 mb-2">
              <div class="card border-0 bg-light position-relative abc">
                  <div class="wrapper position-relative">
                      <img src="../images/pp4.png" class="card-img-top img-fluid main-image" alt="..." id="img2">
                      <div class="w"></div>
                      <div class="z-3 eye">
                          <i class="bi bi-eye-fill"></i>
                      </div>
                  </div>
                  <div class="card-body text-center w-100">
                      <h5 class="card-title">
                          <a href="" class="text-decoration-none text-danger card-title-a">Fortune Rice</a>
                      </h5>
                      <p class="card-text">
                          <span class="text-decoration-line-through text-secondary">$30</span>
                          <i>$25</i>
                      </p>
                      <button type="button" class="btn btn-outline-secondary text-dark card-body-button">Add To Cart</button>
                  </div>
              </div>
          </div>
           

            <!-- Card 2 -->
            <div class="col-md-4 mb-2">
              <div class="card border-0 bg-light position-relative abc">
                  <div class="wrapper position-relative">
                      <img src="../images/pp2.png" class="card-img-top img-fluid main-image" alt="..." id="img1">
                      <div class="w"></div>
                      <div class="z-3 eye">
                          <i class="bi bi-eye-fill"></i>
                      </div>
                  </div>
                  <div class="card-body text-center w-100">
                      <h5 class="card-title">
                          <a href="" class="text-decoration-none text-danger card-title-a">Red Chilli Powder</a>
                      </h5>
                      <p class="card-text">
                          <span class="text-decoration-line-through text-secondary">$280</span>
                          <i>$180</i>
                      </p>
                      <button type="button" class="btn btn-outline-secondary text-dark card-body-button">Add To Cart</button>
                  </div>
                  <div class="position-absolute top-0 end-0 p-2 text-white text-center z-3">
                      <p class="pone text-center">New</p>
                  </div>
              </div>
          </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-2">
                <div class="card border-0 bg-light position-relative abc">
                    <div class="wrapper position-relative">
                        <img src="../images/pp5.png" class="card-img-top img-fluid main-image" alt="..." id="img3">
                        <div class="w"></div>
                        <div class="z-3 eye">
                            <i class="bi bi-eye-fill"></i>
                        </div>
                    </div>
                    <div class="card-body text-center w-100">
                        <h5 class="card-title">
                            <a href="" class="text-decoration-none text-danger card-title-a">Freedom Oil</a>
                        </h5>
                        <p class="card-text">
                            <span class="text-decoration-line-through text-secondary">$950</span>
                            <i>$810</i>
                        </p>
                        <button type="button" class="btn btn-outline-secondary text-dark card-body-button">Add To Cart</button>
                    </div>
                </div>
            </div>
        </div>
            {{-- <div class="row mb-3  rowone mt-2">
              <div class="col-md-4 mb-2">
                <div class="card border-0 bg-light position-relative abc">
                  <div class="wrapper position-relative">
                    <img src="../images/pp1.png" class="card-img-top img-fluid main-image" alt="..." id="img">
                    <div class="w"></div>
                    <div class="z-3 eye">
                      <i class="bi bi-eye-fill"></i>
                    </div>
                  </div>
                  <div class="card-body text-center w-100">
                    <h5 class="card-title">
                      <a href="" class="text-decoration-none text-danger card-title-a">Red Chilli Powder</a>
                    </h5>
                    <p class="card-text">
                      <span class="text-decoration-line-through text-secondary">$280</span>
                      <i>$180</i>
                    </p>
                    <button type="button" class="btn btn-outline-secondary text-dark card-body-button">Add To Cart</button>
                  </div>
                  <div class="position-absolute top-0 end-0 p-2 text-white text-center z-3">
                    <p class="pone text-center">New</p>
                  </div>
                </div>
                
                
                
                
                
                
              </div>
              <div class="col-md-4 mb-2">
                <div class="card border-0 bg-light" >
                  <div class="">
                    <img src="../images/pp3.png" class="card-img-top img-fluid" alt="...">

                  </div>
                  <div class="card-body text-center">
                    <h5 class="card-title">
                      <a href="" class="text-decoration-none text-danger card-title-a">Fortune Rice</a></h5>
                    <p class="card-text">
                      <span class="text-decoration-line-through text-secondary">$30</span>
                      <i>$25</i>
                    </p>
                    <button type="button" class="btn btn-outline-secondary text-dark card-body-button">Add To Cart</button>
                  </div>
                
                </div>
              </div>
              <div class="col-md-4 mb-2">
                <div class="card border-0 bg-light" >
                  <div class="">
                    <img src="../images/pp5.png" class="card-img-top img-fluid" alt="...">

                  </div>
                  <div class="card-body text-center">
                    <h5 class="card-title">
                     
                      <a href="" class="text-decoration-none text-danger card-title-a"> Freedom Oil</a></h5>
                    <p class="card-text">
                      <span class="text-decoration-line-through text-secondary">$950</span>
                      <i> $810</i>
                    </p>
                    <button type="button" class="btn btn-outline-secondary text-dark card-body-button">Add To Cart</button>
                  </div>
                 
                </div>
              </div>
            </div>
            <div class="row mb-3 rowone">
             
              <div class="col-md-4 mb-2">
                <div class="card border-0 bg-light" >
                  <div class="">
                    <img src="../images/pp7.png" class="card-img-top img-fluid" alt="...">

                  </div>
                  <div class="card-body text-center">
                    <h5 class="card-title">
                      <a href="" class="text-decoration-none text-danger card-title-a">Lipton Green Tea</a></h5>
                    <p class="card-text">
                      <span class="text-decoration-line-through text-secondary">$32</span>
                      <i>$29</i>
                    </p>
                    <button type="button" class="btn btn-outline-secondary text-dark card-body-button">Add To Cart</button>
                  </div>
                
                </div>
              </div>
              <div class="col-md-4 mb-2">
                <div class="card border-0 bg-light" >
                  <div class="position-relative">
                    <img src="../images/pp9.png" class="card-img-top img-fluid" alt="...">

                  </div>
                  <div class="card-body text-center">
                    <h5 class="card-title">
                      <a href="" class="text-decoration-none text-danger card-title-a">Amul Wheat Atta</a></h5>
                    <p class="card-text">
                      <span class="text-decoration-line-through text-secondary">$450</span>
                      <i>$425</i>
                    </p>
                    <button type="button" class="btn btn-outline-secondary text-dark card-body-button">Add To Cart</button>
                  </div>
                  <div class="position-absolute top-0 end-0 p-2 text-white text-center z-3">
                    <p class="pone text-center">New</p>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-2">
                <div class="card border-0 bg-light" >
                  <div class="">
                    <img src="../images/pp11.png" class="card-img-top img-fluid" alt="...">

                  </div>
                  <div class="card-body text-center">
                    <h5 class="card-title">
                     
                      <a href="" class="text-decoration-none text-danger card-title-a"> MOTHER'S Mango Pickle</a></h5>
                    <p class="card-text">
                      <span class="text-decoration-line-through text-secondary">$30</span>
                      <i> $22</i>
                    </p>
                    <button type="button" class="btn btn-outline-secondary text-dark card-body-button">Add To Cart</button>
                  </div>
                 
                </div>
              </div>
            </div>
            <div class="row mb-3 rowone">
             
              <div class="col-md-4 mb-2">
                <div class="card border-0 bg-light" >
                  <div class="">
                    <img src="../images/pp3.png" class="card-img-top img-fluid" alt="...">

                  </div>
                  <div class="card-body text-center">
                    <h5 class="card-title">
                      <a href="" class="text-decoration-none text-danger card-title-a">Fortune Rice</a></h5>
                    <p class="card-text">
                      <span class="text-decoration-line-through text-secondary">$30</span>
                      <i>$25</i>
                    </p>
                    <button type="button" class="btn btn-outline-secondary text-dark card-body-button">Add To Cart</button>
                  </div>
                
                </div>
              </div>
              <div class="col-md-4 mb-2">
                <div class="card border-0 bg-light" >
                  <div class="position-relative">
                    <img src="../images/pp1.png" class="card-img-top img-fluid" alt="...">

                  </div>
                  <div class="card-body text-center">
                    <h5 class="card-title">
                      <a href="" class="text-decoration-none text-danger card-title-a">Red Chilli Powder</a></h5>
                    <p class="card-text">
                      <span class="text-decoration-line-through text-secondary">$280</span>
                      <i>$180</i>
                    </p>
                    <button type="button" class="btn btn-outline-secondary text-dark card-body-button">Add To Cart</button>
                  </div>
                  <div class="position-absolute top-0 end-0 p-2 text-white text-center z-3">
                    <p class="pone text-center">New</p>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-2">
                <div class="card border-0 bg-light" >
                  <div class="">
                    <img src="../images/pp5.png" class="card-img-top img-fluid" alt="...">

                  </div>
                  <div class="card-body text-center">
                    <h5 class="card-title">
                     
                      <a href="" class="text-decoration-none text-danger card-title-a"> Freedom Oil</a></h5>
                    <p class="card-text">
                      <span class="text-decoration-line-through text-secondary">$950</span>
                      <i> $810</i>
                    </p>
                    <button type="button" class="btn btn-outline-secondary text-dark card-body-button">Add To Cart</button>
                  </div>
                 
                </div>
              </div>
            </div> --}}
          </div>
        </div>
       </div>
       <div class="container-fluid newsletter p-5">
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
                <i class="bi bi-send ps-1 pe-1 mx-auto"></i>
              </span>
            </div>
          </div>
        </div>
       </div>

       @endsection
       
      
   
     