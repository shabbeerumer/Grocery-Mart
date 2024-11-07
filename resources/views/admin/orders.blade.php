{{-- @extends('admin_layout.admin_layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="row bg-light">
            <h6>Overall Orders</h6>
            <div class="col-md-3">
                <div class="">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Total Orders</h5>
                            <p class="card-text">37</p>
                            <p class="card-text">Last 7 days</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Total Received</h5>
                            <div class="d-inline-flex align-items-start  ">
                                <div class="">
                                    <p class="card-text">32</p>
                                    <p class="card-text">Last 7 days</p>
                                </div>
                                <div class="ms-md-5">
                                    <div class="card-text ms-3">
                                        <p>₹25000</p></div>
                                    <div class="card-text ms-3">
                                        <p>Revenue</p></div>
                                </div>
                               

                            </div>
                           

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Total Returned</h5>
                            <div class="d-inline-flex align-items-start  ">
                                <div class="">
                                    <p class="card-text">5</p>
                                    <p class="card-text">Last 7 days</p>
                                </div>
                                <div class="ms-md-5">
                                    <div class="card-text">
                                        <p>₹25000</p></div>
                                    <div class="card-text ms-3">
                                        <p>Cost</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">On the way</h5>
                            <div class="d-inline-flex align-items-start  ">
                                <div class="">
                                    <p class="card-text">12</p>
                                    <p class="card-text">Ordered</p>
                                </div>
                                <div class="ms-md-5">
                                    <div class="card-text">
                                        <p>₹ 2356</p></div>
                                    <div class="card-text ms-3">
                                        <p>Cost</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="d-inline-flex justify-content-between align-items-center">
            <div class="">
                <h6>Orders</h6>
            </div>
            <div class="">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Product</button>
                <button type="button" class="btn btn-primary bg-light text-dark btn-outline-dark">Filters</button>
                <button type="button" class="btn btn-primary bg-light text-dark btn-outline-dark">Order History</button>

            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="addProductModalLabel">New Order</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form>
                       
                        <div class="mb-3">
                          <label for="productName" class="form-label">Product Name</label>
                          <input type="text" class="form-control" id="productName" placeholder="Enter product name">
                        </div>
                        <div class="mb-3">
                          <label for="productId" class="form-label">Product ID</label>
                          <input type="text" class="form-control" id="productId" placeholder="Enter product ID">
                        </div>
                        <div class="mb-3">
                            <label for="productId" class="form-label">Category</label>
                            <input type="text" class="form-control" id="productId" placeholder="Select product category">
                          </div>
                        <div class="mb-3">
                            <label for="productId" class="form-label">Order valiue</label>
                            <input type="text" class="form-control" id="productId" placeholder="Enter order value">
                          </div>
                          <div class="mb-3">
                            <label for="productId" class="form-label">Quantity</label>
                            <input type="text" class="form-control" id="productId" placeholder="Enter product quantity">
                          </div>
                          <div class="mb-3">
                            <label for="productId" class="form-label">Unit</label>
                            <input type="text" class="form-control" id="productId" placeholder="Enter product unit">
                          </div>
                          <div class="mb-3">
                            <label for="productId" class="form-label">Buying price</label>
                            <input type="text" class="form-control" id="productId" placeholder="Enter buying price">
                          </div>
                         
                          <div class="mb-3">
                            <label for="productId" class="form-label">Date of delivery</label>
                            <input type="text" class="form-control" id="productId" placeholder="Enter date of delivery">
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Notify on the date of delivery
                            </label>
                          </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
                      <button type="button" class="btn btn-primary">Add Product</button>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <table class="table mt-2 table-responsive">
            <thead>
              <tr>
                <th scope="col">Products</th>
                <th scope="col">Order Value</th>
                <th scope="col">Quantity</th>
                <th scope="col">Order ID</th>
                <th scope="col">Expected Delivery</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Maggi</th>
                <td>₹4306</td>
                <td>43 Packets</td>
                <td>7535</td>
                <td>11/12/22</td>
                <td>Delayed</td>

              </tr>
              <tr>
                <th scope="row">Bru</th>
                <td>₹2557</td>
                <td>22 Packets</td>
                <td>5724</td>
                <td>21/12/22</td>
                <td>Confirmed</td>
              </tr>
              <tr>
                <th scope="row">Red Bull</th>
                <td>₹4075</td>
                <td>36 Packets</td>
                <td>2775</td>
                <td>5/12/22</td>
                <td>Returned</td>
            </tbody>
          </table>
    </div>
</div>


@endsection --}}
@extends('admin_layout.admin_layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2 class="mt-4 mb-3">Overall Orders</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-4">
                <div class="col">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h5 class="card-title">Total Orders</h5>
                            <p class="card-text">
                                <span class="display-4">37</span><br>
                                <small class="text-muted">Last 7 days</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h5 class="card-title">Total Received</h5>
                            <p class="card-text">
                                <span class="display-4">32</span><br>
                                <small class="text-muted">Last 7 days</small><br>
                                <small class="text-success">₹25000 Revenue</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h5 class="card-title">Total Returned</h5>
                            <p class="card-text">
                                <span class="display-4">5</span><br>
                                <small class="text-muted">Last 7 days</small><br>
                                <small class="text-danger">₹25000 Cost</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h5 class="card-title">On the way</h5>
                            <p class="card-text">
                                <span class="display-4">12</span><br>
                                <small class="text-muted">Ordered</small><br>
                                <small class="text-info">₹2356 Cost</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="d-md-flex justify-content-between align-items-center mb-3">
                <h2>Orders</h2>
                <div>
                    <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#addOrderModal">Add Product</button>
                    <button type="button" class="btn btn-outline-secondary me-2">Filters</button>
                    <button type="button" class="btn btn-outline-secondary">Order History</button>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Products</th>
                            <th>Order Value</th>
                            <th>Quantity</th>
                            <th>Order ID</th>
                            <th>Expected Delivery</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Maggi</td>
                            <td>₹4306</td>
                            <td>43 Packets</td>
                            <td>7535</td>
                            <td>11/12/22</td>
                            <td><span class="badge bg-warning">Delayed</span></td>
                        </tr>
                        <tr>
                            <td>Bru</td>
                            <td>₹2557</td>
                            <td>22 Packets</td>
                            <td>5724</td>
                            <td>21/12/22</td>
                            <td><span class="badge bg-success">Confirmed</span></td>
                        </tr>
                        <tr>
                            <td>Red Bull</td>
                            <td>₹4075</td>
                            <td>36 Packets</td>
                            <td>2775</td>
                            <td>5/12/22</td>
                            <td><span class="badge bg-danger">Returned</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add Order Modal -->
<div class="modal fade" id="addOrderModal" tabindex="-1" aria-labelledby="addOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addOrderModalLabel">New Order</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="productName" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="productName" placeholder="Enter product name">
                    </div>
                    <div class="mb-3">
                        <label for="productId" class="form-label">Product ID</label>
                        <input type="text" class="form-control" id="productId" placeholder="Enter product ID">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <input type="text" class="form-control" id="category" placeholder="Select product category">
                    </div>
                    <div class="mb-3">
                        <label for="orderValue" class="form-label">Order Value</label>
                        <input type="text" class="form-control" id="orderValue" placeholder="Enter order value">
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="text" class="form-control" id="quantity" placeholder="Enter product quantity">
                    </div>
                    <div class="mb-3">
                        <label for="unit" class="form-label">Unit</label>
                        <input type="text" class="form-control" id="unit" placeholder="Enter product unit">
                    </div>
                    <div class="mb-3">
                        <label for="buyingPrice" class="form-label">Buying Price</label>
                        <input type="text" class="form-control" id="buyingPrice" placeholder="Enter buying price">
                    </div>
                    <div class="mb-3">
                        <label for="deliveryDate" class="form-label">Date of Delivery</label>
                        <input type="date" class="form-control" id="deliveryDate">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="notifyDelivery">
                        <label class="form-check-label" for="notifyDelivery">
                            Notify on the date of delivery
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
                <button type="button" class="btn btn-primary">Add Product</button>
            </div>
        </div>
    </div>
</div>
@endsection