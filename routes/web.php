<?php

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

Route::get('/', function () {
    return view ('Home');
});

Route::get('/home4', function () {
    return view ('Home4');
});

Route::get('/home5', function () {
    return view ('Home5');
});

Route::get('/home6', function () {
    return view ('Home6');
});

Route::get('/home7', function () {
    return view ('Home7');
});

Route::get('/home8', function () {
    return view ('home8jewellery');
});

Route::get('/home9', function () {
    return view ('home9parallax');
});

Route::get('/home10', function () {
    return view ('home10minimal');
});

Route::get('/home11', function () {
    return view ('Home11grid');
});

Route::get('/home12', function () {
    return view ('Home12category');
});

Route::get('/home13', function () {
    return view ('Home13autoparts');
});

Route::get('/home14', function () {
    return view ('Home14bags');
});

Route::get('/home15', function () {
    return view ('Home15funiture');
});




Route::get('/index', function () {
    return view ('index');
});

Route::get('/login', function () {
    return view ('login');
});

Route::get('/lookbook1', function () {
    return view ('loockbook1');
});

Route::get('/lookbook2', function () {
    return view ('lookbook2');
});




Route::get('/productlayout1', function () {
    return view ('product-layout-1');
});

Route::get('/productlayout2', function () {
    return view ('product-layout-2');
});

Route::get('/productlayout3', function () {
    return view ('product-layout-3');
});

Route::get('/productpreorders', function () {
    return view ('product-pre-orders');
});

Route::get('/productquatitymessage', function () {
    return view ('product-quantity-message');
});

Route::get('/productshippingmessage', function () {
    return view ('product-shipping-message');
});

Route::get('/productswatchesstyle', function () {
    return view ('product-swatches-style');
});

Route::get('/productvideo', function () {
    return view ('product-video');
});

Route::get('/productvisitorsoldcount', function () {
    return view ('product-visitor-sold-count');
});

Route::get('/productwithbottomthumbs', function () {
    return view ('product-with-bottom-thumbs');
});

Route::get('/productwithcolorswatch', function () {
    return view ('product-with-color-swatch');
});

Route::get('/productwithdropdown', function () {
    return view ('product-with-dropdown');
});

Route::get('/productwithimageswatch', function () {
    return view ('product-with-image-swatch');
});

Route::get('/productwithleftthumbs', function () {
    return view ('product-with-left-thumbs');
});

Route::get('/productwithleftthumbs', function () {
    return view ('product-with-left-thumbs');
});

Route::get('/productwithrightthumbs', function () {
    return view ('product-with-right-thumbs');
});

Route::get('/productwithroundedsquare', function () {
    return view ('product-with-rounded-square');
});

Route::get('/productwithvariantimage', function () {
    return view ('product-with-variant-image');
});

Route::get('/productwithzoomlightbox', function () {
    return view ('product-with-zoom-lightbox');
});

Route::get('/productaccordion', function () {
    return view ('productaccordion');
});

Route::get('/productcountdown', function () {
    return view ('productcountdown');
});

Route::get('/productdiscount', function () {
    return view ('productdiscount');
});

Route::get('/producthoverinfo', function () {
    return view ('producthoverinfo');
});

Route::get('/productlabelsdetail', function () {
    return view ('productlabelsdetail');
});


Route::get('/register', function () {
    return view ('register');
});

Route::get('/shop1', function () {
    return view ('shop-fullwidth');
});

Route::get('/shop3', function () {
    return view ('shop-grid-3');
});

Route::get('/shop4', function () {
    return view ('shop-grid-4');
});

Route::get('/shop5', function () {
    return view ('shop-grid-5');
});

Route::get('/shop6', function () {
    return view ('shop-grid-6');
});

Route::get('/shop7', function () {
    return view ('shop-grid-7');
});

Route::get('/shop8', function () {
    return view ('shop-left-sidebar');
});

Route::get('/shop9', function () {
    return view ('shop-listview');
});

Route::get('/short', function () {
    return view ('short-description');
});

Route::get('/size', function () {
    return view ('size-guide');
});

Route::get('/swatches', function () {
    return view ('swatches-style');
});

Route::get('/wishlist', function () {
    return view ('wishlist');
});

Route::get('/faqs', function () {
    return view ('faqs');
});

Route::get('/course', function () {
    return view ('course');
});

Route::get('/contact', function () {
    return view ('contact-us');
});

Route::get('/compare', function () {
    return view ('compare');
});

Route::get('/compare2', function () {
    return view ('compare-variant2');
});

Route::get('/compare1', function () {
    return view ('compare-variant1');
});

Route::get('/coming', function () {
    return view ('coming-soon');
});

Route::get('/collection', function () {
    return view ('collection-page');
});

Route::get('/checkout', function () {
    return view ('checkout');
});

Route::get('/compare1', function () {
    return view ('compare-variant2');
});

Route::get('/cart', function () {
    return view ('cart');
});

Route::get('/cart1', function () {
    return view ('cart-variant1');
});

Route::get('/cart2', function () {
    return view ('cart-variant2');
});

Route::get('/blog', function () {
    return view ('blog-right-sidebar');
});

Route::get('/blog1', function () {
    return view ('blog-left-sidebar');
});

Route::get('/blog2', function () {
    return view ('blog-grid-view');
});

Route::get('/blog3', function () {
    return view ('blog-fullwidth');
});

Route::get('/blog4', function () {
    return view ('blog-article');
});

Route::get('/404', function () {
    return view ('404');
});

Route::get('/about', function () {
    return view ('About');
});






