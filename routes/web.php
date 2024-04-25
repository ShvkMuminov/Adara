<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdsController;
// use App\Http\Controllers\backend\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\IndexController;
use App\Http\Controllers\Frontend\ClientController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\OfferController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\PartnerController;
use App\Http\Controllers\Backend\ReviewController;
use App\Http\Controllers\Backend\ProductColorController;
use App\Http\Controllers\Backend\ProductSetColorController;
use App\Http\Controllers\Backend\ProductSetSizeController;
use App\Http\Controllers\Backend\ProductImageController;
use App\Http\Controllers\Backend\ProductSizeController;
use App\Http\Controllers\frontend\ClientController as FrontendClientController;
use App\Http\Controllers\frontend\LoginController;
use App\Http\Controllers\frontend\OrderController;
use App\Http\Controllers\Frontend\IndexController as FrontendIndexController;


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


Route::get('/', [FrontendIndexController::class, 'mainPage'])->name('main.page');
Route::get('/shop/details/{product_id}', [FrontendIndexController::class, 'shopDetailPage'])->name('main.show');

// Route::get('/next/product/{product_id}', [FrontendIndexController::class, 'nextProduct'])->name('next.productDetail');
// Route::get('/pervous/product/{product_id}', [FrontendIndexController::class, 'pervousProduct'])->name('pervous.productDetail');

Route::get('/ceo', [AdminController::class, 'loginForm'])->name('index');
Route::get('/ceo/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');

Route::group(['middleware' => ['admin:admin']], function () {
    Route::post('/ceo', [AdminController::class, 'store'])->name('admin.login');
});

Route::middleware(['auth:sanctum,admin', 'verified'])
    ->get('/ceo/admin/dashboard', [IndexController::class, 'mainPage'])->name('dashboard');
//
// Route::middleware(['auth:client'])->prefix('ceo')->group(function () {
   Route::prefix('order')->group(function () {
     Route::post('addorder' , [OrderController::class, 'addOrder'])->name('add.order');
});
// });

