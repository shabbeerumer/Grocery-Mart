
<div class="container ">
    <div class="d-flex justify-content-between  p-3">
            <div class="pt-2">
              <i class="bi bi-person   fs-4 rounded-circle"></i>
            </div>
            <div class="text-center mx-auto ">
                <div >
                    <h1 >Grocery Mart</h1>
                </div>
                <div class="">
                    <h6 class="">Online Grocery Shopping</h6>
                </div>
              
            </div>
            <div class=" pt-2 pe-2 " >
                <div class="">
                    <i class="bi bi-search   fs-4 rounded-circle"></i>
                </div>
            </div>
            <div class="pt-2 ps-2">
                <div class="">
                    <i class="bi bi-bag-fill  text-danger  fs-4 rounded-circle"></i>
                </div>
                
            </div>
           
      
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto pt-2">
          <li class="nav-item ">
            <a class="nav-link active  " aria-current="page" href="{{route('home.index')}}">HOME</a>
          </li>
        
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                PRODUCTS
            </a>
            <ul class="dropdown-menu list-unstyled dropdownmenuone" >
                <div class="row ">
                    <div class="col-lg-4">
                        <ul class="list-unstyled m-0 p-0">
                            <h6 class="ps-3">Kitchen</h6>
                            <li><a class="dropdown-item" href="{{route('meat.index')}}">Meat & Seafood</a></li>
                            <li><a class="dropdown-item" href="#">Snack Foods 
                                <span>New</span>    
                            </a></li>
                            <li><a class="dropdown-item" href="#">Oils, Vinegars</a></li>
                            <li><a class="dropdown-item" href="#">Pasta & Noodles 
                                <span>New</span>    
                            </a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <ul class="list-unstyled m-0 p-0">
                            <h6 class="ps-3">Household</h6>
                            <li><a class="dropdown-item" href="{{route('Detergents.index')}}">
                              Detergents</a></li>
                            <li><a class="dropdown-item" href="#">Floor & Other Cleaners 
                             
                            </a></li>
                            <li><a class="dropdown-item" href="#">Pet Care
                              <span>New</span>   
                            </a></li>
                            <li><a class="dropdown-item" href="#">Festive Decoratives 
                            </a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 m-0 p-0">
                      <div class="ms-3">
                        <h4>30%
                          <span class="text-danger"> Off/- </span>
                            
                        </h4>
                        <div class="">
                          <img src="{{asset('images/nav.png')}}" alt="" class="img-fluid">

                        </div>
                      </div>
                    </div>
                </div>
            </ul>
        </li>
        
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">ABOUT US</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                PAGES
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Blog Posts</a></li>
              <li><a class="dropdown-item" href="#">Blog Single</a></li>
              <li><a class="dropdown-item" href="#">Single</a></li>
              <li><a class="dropdown-item" href="#">Faq's</a></li>
              <li><a class="dropdown-item" href="#">Shortcodes</a></li>


            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">CONTACT US</a>
          </li>
        </ul>
      </div>
      <div class="lightordark pe-2 pb-2 text-white" id="lightordark">
        <i class="bi bi-moon-fill"></i>
      </div>
    </div>
  </nav>