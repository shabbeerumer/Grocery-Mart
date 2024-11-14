<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AddToCartController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\BlogSingleController;
use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MeatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ordersController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\DetergentsController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\ProductInfoController;
use App\Http\Controllers\HomeSection1Controller;
use App\Http\Controllers\HomeSection2Controller;
use App\Http\Controllers\HomeSection3Controller;
use App\Http\Controllers\HomeSection4Controller;
use App\Http\Controllers\HomeSection5Controller;
use App\Http\Controllers\HomeSection6Controller;
use App\Http\Controllers\Products\Detergents\DetergentSection1Controller;
use App\Http\Controllers\Products\Detergents\DetergentSection2Controller;
use App\Http\Controllers\Products\Detergents\DetergentSection3Controller;
use App\Http\Controllers\Products\Detergents\DetergentSection4Controller;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ShortCodesController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\SuppliersController;

Route::get('/', function () {
    return view('welcome');
});

// user route start
Route::get('/meat', [MeatController::class, 'index'])->name('meat.index');
Route::get('/Detergents', [DetergentsController::class, 'index'])->name('Detergents.index');
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/faqs', [FaqsController::class, 'index'])->name('faqs.index');
Route::get('/single', [SingleController::class, 'index'])->name('single.index');
Route::get('/contactus', [ContactUsController::class, 'index'])->name('contactus.index');
Route::get('/aboutus', [AboutUsController::class, 'index'])->name('aboutus.index');
Route::get('/addtocart', [AddToCartController::class, 'index'])->name('addtocart.index');
Route::get('/shortcodes', [ShortCodesController::class, 'index'])->name('shortcodes.index');
Route::get('/blogsingle', [BlogSingleController::class, 'index'])->name('blogsingle.index');
Route::get('/blogpost', [BlogPostController::class, 'index'])->name('blogpost.index');

// user route end


// user backend route start
Route::post('/cart/add', [AddToCartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [AddToCartController::class, 'showCart'])->name('cart.show');
Route::get('/cart/remove/{index}', [AddToCartController::class, 'removeItem'])->name('cart.remove');
Route::post('stripe', [StripeController::class, 'stripe'])->name('stripe');
Route::get('success', [StripeController::class, 'success'])->name('success');
Route::get('cancel', [StripeController::class, 'cancel'])->name('cancel');
// user backend route end


// admin route start
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/signup', [SignupController::class, 'index'])->name('signup.index');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory.index');
Route::get('/product_info', [ProductInfoController::class, 'index'])->name('product_info.index');
Route::get('/orders', [ordersController::class, 'index'])->name('orders.index');
Route::get('/report', [ReportController::class, 'index'])->name('report.index');
Route::get('/store', [StoreController::class, 'index'])->name('store.index');
Route::get('/suppliers', [SuppliersController::class, 'index'])->name('suppliers.index');
Route::get('/home/section1', [HomeSection1Controller::class, 'index'])->name('home_section1.index');
Route::get('/home/section2', [HomeSection2Controller::class, 'index'])->name('home_section2.index');
Route::get('/home/section3', [HomeSection3Controller::class, 'index'])->name('home_section3.index');
Route::get('/home/section4', [HomeSection4Controller::class, 'index'])->name('home_section4.index');
Route::get('/home/section5', [HomeSection5Controller::class, 'index'])->name('home_section5.index');
Route::get('/home/section6', [HomeSection6Controller::class, 'index'])->name('home_section6.index');
Route::get('/product/detergents/section1', [DetergentSection1Controller::class, 'index'])->name('pds1.index');
Route::get('/product/detergents/section2', [DetergentSection2Controller::class, 'index'])->name('pds2.index');
Route::get('/product/detergents/section3', [DetergentSection3Controller::class, 'index'])->name('pds3.index');
Route::get('/product/detergents/section4', [DetergentSection4Controller::class, 'index'])->name('pds4.index');
// admin route end



// admin backend route start
// home first section backend route start
Route::post('/home/section1_post', [HomeSection1Controller::class, 'create'])->name('home_section1.post');
Route::get('/home/section1_read', [HomeSection1Controller::class, 'read'])->name('home_section1.read');
Route::get('/home/section1_edit/{id}', [HomeSection1Controller::class, 'edit'])->name('home_section1.edit');
Route::post('/home/section1_edit/{id}', [HomeSection1Controller::class, 'update'])->name('home_section1.update');
Route::get('/home/section1_delete/{id}', [HomeSection1Controller::class, 'delete'])->name('home_section1.delete');
// home end  first section backend route start

//home second section backend route start
Route::post('/home/section2_post', [HomeSection2Controller::class, 'create'])->name('home_section2.post');
Route::get('/home/section2_read', [HomeSection2Controller::class, 'read'])->name('home_section2.read');
Route::get('/home/section2_edit/{id}', [HomeSection2Controller::class, 'edit'])->name('home_section2.edit');
Route::post('/home/section2_edit/{id}', [HomeSection2Controller::class, 'update'])->name('home_section2.update');
Route::get('/home/section2_delete/{id}', [HomeSection2Controller::class, 'delete'])->name('home_section2.delete');
//home end second section backend route start

