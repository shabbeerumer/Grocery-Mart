<div class="container-fluid">
    <div class="row">
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light">
                    <div
                        class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <a href="/"
                            class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                            <span class="fs-5 d-none d-sm-inline">KANBAN</span>
                        </a>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                            id="menu">
                            <li>
                                <a href="#submenu2" data-bs-toggle="collapse" data-bs-target="#submenu2"
                                    class="nav-link px-0 align-middle text-dark">
                                    <i class="bi bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                                </a>
                                <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="{{ route('home_section1.index') }}" class="nav-link px-0 text-dark">
                                            <span class="d-none d-sm-inline text-dark">section</span>1</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('home_section2.index') }}" class="nav-link px-0 text-dark">
                                            <span class="d-none d-sm-inline text-dark">section</span>2</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('home_section3.index') }}" class="nav-link px-0 text-dark">
                                            <span class="d-none d-sm-inline text-dark">section</span>3</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('home_section4.index') }}" class="nav-link px-0 text-dark">
                                            <span class="d-none d-sm-inline text-dark">section</span>4</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('home_section5.index') }}" class="nav-link px-0 text-dark">
                                            <span class="d-none d-sm-inline text-dark">section</span>5</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('home_section6.index') }}" class="nav-link px-0 text-dark">
                                            <span class="d-none d-sm-inline text-dark">section</span>6</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Products Main Link -->
                            <a href="#productsSubmenu" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fa-brands fa-product-hunt text-dark"></i>
                                <span class="ms-1 d-none d-sm-inline text-dark">Products</span>
                            </a>

                            <!-- Products Submenu -->
                            <ul class="collapse nav flex-column ms-1" id="productsSubmenu" data-bs-parent="#menu">
                                <!-- Detergents Dropdown -->
                                <li>
                                    <a href="#detergentsSubmenu" data-bs-toggle="collapse"
                                        class="nav-link px-0 align-middle">
                                        <i class="fa-solid fa-jug-detergent"></i>
                                        <span class="ms-1 d-none d-sm-inline text-dark">Detergents</span>
                                    </a>
                                    <ul class="collapse nav flex-column ms-1" id="detergentsSubmenu"
                                        data-bs-parent="#productsSubmenu">
                                        <li>
                                            <a href="{{ route('pds1.index') }}" class="nav-link px-0 text-dark">
                                                <span class="d-none d-sm-inline text-dark">section</span> 1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pds2.index') }}" class="nav-link px-0 text-dark">
                                                <span class="d-none d-sm-inline text-dark">section</span> 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pds3.index') }}" class="nav-link px-0 text-dark">
                                                <span class="d-none d-sm-inline text-dark">section</span> 3
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('pds4.index') }}" class="nav-link px-0 text-dark">
                                                <span class="d-none d-sm-inline text-dark">section</span> 4
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                
                                <!-- Meat & Seafood Dropdown -->
                                <li>
                                    <a href="#meatSeafoodSubmenu" data-bs-toggle="collapse"
                                        class="nav-link px-0 align-middle">
                                        <i class="fa-solid fa-drumstick-bite text-dark"></i>
                                        <span class="ms-1 d-none d-sm-inline text-dark">Meat & Seafood</span>
                                    </a>
                                    <ul class="collapse nav flex-column ms-1" id="meatSeafoodSubmenu"
                                        data-bs-parent="#productsSubmenu">
                                        <li>
                                            <a href="#" class="nav-link px-0 text-dark">
                                                <span class="d-none d-sm-inline text-dark">Meat</span> 1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="nav-link px-0 text-dark">
                                                <span class="d-none d-sm-inline text-dark">Seafood</span> 2
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <li>
                                <a href="#submenu3" data-bs-toggle="collapse" data-bs-target="#submenu3"
                                    class="nav-link px-0 align-middle text-dark">
                                    <i class="bi bi-file-person"></i> <span class="ms-1 d-none d-sm-inline">about</span>
                                </a>
                                <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="{{ route('aboutus_section1.index') }}" class="nav-link px-0 text-dark">
                                            <span class="d-none d-sm-inline text-dark">section</span>1</a>
                                    </li>
                                   
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dashboard.index') }}" class="nav-link align-middle px-0 text-dark">
                                    <i class="fs-4 bi-speedometer2"></i> <span
                                        class="ms-1 d-none d-sm-inline">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('inventory.index') }}" class="nav-link px-0 align-middle text-dark">
                                    <i class="fa-solid fa-warehouse"></i> <span
                                        class="ms-1 d-none d-sm-inline">Inventory</span> </a>

                            </li>
                            <li>
                                <a href="{{ route('report.index') }}" class="nav-link px-0 align-middle text-dark">
                                    <i class="fa-solid fa-bug"></i> <span
                                        class="ms-1 d-none d-sm-inline">Reports</span></a>
                            </li>
                            <li>
                                <a href="{{ route('suppliers.index') }}" class="nav-link px-0 align-middle text-dark">
                                    <i class="fa-solid fa-parachute-box"></i> <span
                                        class="ms-1 d-none d-sm-inline">Suppliers</span></a>

                            </li>
                            <li>
                                <a href="{{ route('orders.index') }}" class="nav-link px-0 align-middle text-dark">
                                    <i class="fa-brands fa-first-order"></i> <span
                                        class="ms-1 d-none d-sm-inline">Orders</span> </a>
                                <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">

                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('store.index') }}" class="nav-link px-0 align-middle text-dark">
                                    <i class="fa-solid fa-store"></i> <span class="ms-1 d-none d-sm-inline">Manage
                                        Store</span> </a>
                            </li>
                        </ul>
                        <hr>
                        <div class="dropdown pb-4">
                            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                                id="menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link align-middle px-0 text-dark">
                                        <i class="bi bi-gear"></i><span
                                            class="ms-1 d-none d-sm-inline">Settings</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('login.index') }}"
                                        class="nav-link align-middle px-0 text-dark">
                                        <i class="bi bi-box-arrow-right"></i><span class="ms-1 d-none d-sm-inline">Log
                                            Out</span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col py-3">
                    <main class="ms-sm-auto main-content">
                        <div
                            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                            <div class="search-bar">
                                <input type="text" class="form-control"
                                    placeholder="Search product, supplier, order">
                            </div>
                            <div class="user-profile">
                                <i class="fas fa-bell me-3"></i>
                                <img src="https://via.placeholder.com/40" alt="User" class="rounded-circle">
                            </div>
                        </div>
                        @yield('content')


                    </main>
                </div>
            </div>
        </div>
    </div>
</div>
