@extends('admin_layout.admin_layout')

@section('content')
<div class="row">
    <!-- Sales Overview -->
    <div class="col-md-6 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Sales Overview</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-3 text-center">
                        <i class="bi bi-currency-dollar text-primary fs-4"></i>
                        <h4>₹ 832</h4>
                        <p class="text-muted mb-0">Sales</p>
                    </div>
                    <div class="col-3 text-center">
                        <i class="bi bi-graph-up text-success fs-4"></i>
                        <h4>₹ 18,300</h4>
                        <p class="text-muted mb-0">Revenue</p>
                    </div>
                    <div class="col-3 text-center">
                        <i class="bi bi-piggy-bank text-warning fs-4"></i>
                        <h4>₹ 868</h4>
                        <p class="text-muted mb-0">Profit</p>
                    </div>
                    <div class="col-3 text-center">
                        <i class="bi bi-cash-stack text-danger fs-4"></i>
                        <h4>₹ 17,432</h4>
                        <p class="text-muted mb-0">Cost</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Inventory Summary -->
    <div class="col-md-6 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Inventory Summary</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6 text-center">
                        <i class="bi bi-box text-warning fs-4"></i>
                        <h4>868</h4>
                        <p class="text-muted mb-0">Quantity in Hand</p>
                    </div>
                    <div class="col-6 text-center">
                        <i class="bi bi-truck text-info fs-4"></i>
                        <h4>200</h4>
                        <p class="text-muted mb-0">To be received</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Purchase Overview -->
    <div class="col-md-6 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Purchase Overview</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-3 text-center">
                        <i class="bi bi-bag text-primary fs-4"></i>
                        <h4>82</h4>
                        <p class="text-muted mb-0">Purchase</p>
                    </div>
                    <div class="col-3 text-center">
                        <i class="bi bi-cash text-success fs-4"></i>
                        <h4>₹ 13,573</h4>
                        <p class="text-muted mb-0">Cost</p>
                    </div>
                    <div class="col-3 text-center">
                        <i class="bi bi-x-circle text-danger fs-4"></i>
                        <h4>5</h4>
                        <p class="text-muted mb-0">Cancel</p>
                    </div>
                    <div class="col-3 text-center">
                        <i class="bi bi-arrow-return-left text-warning fs-4"></i>
                        <h4>₹ 17,432</h4>
                        <p class="text-muted mb-0">Return</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Summary -->
    <div class="col-md-6 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Product Summary</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6 text-center">
                        <i class="bi bi-people text-primary fs-4"></i>
                        <h4>31</h4>
                        <p class="text-muted mb-0">Number of Suppliers</p>
                    </div>
                    <div class="col-6 text-center">
                        <i class="bi bi-list-ul text-success fs-4"></i>
                        <h4>21</h4>
                        <p class="text-muted mb-0">Number of Categories</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sales & Purchase Chart -->
    <div class="col-md-8 mb-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title">Sales & Purchase</h5>
                <button class="btn btn-outline-secondary btn-sm">Weekly</button>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="salesPurchaseChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Order Summary Chart -->
    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Order Summary</h5>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="orderSummaryChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Top Selling Stock -->
    <div class="col-md-8 mb-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title">Top Selling Stock</h5>
                <a href="#" class="text-decoration-none">See All</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Sold Quantity</th>
                            <th>Remaining Quantity</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Surf Excel</td>
                            <td>30</td>
                            <td>12</td>
                            <td>₹ 100</td>
                        </tr>
                        <tr>
                            <td>Rin</td>
                            <td>21</td>
                            <td>15</td>
                            <td>₹ 207</td>
                        </tr>
                        <tr>
                            <td>Parle G</td>
                            <td>19</td>
                            <td>17</td>
                            <td>₹ 105</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Low Quantity Stock -->
    <div class="col-md-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0">Low Quantity Stock</h5>
                <a href="#" class="text-decoration-none">See All</a>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex align-items-center">
                        <img src="path_to_tata_salt_image.jpg" alt="Tata Salt" class="me-3" style="width: 40px; height: 40px; object-fit: cover;">
                        <div class="flex-grow-1">
                            <h6 class="mb-0">Tata Salt</h6>
                            <small class="text-muted">Remaining Quantity: 10 Packet</small>
                        </div>
                        <span class="badge bg-danger">Low</span>
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <img src="path_to_lays_image.jpg" alt="Lays" class="me-3" style="width: 40px; height: 40px; object-fit: cover;">
                        <div class="flex-grow-1">
                            <h6 class="mb-0">Lays</h6>
                            <small class="text-muted">Remaining Quantity: 15 Packet</small>
                        </div>
                        <span class="badge bg-danger">Low</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
