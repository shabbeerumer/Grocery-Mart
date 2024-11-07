@extends('admin_layout.admin_layout')

@section('content')

<div class="container-fluid bg-light">
    <div class="row bg-white p-2">
        <div class="d-md-flex justify-content-between align-items-center mb-3">
            <div class="">
                <h5>Maggi</h5>
            </div>
            <div class="">
                <button type="button" class="btn btn-primary bg-transparent text-dark btn-outline-secondary">
                    <i class="bi bi-pencil-fill"></i>
                    Edit</button>
                <button type="button" class="btn btn-primary bg-transparent text-dark btn-outline-secondary">Download</button>
            </div>
        </div>
        <div class="col-md-8">
            
            <ul class="nav nav-underline mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active text-success" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Overiew</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Purchases</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Adjustments</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" >History</button>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                    <h5>Primary Details</h5>
                    <div class="d-md-flex justify-content-between align-items-center mt-3 mb-3">
                     <div class=""><h6>Product Name</h6></div>
                     <div class="">
                         Maggi
                     </div>
                    </div>
                    <div class="d-md-flex justify-content-between align-items-center mt-3 mb-3">
                        <div class=""><h6>Product ID</h6></div>
                        <div class="">
                            456567
                        </div>
                       </div>
                       <div class="d-md-flex justify-content-between align-items-center mt-3 mb-3">
                        <div class=""><h6>Product category</h6></div>
                        <div class="">
                            Instant food
                        </div>
                       </div>
                       <div class="d-md-flex justify-content-between align-items-center mt-3 mb-3">
                        <div class=""><h6>Expiry Date</h6></div>
                        <div class="">
                            13/4/23
                        </div>
                       </div>
                       <div class="d-md-flex justify-content-between align-items-center mt-3 mb-3">
                        <div class=""><h6>Threshold Value</h6></div>
                        <div class="">
                            12
                        </div>
                       </div>
               
                       <h5>Supplier Details</h5>
                       <div class="d-md-flex justify-content-between align-items-center mt-3 mb-3">
                        <div class=""><h6>Supplier name</h6></div>
                        <div class="">
                            Ronald Martin
                        </div>
                       </div>
                       <div class="d-md-flex justify-content-between align-items-center mt-3 mb-3">
                        <div class=""><h6>Contact Number</h6></div>
                        <div class="">
                            98789 86757
                        </div>
                       </div>
                       <h5>Stock Locations</h5>
                       <div class="d-md-flex justify-content-between align-items-center mt-3 mb-3">
                        <div class=""><h6>Store Name</h6></div>
                        <div class="">
                            Stock in hand
                        </div>
                       </div>
                       <div class="d-md-flex justify-content-between align-items-center mt-3 mb-3">
                        <div class=""><h6>Sulur Branch</h6></div>
                        <div class="text-primary">
                            15
                        </div>
                       </div>
                       <div class="d-md-flex justify-content-between align-items-center mt-3 mb-3">
                        <div class=""><h6>Singanallur Branch</h6></div>
                        <div class="text-primary">
                            19
                        </div>
                       </div>
                    </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
              </div>
          
        </div>
        <div class="col-md-4">
            <div class="d-flex justify-content-center align-items-center">
                <div class="p-1" style="border: 1px dashed gray;">
                    <img src="{{asset('images/266160_20-maggi-masala-instant-noodles-vegetarian 1.png')}}" alt="">
                </div>
            </div>
            <div class="d-md-flex justify-content-between align-items-center mt-3 mb-3">
                <div class=""><h6>Opening Stock</h6></div>
                <div class="">
                    40
                </div>
               </div>
               <div class="d-md-flex justify-content-between align-items-center mt-3 mb-3">
                <div class=""><h6>Remaining  Stock</h6></div>
                <div class="">
                    34
                </div>
               </div>
               <div class="d-md-flex justify-content-between align-items-center mt-3 mb-3">
                <div class=""><h6>On the way</h6></div>
                <div class="">
                    15
                </div>
               </div>
               <div class="d-md-flex justify-content-between align-items-center mt-3 mb-3">
                <div class=""><h6>Threshold value</h6></div>
                <div class="">
                    12
                </div>
               </div>
        </div>
</div>
</div>
@endsection
