{{-- report view file --}}
@extends('admin_layout.admin_layout')

@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8" style="width: 100%;">
                <div class="row">
                    <!-- First Column -->
                    <div class="col-lg-6">
                        <div class="overview">
                            <h3>Overview</h3>
                            <div class="row">
                                <div class="column">
                                    <p class="price">₹21,190</p>
                                    <p class="label">Total Profit</p>
                                </div>
                                <div class="column">
                                    <p class="price">₹18,300</p>
                                    <p class="label">Revenue</p>
                                </div>
                                <div class="column">
                                    <p class="price">₹17,432</p>
                                    <p class="label">Sales</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="column">
                                    <p class="price">₹1,17,432</p>
                                    <p class="label" style="font-size: 9px;">Net purchase value</p>
                                </div>
                                <div class="column">
                                    <p class="price">₹80,432</p>
                                    <p class="label">Net sales value</p>
                                </div>
                                <div class="column">
                                    <p class="price">₹30,432</p>
                                    <p class="label">MoM Profit</p>
                                </div>
                                <div class="column">
                                    <p class="price">₹1,10,432</p>
                                    <p class="label">YoY Profit</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Second Column -->
                    <div class="col-lg-6">
                        <div class="best-selling-category">
                            <div class="header">
                                <h3>Best Selling Category</h3>
                                <a href="#" class="see-all">See All</a>
                            </div>
                            <table class="category-table">
                                <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th>Turn Over</th>
                                        <th>Increase By</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Vegetable</td>
                                        <td>₹26,000</td>
                                        <td class="increase">3.2%</td>
                                    </tr>
                                    <tr>
                                        <td>Instant Food</td>
                                        <td>₹22,000</td>
                                        <td class="increase">2%</td>
                                    </tr>
                                    <tr>
                                        <td>Households</td>
                                        <td>₹22,000</td>
                                        <td class="increase">1.5%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Chart Section -->
                <div class="row">
                    <h2>Profit & Revenue</h2>
                    <canvas id="myChart" style="width:100%;"></canvas>
                </div>

                <!-- Best Selling Product Section -->
                <div class="row">
                    <div class="col-md-10">
                        <p style="color: #383E49; font-weight: 500;">Best Selling Product</p>
                    </div>
                    <div class="col-md-2">
                        <button style="color: #0F50AA; border: 0; background-color: transparent;">See All</button>
                    </div>
                </div>

                <table class="table" style="background-color: #cb6262;">
                    <thead>
                        <tr>
                            <th style="color: #667085;">Product</th>
                            <th style="color: #667085;">Product ID</th>
                            <th style="color: #667085;">Category</th>
                            <th style="color: #667085;">Remaining Quantity</th>
                            <th style="color: #667085;">Turn Over</th>
                            <th style="color: #667085;">Increase By</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="color">
                            <td>Tomato</td>
                            <td>23567</td>
                            <td>Vegetable</td>
                            <td>225 kg</td>
                            <td>₹17,000</td>
                            <td style="color: #10A760;">2.3%</td>
                        </tr>
                        <tr class="color">
                            <td>Onion</td>
                            <td>25831</td>
                            <td>Vegetable</td>
                            <td>200 kg</td>
                            <td>₹12,000</td>
                            <td style="color: #10A760;">1.3%</td>
                        </tr>
                        <tr class="color">
                            <td>Maggi</td>
                            <td>56841</td>
                            <td>Instant Food</td>
                            <td>200 Packet</td>
                            <td>₹10,000</td>
                            <td style="color: #10A760;">1.3%</td>
                        </tr>
                        <tr class="color">
                            <td>Surf Excel</td>
                            <td>23567</td>
                            <td>Household</td>
                            <td>125 Packet</td>
                            <td>₹9,000</td>
                            <td style="color: #10A760;">1%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection
