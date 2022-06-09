<?php

use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCouponComponent;
use App\Http\Livewire\Admin\AdminAddHomeSliderComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminContactComponent;
use App\Http\Livewire\Admin\AdminCouponsComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCouponComponent;
use App\Http\Livewire\Admin\AdminEditHomeSliderComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminHomeCategoryComponent;
use App\Http\Livewire\Admin\AdminHomeSliderComponent;
use App\Http\Livewire\Admin\AdminOrderComponent;
use App\Http\Livewire\Admin\AdminOrderDetailsComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminSaleComponent;
use App\Http\Livewire\Admin\AdminSettingComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\ShopComponents;
use App\Http\Livewire\ThankyouComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\User\UserOrderComponent;
use App\Http\Livewire\User\UserOrderDetailsComponent;
use App\Http\Livewire\User\UserReviewComponent;
use App\Http\Livewire\WishlistComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',HomeComponent::class);

Route::get('/shop',ShopComponents::class);

Route::get('/cart',CartComponent::class)->name('product.cart');

Route::get('/checkout',CheckoutComponent::class);

Route::get('/product/{slug}', DetailsComponent::class)->name('product.delails');
// product by categories
Route::get('/product-category/{category_slug}/{scategory_slug?}',CategoryComponent::class)->name('product.category');
// search kategori
Route::get('/search',SearchComponent::class)->name('product.search');
// Show All Wishlisted Products
Route::get('/wishlist',WishlistComponent::class)->name('product.wishlist');
// checkout
Route::get('/checkout',CheckoutComponent::class)->name('checkout');
// thankyou
Route::get('/thank-you',ThankyouComponent::class)->name('thankyou');
// contact page
Route::get('/contact-kami',ContactComponent::class)->name('contact');
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// for user or customer
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
    // User Show Orders and Order Details
    Route::get('/user/orders',UserOrderComponent::class)->name('user.orders');
    Route::get('/user/orders/{order_id}',UserOrderDetailsComponent::class)->name('user.orderdetails');
    // User Review & Rating on Produc
    Route::get('/user/review/{order_item_id}',UserReviewComponent::class)->name('user.review');
});
// for admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    // admin category page
    Route::get('/admin/categories',AdminCategoryComponent::class)->name('admin.categories');
    // admin add new category
    Route::get('/admin/category/add',AdminAddCategoryComponent::class)->name('admin.addcategory');
    // admin edit category
    Route::get('/admin/category/edit/{category_slug}/{scategory_slug?}',AdminEditCategoryComponent::class)->name('admin.editcategory');
    // Admin Product Page
    Route::get('/admin/products',AdminProductComponent::class)->name('admin.prducts');
    // admin add new product
    Route::get('/admin/product/add',AdminAddProductComponent::class)->name('admin.addproduct');
    // Admin Edit Product
    Route::get('/admin/product/edit/{product_slug}',Admineditproductcomponent::class)->name('admin.editproduct');
    //  Admin Show Product Categories On Homepage
    Route::get('/admin/home-categories',AdminHomeCategoryComponent::class)->name('admin.homecategories');
    // Admin Making On Sale Timer Working
    Route::get('/admin/sale',AdminSaleComponent::class)->name('admin.sale');
    // admin coupons
    Route::get('/admin/coupons',AdminCouponsComponent::class)->name('admin.coupons');
    // admin add coupons
    Route::get('/admin/coupons/add',AdminAddCouponComponent::class)->name('admin.addcoupon');
    // admin edit coupon
    Route::get('admin/coupons/edit/{coupon_id}',AdminEditCouponComponent::class)->name('admin.editcoupon');
    // Admin Show Orders
    Route::get('/admin/orders',AdminOrderComponent::class)->name('admin.orders');
    // Admin Show Order Details
    Route::get('/admin/orders/{order_id}',AdminOrderDetailsComponent::class)->name('admin.orderdetails');
    
    // Admin Making Home Page Slider Dynamic
    Route::get('/admin/slider',AdminHomeSliderComponent::class)->name('admin.homeslider');
    Route::get('/admin/slider/add',AdminAddHomeSliderComponent::class)->name('admin.addhomeslider');
    Route::get('/admin/slider/edit/{slide_id}',AdminEditHomeSliderComponent::class)->name('admin.edithomeslider');
    // contact
    Route::get('/admin/contact-kami',AdminContactComponent::class)->name('admin.contact');
    // setting
    Route::get('admin/settings',AdminSettingComponent::class)->name('admin.settings');

});