Route::middleware(['auth:admin'])->prefix('ceo')->group(function () {

    Route::prefix('offer')->group(function () {
        Route::get('/view', [OfferController::class, 'offerView'])->name('all.offer');
        Route::get('/add', [OfferController::class, 'offerAdd'])->name('offer.add');
        Route::post('/store', [OfferController::class, 'offerStore'])->name('offer.store');
        Route::get('/edit/{id}', [OfferController::class, 'offerEdit'])->name('offer.edit');
        Route::post('/update/{id}', [OfferController::class, 'offerUpdate'])->name('offer.update');
        Route::get('/delete/{id}', [OfferController::class, 'offerDelete'])->name('offer.delete');
    });

    Route::prefix('product')->group(function () {
        Route::get('/view', [ProductController::class, 'productView'])->name('all.product');
        Route::get('/add', [ProductController::class, 'productAdd'])->name('product.add');
        Route::post('/store', [ProductController::class, 'productStore'])->name('product.store');
        Route::get('/edit/{id}', [ProductController::class, 'productEdit'])->name('product.edit');
        Route::post('/update/{id}', [ProductController::class, 'productUpdate'])->name('product.update');
        Route::get('/delete/{id}', [ProductController::class, 'productDelete'])->name('product.delete');
    });
    Route::prefix('product_color')->group(function () {
        Route::get('/view', [ProductColorController::class, 'product_colorView'])->name('all.product_color');
        Route::get('/add', [ProductColorController::class, 'product_colorAdd'])->name('product_color.add');
        Route::post('/store', [ProductColorController::class, 'product_colorStore'])->name('product_color.store');
        Route::get('/edit/{id}', [ProductColorController::class, 'product_colorEdit'])->name('product_color.edit');
        Route::post('/update/{id}', [ProductColorController::class, 'product_colorUpdate'])->name('product_color.update');
        Route::get('/delete/{id}', [ProductColorController::class, 'product_colorDelete'])->name('product_color.delete');
    });
    Route::prefix('product_set_color')->group(function () {
        Route::get('/view', [ProductSetColorController::class, 'product_set_colorView'])->name('all.product_set_color');
        Route::get('/add', [ProductSetColorController::class, 'product_set_colorAdd'])->name('product_set_color.add');
        Route::post('/store', [ProductSetColorController::class, 'product_set_colorStore'])->name('product_set_color.store');
        Route::get('/edit/{id}', [ProductSetColorController::class, 'product_set_colorEdit'])->name('product_set_color.edit');
        Route::post('/update/{id}', [ProductSetColorController::class, 'product_set_colorUpdate'])->name('product_set_color.update');
        Route::get('/delete/{id}', [ProductSetColorController::class, 'product_set_colorDelete'])->name('product_set_color.delete');
    });
    Route::prefix('product_set_size')->group(function () {
        Route::get('/view', [ProductSetSizeController::class, 'product_set_sizeView'])->name('all.product_set_size');
        Route::get('/add', [ProductSetSizeController::class, 'product_set_sizeAdd'])->name('product_set_size.add');
        Route::post('/store', [ProductSetSizeController::class, 'product_set_sizeStore'])->name('product_set_size.store');
        Route::get('/edit/{id}', [ProductSetSizeController::class, 'product_set_sizeEdit'])->name('product_set_size.edit');
        Route::post('/update/{id}', [ProductSetSizeController::class, 'product_set_sizeUpdate'])->name('product_set_size.update');
        Route::get('/delete/{id}', [ProductSetSizeController::class, 'product_set_sizeDelete'])->name('product_set_size.delete');
    });
    Route::prefix('product_image')->group(function () {
        Route::get('/view', [ProductImageController::class, 'product_imageView'])->name('all.product_image');
        Route::get('/add', [ProductImageController::class, 'product_imageAdd'])->name('product_image.add');
        Route::post('/store', [ProductImageController::class, 'product_imageStore'])->name('product_image.store');
        Route::get('/edit/{id}', [ProductImageController::class, 'product_imageEdit'])->name('product_image.edit');
        Route::post('/update/{id}', [ProductImageController::class, 'product_imageUpdate'])->name('product_image.update');
        Route::get('/delete/{id}', [ProductImageController::class, 'product_imageDelete'])->name('product_image.delete');
    });
    Route::prefix('product_size')->group(function () {
        Route::get('/view', [ProductSizeController::class, 'product_sizeView'])->name('all.product_size');
        Route::get('/add', [ProductSizeController::class, 'product_sizeAdd'])->name('product_size.add');
        Route::post('/store', [ProductSizeController::class, 'product_sizeStore'])->name('product_size.store');
        Route::get('/edit/{id}', [ProductSizeController::class, 'product_sizeEdit'])->name('product_size.edit');
        Route::post('/update/{id}', [ProductSizeController::class, 'product_sizeUpdate'])->name('product_size.update');
        Route::get('/delete/{id}', [ProductSizeController::class, 'product_sizeDelete'])->name('product_size.delete');
    });

    Route::prefix('service')->group(function () {
        Route::get('/view', [ServiceController::class, 'serviceView'])->name('all.service');
        Route::get('/add', [ServiceController::class, 'serviceAdd'])->name('service.add');
        Route::post('/store', [ServiceController::class, 'serviceStore'])->name('service.store');
        Route::get('/edit/{id}', [ServiceController::class, 'serviceEdit'])->name('service.edit');
        Route::post('/update/{id}', [ServiceController::class, 'serviceUpdate'])->name('service.update');
        Route::get('/delete/{id}', [ServiceController::class, 'serviceDelete'])->name('service.delete');
    });

    Route::prefix('news')->group(function () {
        Route::get('/view', [NewsController::class, 'newsView'])->name('all.news');
        Route::get('/add', [NewsController::class, 'newsAdd'])->name('news.add');
        Route::post('/store', [NewsController::class, 'newsStore'])->name('news.store');
        Route::get('/edit/{id}', [NewsController::class, 'newsEdit'])->name('news.edit');
        Route::post('/update/{id}', [NewsController::class, 'newsUpdate'])->name('news.update');
        Route::get('/delete/{id}', [NewsController::class, 'newsDelete'])->name('news.delete');
    });

    Route::prefix('partner')->group(function () {
        Route::get('/view', [PartnerController::class, 'partnerView'])->name('all.partner');
        Route::get('/add', [PartnerController::class, 'partnerAdd'])->name('partner.add');
        Route::post('/store', [PartnerController::class, 'partnerStore'])->name('partner.store');
        Route::get('/edit/{id}', [PartnerController::class, 'partnerEdit'])->name('partner.edit');
        Route::post('/update/{id}', [PartnerController::class, 'partnerUpdate'])->name('partner.update');
        Route::get('/delete/{id}', [PartnerController::class, 'partnerDelete'])->name('partner.delete');
    });
    Route::prefix('ads')->group(function () {
        Route::get('/view', [AdsController::class, 'adsView'])->name('all.ads');
        Route::get('/add', [AdsController::class, 'adsAdd'])->name('ads.add');
        Route::post('/store', [AdsController::class, 'adsStore'])->name('ads.store');
        Route::get('/edit/{id}', [AdsController::class, 'adsEdit'])->name('ads.edit');
        Route::post('/update/{id}', [AdsController::class, 'adsUpdate'])->name('ads.update');
        Route::get('/delete/{id}', [AdsController::class, 'adsDelete'])->name('ads.delete');
    });
    Route::prefix('review')->group(function () {
        Route::get('/view', [ReviewController::class, 'reviewView'])->name('all.review');
        Route::get('/add', [ReviewController::class, 'reviewAdd'])->name('review.add');
        Route::post('/store', [ReviewController::class, 'reviewStore'])->name('review.store');
        Route::get('/edit/{id}', [ReviewController::class, 'reviewEdit'])->name('review.edit');
        Route::post('/update/{id}', [ReviewController::class, 'reviewUpdate'])->name('review.update');
        Route::get('/delete/{id}', [ReviewController::class, 'reviewDelete'])->name('review.delete');
    });

    Route::prefix('settings')->group(function () {
        Route::get('/view', [SettingController::class, 'settingView'])->name('all.setting');
        Route::post('/store', [SettingController::class, 'settingStore'])->name('setting.store');
        Route::get('/edit/{id}', [SettingController::class, 'settingEdit'])->name('setting.edit');
        Route::post('/update/{id}', [SettingController::class, 'settingUpdate'])->name('setting.update');

    });


});

Route::post('/newsletter', [ServiceController::class, 'regsterNews'])->name('regster.news');

Route::get('/regster/client/{product_id}', [FrontendClientController::class, 'addClientRating'])->name('add.client');

// client login and register
Route::get('/client/login', [FrontendClientController::class, 'loginView'])->name('client.login');
Route::post('/client/register', [FrontendClientController::class, 'registerClient'])->name('client.register');






