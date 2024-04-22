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

Auth::routes();


// routes/web.php
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
//    Route::get('/', function()
//    {
//        return View::make('site.home');
//    });

//    Route::get('contact', function()
//    {
//        return View::make('site.contact');
//    });


    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


    //route for search
    Route::get('/search', [App\Http\Controllers\PostsController::class, 'search'])->name('search');


    //route for about
    Route::get('/about', [App\Http\Controllers\AboutController::class, 'show'])->name('about_show');


    //route for branch
    Route::get('/branch/{slug}', [App\Http\Controllers\BranchController::class, 'show'])->name('branch_show');


    //route for header
    Route::get('/', [App\Http\Controllers\HeaderController::class, 'show'])->name('header_show');


    //rout for Partner
    Route::get('/partners', [App\Http\Controllers\PartnerController::class, 'indexWeb'])->name('partner_show');
    Route::get('/partner/{id}', [App\Http\Controllers\PartnerController::class, 'show'])->name('product_show');


    //route for contact
    Route::get('/contact', [App\Http\Controllers\ContactUsController::class, 'create'])->name('contact_create');
    Route::post('/contact/store', [App\Http\Controllers\ContactUsController::class, 'store'])->name('contact_store');

    //route for footer
   // Route::get('/footer', [App\Http\Controllers\FooterController::class, 'show'])->name('footer_show');


    Route::group(['prefix'=>'admin'],function(){
        //rout for about
        Route::get('/abouts', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
        Route::get('/aboutTrashed', [App\Http\Controllers\AboutController::class, 'aboutTrashed'])->name('about_trashed');
        Route::get('/about/create', [App\Http\Controllers\AboutController::class, 'create'])->name('about_create');
        Route::post('/about/store', [App\Http\Controllers\AboutController::class, 'store'])->name('about_store');
        Route::get('/about/edit/{id}', [App\Http\Controllers\AboutController::class, 'edit'])->name('about_edit');
        Route::post('/about/update/{id}', [App\Http\Controllers\AboutController::class, 'update'])->name('about_update');
        Route::get('/about/delete/{id}', [App\Http\Controllers\AboutController::class, 'destroy'])->name('about_delete');
        Route::get('/about/softdelete/{id}', [App\Http\Controllers\AboutController::class, 'softDestroy'])->name('about_softdelete');
        Route::get('/about/restore/{id}', [App\Http\Controllers\AboutController::class, 'restore'])->name('about_restore');


        //rout for  AboutOurTeam
        Route::get('/aboutTeam', [App\Http\Controllers\AboutOurTeamController::class, 'index'])->name('aboutTeam');
        Route::get('/aboutOurTeamTrashed', [App\Http\Controllers\AboutOurTeamController::class, 'aboutTrashed'])->name('aboutOurTeam_trashed');
        Route::get('/aboutOurTeam/create', [App\Http\Controllers\AboutOurTeamController::class, 'create'])->name('aboutOurTeam_create');
        Route::post('/aboutOurTeam/store', [App\Http\Controllers\AboutOurTeamController::class, 'store'])->name('aboutOurTeam_store');
        Route::get('/aboutOurTeam/edit/{id}', [App\Http\Controllers\AboutOurTeamController::class, 'edit'])->name('aboutOurTeam_edit');
        Route::post('/aboutOurTeam/update/{id}', [App\Http\Controllers\AboutOurTeamController::class, 'update'])->name('aboutOurTeam_update');
        Route::get('/aboutOurTeam/delete/{id}', [App\Http\Controllers\AboutOurTeamController::class, 'destroy'])->name('aboutOurTeam_delete');
        Route::get('/aboutOurTeam/softdelete/{id}', [App\Http\Controllers\AboutOurTeamController::class, 'softDestroy'])->name('aboutOurTeam_softdelete');
        Route::get('/aboutOurTeam/restore/{id}', [App\Http\Controllers\AboutOurTeamController::class, 'restore'])->name('aboutOurTeam_restore');



        //rout for  AboutFutureController
        Route::get('/aboutFutures', [App\Http\Controllers\AboutFutureController::class, 'index'])->name('aboutFutures');
        Route::get('/aboutFutureTrashed', [App\Http\Controllers\AboutFutureController::class, 'aboutTrashed'])->name('aboutFuture_trashed');
        Route::get('/aboutFuture/create', [App\Http\Controllers\AboutFutureController::class, 'create'])->name('aboutFuture_create');
        Route::post('/aboutFuture/store', [App\Http\Controllers\AboutFutureController::class, 'store'])->name('aboutFuture_store');
        Route::get('/aboutFuture/edit/{id}', [App\Http\Controllers\AboutFutureController::class, 'edit'])->name('aboutFuture_edit');
        Route::post('/aboutFuture/update/{id}', [App\Http\Controllers\AboutFutureController::class, 'update'])->name('aboutFuture_update');
        Route::get('/aboutFuture/delete/{id}', [App\Http\Controllers\AboutFutureController::class, 'destroy'])->name('aboutFuture_delete');
        Route::get('/aboutFuture/softdelete/{id}', [App\Http\Controllers\AboutFutureController::class, 'softDestroy'])->name('aboutFuture_softdelete');
        Route::get('/aboutFuture/restore/{id}', [App\Http\Controllers\AboutFutureController::class, 'restore'])->name('aboutFuture_restore');


        //rout for branch
        Route::get('/branchs', [App\Http\Controllers\BranchController::class, 'index'])->name('branch');
        Route::get('/branchTrashed', [App\Http\Controllers\BranchController::class, 'branchTrashed'])->name('branch_trashed');
        Route::get('/branch/create', [App\Http\Controllers\BranchController::class, 'create'])->name('branch_create');
        Route::post('/branch/store', [App\Http\Controllers\BranchController::class, 'store'])->name('branch_store');
        Route::get('/branch/edit/{id}', [App\Http\Controllers\BranchController::class, 'edit'])->name('branch_edit');
        Route::post('/branch/update/{id}', [App\Http\Controllers\BranchController::class, 'update'])->name('branch_update');
        Route::get('/branch/delete/{id}', [App\Http\Controllers\BranchController::class, 'destroy'])->name('branch_delete');
        Route::get('/branch/softdelete/{id}', [App\Http\Controllers\BranchController::class, 'softDestroy'])->name('branch_softdelete');
        Route::get('/branch/restore/{id}', [App\Http\Controllers\BranchController::class, 'restore'])->name('branch_restore');


        //rout for BranchTeam
        Route::get('/branchsTeam', [App\Http\Controllers\BranchTeamController::class, 'index'])->name('branchTeam');
        Route::get('/branchTeamTrashed', [App\Http\Controllers\BranchTeamController::class, 'branchTrashed'])->name('branchTeam_trashed');
        Route::get('/branchTeam/create', [App\Http\Controllers\BranchTeamController::class, 'create'])->name('branchTeam_create');
        Route::post('/branchTeam/store', [App\Http\Controllers\BranchTeamController::class, 'store'])->name('branchTeam_store');
        Route::get('/branchTeam/edit/{id}', [App\Http\Controllers\BranchTeamController::class, 'edit'])->name('branchTeam_edit');
        Route::post('/branchTeam/update/{id}', [App\Http\Controllers\BranchTeamController::class, 'update'])->name('branchTeam_update');
        Route::get('/branchTeam/delete/{id}', [App\Http\Controllers\BranchTeamController::class, 'destroy'])->name('branchTeam_delete');
        Route::get('/branchTeam/softdelete/{id}', [App\Http\Controllers\BranchTeamController::class, 'softDestroy'])->name('branchTeam_softdelete');
        Route::get('/branchTeam/restore/{id}', [App\Http\Controllers\BranchTeamController::class, 'restore'])->name('branchTeam_restore');


        //rout for BranchFuture
        Route::get('/branchsFuture', [App\Http\Controllers\BranchFutureController::class, 'index'])->name('branchFuture');
        Route::get('/branchFutureTrashed', [App\Http\Controllers\BranchFutureController::class, 'branchTrashed'])->name('branchFuture_trashed');
        Route::get('/branchFuture/create', [App\Http\Controllers\BranchFutureController::class, 'create'])->name('branchFuture_create');
        Route::post('/branchFuture/store', [App\Http\Controllers\BranchFutureController::class, 'store'])->name('branchFuture_store');
        Route::get('/branchFuture/edit/{id}', [App\Http\Controllers\BranchFutureController::class, 'edit'])->name('branchFuture_edit');
        Route::post('/branchFuture/update/{id}', [App\Http\Controllers\BranchFutureController::class, 'update'])->name('branchFuture_update');
        Route::get('/branchFuture/delete/{id}', [App\Http\Controllers\BranchFutureController::class, 'destroy'])->name('branchFuture_delete');
        Route::get('/branchFuture/softdelete/{id}', [App\Http\Controllers\BranchFutureController::class, 'softDestroy'])->name('branchFuture_softdelete');
        Route::get('/branchFuture/restore/{id}', [App\Http\Controllers\BranchFutureController::class, 'restore'])->name('branchFuture_restore');


        //rout for header
        Route::get('/headers', [App\Http\Controllers\HeaderController::class, 'index'])->name('headers');
        Route::get('/headers/create', [App\Http\Controllers\HeaderController::class, 'create'])->name('headers_create');
        Route::post('/headers/store', [App\Http\Controllers\HeaderController::class, 'store'])->name('headers_store');
        Route::get('/headers/edit/{id}', [App\Http\Controllers\HeaderController::class, 'edit'])->name('headers_edit');
        Route::post('/headers/update/{id}', [App\Http\Controllers\HeaderController::class, 'update'])->name('headers_update');
        Route::get('/headers/delete/{id}', [App\Http\Controllers\HeaderController::class, 'destroy'])->name('headers_destroy');


        //rout for Partner
        Route::get('/partners', [App\Http\Controllers\PartnerController::class, 'index'])->name('partner');
        Route::get('/partnerTrashed', [App\Http\Controllers\PartnerController::class, 'partnerTrashed'])->name('partner_trashed');
        Route::get('/partner/create', [App\Http\Controllers\PartnerController::class, 'create'])->name('partner_create');
        Route::post('/partner/store', [App\Http\Controllers\PartnerController::class, 'store'])->name('partner_store');
        Route::get('/partner/edit/{id}', [App\Http\Controllers\PartnerController::class, 'edit'])->name('partner_edit');
        Route::post('/partner/update/{id}', [App\Http\Controllers\PartnerController::class, 'update'])->name('partner_update');
        Route::get('/partner/delete/{id}', [App\Http\Controllers\PartnerController::class, 'destroy'])->name('partner_delete');
        Route::get('/partner/softdelete/{id}', [App\Http\Controllers\PartnerController::class, 'softDestroy'])->name('partner_softdelete');
        Route::get('/partner/restore/{id}', [App\Http\Controllers\PartnerController::class, 'restore'])->name('partner_restore');


        //rout for Product
        Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products');
        Route::get('/productTrashed', [App\Http\Controllers\ProductController::class, 'productTrashed'])->name('product_trashed');
        Route::get('/product/create', [App\Http\Controllers\ProductController::class, 'create'])->name('product_create');
        Route::post('/product/store', [App\Http\Controllers\ProductController::class, 'store'])->name('product_store');
        Route::get('/product/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('product_edit');
        Route::post('/product/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('product_update');
        Route::get('/product/delete/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product_delete');
        Route::get('/product/softdelete/{id}', [App\Http\Controllers\ProductController::class, 'softDestroy'])->name('product_softdelete');
        Route::get('/product/restore/{id}', [App\Http\Controllers\ProductController::class, 'restore'])->name('product_restore');


        //rout for ContactUs
        Route::get('/contacts', [App\Http\Controllers\ContactUsController::class, 'index'])->name('contacts');
        Route::get('/contactTrashed', [App\Http\Controllers\ContactUsController::class, 'contactTrashed'])->name('contact_trashed');
        Route::get('/contact/delete/{id}', [App\Http\Controllers\ContactUsController::class, 'destroy'])->name('contact_delete');
        Route::get('/contact/softdelete/{id}', [App\Http\Controllers\ContactUsController::class, 'softDestroy'])->name('contact_softdelete');
        Route::get('/contact/restore/{id}', [App\Http\Controllers\ContactUsController::class, 'restore'])->name('contact_restore');

        //rout for Footer
        Route::get('/footer', [App\Http\Controllers\FooterController::class, 'index'])->name('footer');
        Route::get('/footerTrashed', [App\Http\Controllers\FooterController::class, 'footerTrashed'])->name('footer_trashed');
        Route::get('/footer/create', [App\Http\Controllers\FooterController::class, 'create'])->name('footer_create');
        Route::post('/footer/store', [App\Http\Controllers\FooterController::class, 'store'])->name('footer_store');
        Route::get('/footer/edit/{id}', [App\Http\Controllers\FooterController::class, 'edit'])->name('footer_edit');
        Route::post('/footer/update/{id}', [App\Http\Controllers\FooterController::class, 'update'])->name('footer_update');
        Route::get('/footer/delete/{id}', [App\Http\Controllers\FooterController::class, 'destroy'])->name('footer_delete');
        Route::get('/footer/softdelete/{id}', [App\Http\Controllers\FooterController::class, 'softDestroy'])->name('footer_softdelete');
        Route::get('/footer/restore/{id}', [App\Http\Controllers\FooterController::class, 'restore'])->name('footer_restore');


    });


    //rout for Product
    //Route::get('/partner/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('product_show');

});

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/