//home third section backend route start
Route::post('/home/section3_post', [HomeSection3Controller::class, 'create'])->name('home_section3.post');
Route::get('/home/section3_read', [HomeSection3Controller::class, 'read'])->name('home_section3.read');
Route::get('/home/section3_edit/{id}', [HomeSection3Controller::class, 'edit'])->name('home_section3.edit');
Route::post('/home/section3_edit/{id}', [HomeSection3Controller::class, 'update'])->name('home_section3.update');
Route::get('/home/section3_delete/{id}', [HomeSection3Controller::class, 'delete'])->name('home_section3.delete');
//home end third section backend route start

//home fourth section backend route start
Route::post('/home/section4_post', [HomeSection4Controller::class, 'create'])->name('home_section4.post');
Route::get('/home/section4_read', [HomeSection4Controller::class, 'read'])->name('home_section4.read');
Route::get('/home/section4_edit/{id}', [HomeSection4Controller::class, 'edit'])->name('home_section4.edit');
Route::post('/home/section4_edit/{id}', [HomeSection4Controller::class, 'update'])->name('home_section4.update');
Route::get('/home/section4_delete/{id}', [HomeSection4Controller::class, 'delete'])->name('home_section4.delete');
//home end fourth section backend route start

//home five section backend route start
Route::post('/home/section5_post', [HomeSection5Controller::class, 'create'])->name('home_section5.post');
Route::get('/home/section5_read', [HomeSection5Controller::class, 'read'])->name('home_section5.read');
Route::get('/home/section5_edit/{id}', [HomeSection5Controller::class, 'edit'])->name('home_section5.edit');
Route::post('/home/section5_edit/{id}', [HomeSection5Controller::class, 'update'])->name('home_section5.update');
Route::get('/home/section5_delete/{id}', [HomeSection5Controller::class, 'delete'])->name('home_section5.delete');
//home end five section backend route start

//home six section backend route start
Route::post('/home/section6_post', [HomeSection6Controller::class, 'create'])->name('home_section6.post');
Route::get('/home/section6_read', [HomeSection6Controller::class, 'read'])->name('home_section6.read');
Route::get('/home/section6_edit/{id}', [HomeSection6Controller::class, 'edit'])->name('home_section6.edit');
Route::post('/home/section6_edit/{id}', [HomeSection6Controller::class, 'update'])->name('home_section6.update');
Route::get('/home/section6_delete/{id}', [HomeSection6Controller::class, 'delete'])->name('home_section6.delete');
//home end six section backend route start


// product/detergents/section1 route start
Route::post('/product/detergents/section1/create', [DetergentSection1Controller::class, 'create'])->name('pds1.create');
Route::get('/product/detergents/section1/read', [DetergentSection1Controller::class, 'read'])->name('pds1.read');
Route::get('/product/detergents/section1/edit/{id}', [DetergentSection1Controller::class, 'edit'])->name('pds1.edit');
Route::post('/product/detergents/section1/update/{id}', [DetergentSection1Controller::class, 'update'])->name('pds1.update');
Route::get('/product/detergents/section1/delete/{id}', [DetergentSection1Controller::class, 'delete'])->name('pds1.delete');
// product/detergents/section1 route end

// product/detergents/section2 route start
Route::post('/product/detergents/section2/create', [DetergentSection2Controller::class, 'create'])->name('pds2.create');
Route::get('/product/detergents/section2/read', [DetergentSection2Controller::class, 'read'])->name('pds2.read');
Route::get('/product/detergents/section2/edit/{id}', [DetergentSection2Controller::class, 'edit'])->name('pds2.edit');
Route::post('/product/detergents/section2/update/{id}', [DetergentSection2Controller::class, 'update'])->name('pds2.update');
Route::get('/product/detergents/section2/delete/{id}', [DetergentSection2Controller::class, 'delete'])->name('pds2.delete');
// product/detergents/section2 route end

// product/detergents/section3 route start
Route::post('/product/detergents/section3/create', [DetergentSection3Controller::class, 'create'])->name('pds3.create');
Route::get('/product/detergents/section3/read', [DetergentSection3Controller::class, 'read'])->name('pds3.read');
Route::get('/product/detergents/section3/edit/{id}', [DetergentSection3Controller::class, 'edit'])->name('pds3.edit');
Route::post('/product/detergents/section3/update/{id}', [DetergentSection3Controller::class, 'update'])->name('pds3.update');
Route::get('/product/detergents/section3/delete/{id}', [DetergentSection3Controller::class, 'delete'])->name('pds3.delete');
// product/detergents/section3 route end

// product/detergents/section4 route start
Route::post('/product/detergents/section4/create', [DetergentSection4Controller::class, 'create'])->name('pds4.create');
Route::get('/product/detergents/section4/read', [DetergentSection4Controller::class, 'read'])->name('pds4.read');
Route::get('/product/detergents/section4/edit/{id}', [DetergentSection4Controller::class, 'edit'])->name('pds4.edit');
Route::post('/product/detergents/section4/update/{id}', [DetergentSection4Controller::class, 'update'])->name('pds4.update');
Route::get('/product/detergents/section4/delete/{id}', [DetergentSection4Controller::class, 'delete'])->name('pds4.delete');
Route::post('/product/detergents/section4/second_create', [DetergentSection4Controller::class, 'stc'])->name('pds4.stc');
// product/detergents/section4 route end


// admin backend route end