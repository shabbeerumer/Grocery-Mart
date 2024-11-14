@extends('admin_layout.admin_layout')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h2 class="mt-4 mb-3">Overall Inventory</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-4">
          <div class="col">
            <div class="card ">
              <div class="card-body">
                <h5 class="card-title">Categories</h5>
                <p class="card-text">
                  <span class="display-4">14</span><br>
                  <small class="text-muted">Last 7 days</small>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card ">
              <div class="card-body">
                <h5 class="card-title">Total Products</h5>
                <p class="card-text">
                  <span class="display-4">868</span><br>
                  <small class="text-muted">Last 7 days</small><br>
                  <small class="text-success">₹25000 Revenue</small>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card ">
              <div class="card-body">
                <h5 class="card-title">Top Selling</h5>
                <p class="card-text">
                  <span class="display-4">5</span><br>
                  <small class="text-muted">Last 7 days</small><br>
                  <small class="text-info">₹2500 Cost</small>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card ">
              <div class="card-body">
                <h5 class="card-title">Low Stocks</h5>
                <p class="card-text">
                  <span class="display-4">12</span><br>
                  <small class="text-muted">Ordered</small><br>
                  <small class="text-danger">2 Not in stock</small>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="row">
      <div class="col-12">
        <h2 class="mb-3">Products</h2>
        <div class="d-flex justify-content-between mb-3">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">Add Product</button>
          <div>
            <button class="btn btn-outline-secondary me-2">Filters</button>
            <button class="btn btn-outline-secondary">Download all</button>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>Products</th>
                <th>Buying Price</th>
                <th>Quantity</th>
                <th>Threshold Value</th>
                <th>Expiry Date</th>
                <th>Availability</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a href="{{route('product_info.index')}}" class="text-decoration-none text-dark">Maggi</a></td>
                <td>₹430</td>
                <td>43 Packets</td>
                <td>12 Packets</td>
                <td>11/12/22</td>
                <td><span class="badge bg-success">In-stock</span></td>
              </tr>
              <tr>
                <td>Bru</td>
                <td>₹257</td>
                <td>22 Packets</td>
                <td>12 Packets</td>
                <td>21/12/22</td>
                <td><span class="badge bg-danger">Out of stock</span></td>
              </tr>
              <!-- Add more rows here -->
            </tbody>
          </table>
        </div>
        <nav aria-label="Product table navigation">
          <ul class="pagination justify-content-between">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item disabled"><span class="page-link">Page 1 of 10</span></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  
  <!-- Add Product Modal -->
  <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addProductModalLabel">New Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="productImage" class="form-label">Browse image</label>
              <input class="form-control" type="file" id="productImage">
            </div>
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
                <label for="productId" class="form-label">Buying Price</label>
                <input type="text" class="form-control" id="productId" placeholder="Enter buying price">
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
                <label for="productId" class="form-label">Expiry Date</label>
                <input type="text" class="form-control" id="productId" placeholder="Enter expiry date">
              </div>
              <div class="mb-3">
                <label for="productId" class="form-label">Threshold Value</label>
                <input type="text" class="form-control" id="productId" placeholder="Enter threshold value">
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
