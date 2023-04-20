<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\AddtoCartController;
use App\Http\Controllers\UserAccountController;
use App\Http\Controllers\AdminAccountsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeedbackController;
use App\Models\UserAccount;

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

Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/contact', [ProductController::class, 'showContact'])->name('contact');
Route::get('/blog', [BlogController::class, 'showAllBlogForUser'])->name('blog');
Route::get('/blog-details/{id}', [BlogController::class, 'searchBlogByID'])->name('blog-details');
Route::get('/products', [ProductController::class, 'showProductList'])->name('products');
Route::get('/products/{category}', [ProductController::class, 'searchProducts'])->name('search-products');
Route::get('/product-details/{id}', [ProductController::class, 'searchProductsByID'])->name('products-details');





Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('', [ProductController::class, 'admin'])->name('index');
    Route::get('/adminLoginForm', [AdminAccountsController::class, 'login_form'])->name('adminLoginForm');
    Route::post('/adminLogin', [AdminAccountsController::class, 'admin_login'])->name('adminLogin');
    Route::get('/adminLogout', [AdminAccountsController::class, 'admin_logout'])->name('adminLogout');
    Route::get('/add', [ProductController::class, 'showAddForm'])->name('add');
    Route::post('/add', [ProductController::class, 'postAdd'])->name('post-add');
    Route::get('/edit/{id}', [ProductController::class, 'getEdit'])->name('edit');
    Route::post('/update', [ProductController::class, 'postEdit'])->name('post-edit');
    Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('delete');
    Route::get('/listAdmin', [AdminAccountsController::class, 'showListAdmin'])->name('listAdmin');

    Route::prefix('category')->name('category.')->group(function () {
        Route::get('/', [CategoryController::class, 'showAllCategories'])->name('categories');
        Route::get('/add-category', [CategoryController::class, 'showAddFormCategory'])->name('addCategory');
        Route::post('/createCategory', [CategoryController::class, 'createCategory'])->name('createCategory');
        Route::get('/deleteCategory/{id}', [CategoryController::class, 'deleteCategoryByID'])->name('deleteCategory');
        Route::get('/editCategory/{id}', [CategoryController::class, 'getCategoryDetails'])->name('editCategory');
        Route::post('/updateCategory', [CategoryController::class, 'updateCategory'])->name('updateCategory');
    });
    Route::prefix('blog')->name('blog.')->group(function () {
        Route::get('/', [BlogController::class, 'showAllBlog'])->name('index');
        Route::get('/add', [BlogController::class, 'showAddForm'])->name('add');
        Route::post('/add', [BlogController::class, 'postAdd'])->name('post-add');
        Route::get('/draftBlog', [BlogController::class, 'draftBlog'])->name('draftBlog');
        Route::get('/edit/{id}', [BlogController::class, 'getEdit'])->name('edit');
        Route::post('/updateBlog', [BlogController::class, 'updateBlog'])->name('updateBlog');
        Route::get('/delete/{id}', [BlogController::class, 'delete'])->name('delete');
    });
    Route::prefix('account')->name('account.')->group(function () {
        Route::get('/', [UserAccountController::class, 'showAllAccount'])->name('index');
        Route::get('/set-account-disable/{id}', [UserAccountController::class, 'set_Account_Disable_ByID'])->name('set-account-disable');
        Route::get('/set-account-enable/{id}', [UserAccountController::class, 'set_Account_Enable_ByID'])->name('set-account-enable');
    });
    Route::prefix('order')->name('order.')->group(function () {
        Route::get('/', [OrdersController::class, 'showAllOrders'])->name('index');
        Route::get('/set-status-delivering/{id}', [OrdersController::class, 'set_Status_Delivering_ByID'])->name('set-status-delivering');
        Route::get('/set-status-received/{id}', [OrdersController::class, 'set_Status_Received_ByID'])->name('set-status-received');
    });
    Route::prefix('feedback')->name('feedback.')->group(function () {
        Route::get('/blogfeedback', [FeedbackController::class, 'showBlogFeedbacks'])->name('blogfeedback');
        Route::get('/productfeedback', [FeedbackController::class, 'showProductFeedbacks'])->name('productfeedback');
        Route::get('/deletefeedback/{id}', [FeedbackController::class, 'deletefeedback'])->name('deletefeedback');
    });
});

Route::post('/add-cart-ajax', [AddtoCartController::class, 'add_cart_ajax'])->name('add_cart_ajax');
Route::post('/show-cart-live-view', [AddtoCartController::class, 'show_cart_live_view'])->name('show_cart_live_view');
Route::get('/cart', [AddtoCartController::class, 'showCart'])->name('cart');
Route::post('/update-cart', [AddtoCartController::class, 'update_cart']);
Route::get('/delete-cart/{session_id}', [AddtoCartController::class, 'delete_cart_product'])->name('delete-cart');
Route::get('/delete-all', [AddtoCartController::class, 'delete_all_product']);

//Login//Logout//Register//RecoveryPassword
Route::get('/login', [UserAccountController::class, 'showFormLogin'])->name('loginForm');
Route::get('/register-form', [UserAccountController::class, 'showFormRegister'])->name('register-form');
Route::post('/register', [UserAccountController::class, 'registerAccount'])->name('register');
Route::post('/userLogin', [UserAccountController::class, 'userLogin'])->name('userLogin');
Route::get('/logout', [UserAccountController::class, 'logout'])->name('logout');
Route::get('/forgot-password', [UserAccountController::class, 'showFormForgotPassword'])->name('forgot-password');
Route::post('/send-verify-mail', [UserAccountController::class, 'sendVerifyMail'])->name('send-verify-mail');
Route::get('/password/reset/{token}', [UserAccountController::class, 'showFormResetPassword'])->name('reset.password.form');
Route::post('/reset', [UserAccountController::class, 'resetPassword'])->name('reset.password');


//User CRUD
Route::get('/userProfile', [UserAccountController::class, 'showUserProfile'])->name('userProfile');
Route::get('/change-password', [UserAccountController::class, 'change_password'])->name('change-password');
Route::get('/user-orders', [UserAccountController::class, 'show_history_orders'])->name('user-orders');
Route::get('/user-vouchers', [UserAccountController::class, 'show_list_vouchers'])->name('user-vouchers');
Route::get('/delete-account/{id}', [UserAccountController::class, 'deleteAccountByID'])->name('delete-account');
Route::post('/update-profile', [UserAccountController::class, 'update_profile'])->name('update-profile');
Route::post('/update-password', [UserAccountController::class, 'update_password'])->name('update-password');
Route::get('/cancelOrder/{id}', [UserAccountController::class, 'cancelOrderByID'])->name('cancelOrder');


//Check out
Route::get('/check-out', [OrdersController::class, 'showCheckOutForm'])->name('checkout');
Route::post('/confirm-checkout', [OrdersController::class, 'confirm_checkout'])->name('confirm-checkout');
Route::get('/confirm-success', [OrdersController::class, 'confirm_success'])->name('confirm-success');

Route::post('/feedback/blogid', [FeedbackController::class, 'storeByBlogID'])->name('feedback.storeByBlogID');
Route::post('/feedback/productid', [FeedbackController::class, 'storeByProductID'])->name('feedback.storeByProductID');




