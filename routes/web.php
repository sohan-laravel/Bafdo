<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

// Vendor Route

//Backend Login Route

Route::group(['prefix' => 'vendor'], function () {
    Route::get('/login', 'Vendor\LoginController@showLoginForm')->name('vendor.login.form');
    Route::post('/login', 'Vendor\LoginController@login')->name('vendor.login');

    Route::get('register', 'Vendor\RegisterController@showRegistrationForm')->name('vendor.register.form');
    Route::post('post-register', 'Vendor\RegisterController@vregister')->name('vendor.register');

    Route::middleware(['auth:vendor'])->group(function () {
        Route::post('/logout', 'Vendor\LoginController@logout')->name('vendor.logout');
        Route::get('/dashboard', 'Vendor\DashboardController@index')->name('vendor.dashboard');

        // vendor product 

        Route::resource('product', 'Vendor\ProductController', ['names' => 'vendor.product']);
        Route::post('product/inactive', 'Vendor\ProductController@inactive')->name('vendor.product.inactive');
    });
});


// Backend Route

//Backend Login Route

Route::namespace('Admin')->prefix('admin')->group(function () {
    Route::get('/login', 'LoginController@showLoginForm')->name('admin.login.form');
    Route::post('/login', 'LoginController@login')->name('admin.login');

    Route::middleware(['auth:admin'])->group(function () {
        Route::post('/logout', 'LoginController@logout')->name('admin.logout');
        Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');
    });
});

// Backend Controller Route 

Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    //Route::get('/', 'IndexController@index')->name('index');


    //Admin Category

    //Route::resource('category', 'CategoryController', ['names' => 'admin.category']);

    //Admin Slider

    Route::resource('slider', 'SliderController', ['names' => 'admin.slider']);
    Route::post('slider/inactive', 'SliderController@inactive')->name('admin.slider.inactive');

    // CATEGORY SECTION

    Route::resource('category', 'CategoryController', ['names' => 'admin.category']);
    Route::post('category/inactive', 'CategoryController@inactive')->name('admin.category.inactive');

    // CATEGORY SECTION ENDS

    // Sub CATEGORY SECTION

    Route::resource('subcategory', 'SubcategoryController', ['names' => 'admin.subcategory']);
    Route::post('subcategory/inactive', 'SubcategoryController@inactive')->name('admin.subcategory.inactive');

    // CATEGORY SECTION ENDS

    // Sub CATEGORY SECTION

    Route::resource('subsubcategory', 'SubsubcategoryController', ['names' => 'admin.subsubcategory']);
    Route::post('subsubcategory/inactive', 'SubsubcategoryController@inactive')->name('admin.subsubcategory.inactive');

    // CATEGORY SECTION ENDS



    //Admin Profile

    Route::get('profile', 'ProfileController@index')->name('admin.profile');
    Route::put('profile-update', 'ProfileController@updateProfile')->name('admin.profile.update');
    Route::get('password', 'ProfileController@Password')->name('admin.password');
    Route::put('password-update', 'ProfileController@updatePassword')->name('admin.update.password');

    // Admin General Setting

    Route::get('setting', 'SettingController@index')->name('admin.setting');
    Route::patch('setting-update', 'SettingController@update')->name('admin.setting.update');

    // Admin Appearance Setting

    Route::get('appearance', 'SettingController@appearance')->name('admin.appearance');
    Route::patch('appearance-update', 'SettingController@appearanceUpdate')->name('admin.appearance.update');

    // Admin Mail Setting

    Route::get('mail', 'SettingController@mail')->name('admin.mail');
    Route::patch('mail-update', 'SettingController@mailUpdate')->name('admin.mail.update');
});





// Frontend Route

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', 'IndexController@index')->name('index');
    Route::get('/contact', 'IndexController@contact')->name('contact');
    Route::get('/test', 'IndexController@test')->name('test');
});

//Route::view('/ss', 'backend.property.index')->name('ss');


Auth::routes();

// Socialite routes
Route::group(['as' => 'login.', 'prefix' => 'login', 'namespace' => 'Auth'], function () {
    Route::get('/{provider}', 'LoginController@redirectToProvider')->name('provider');
    Route::get('/{provider}/callback', 'LoginController@handleProviderCallback')->name('callback');
});

Route::get('/home', 'HomeController@index')->name('home');
