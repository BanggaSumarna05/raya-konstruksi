<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', [FrontController::class, 'index'])->name('index');

#who we are
Route::get('/who-we-are', [FrontController::class, 'whoWeAre'])->name('whoWeAre');
Route::get('/who-we-are/our-corporate-structure', [FrontController::class, 'corporateStructure'])->name('corporateStructure');
Route::get('/who-we-are/clients-partners', [FrontController::class, 'clientPartner'])->name('clientPartner');

#what we do
Route::get('/what-we-do', [FrontController::class, 'whatWeDo'])->name('whatWeDo');
Route::get('/what-we-do/catalyst-loading', [FrontController::class, 'catalystLoading'])->name('catalyst-loading');
Route::get('/what-we-do/plant-maintenance', [FrontController::class, 'plantMaintenance'])->name('plantMaintenance');

#sustainability
Route::get('/sustainability', [FrontController::class, 'sustainability'])->name('sustainability');
Route::get('/sustainability/health-n-safety', [FrontController::class, 'safety'])->name('safety');
Route::get('/sustainability/quality-n-risk-management', [FrontController::class, 'quality'])->name('quality');
Route::get('/sustainability/corporate-social-responsibility', [FrontController::class, 'respon'])->name('respon');

#careers
Route::get('/careers', [FrontController::class, 'career'])->name('career');
Route::get('/news-n-event', [FrontController::class, 'news'])->name('news');
Route::get('/news-n-event/detail', [FrontController::class, 'newsDetail'])->name('newsDetail');

#contact us
Route::get('/contact-us', [FrontController::class, 'contactUs'])->name('contactUs');

# csi
Route::get('/cyber-security-information', function () {
    return Inertia::render('1cyberInfo');
})->name('cyberInfo');



#admin side
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    // Blog CMS routes
    // Route::get('/blog', [App\Http\Controllers\Admin\BlogController::class, 'index'])->name('blog.index');
    // Route::get('/blog/create', [App\Http\Controllers\Admin\BlogController::class, 'create'])->name('blog.create');
    // Route::post('/blog', [App\Http\Controllers\Admin\BlogController::class, 'store'])->name('blog.store');
    // Route::get('/blog/{blog}/edit', [App\Http\Controllers\Admin\BlogController::class, 'edit'])->name('blog.edit');
    // Route::put('/blog/{blog}', [App\Http\Controllers\Admin\BlogController::class, 'update'])->name('blog.update');
    // Route::delete('/blog/{blog}', [App\Http\Controllers\Admin\BlogController::class, 'destroy'])->name('blog.destroy');

    // Route::resource('/blog',)
});

Route::post(
    '/submit-inquiry-form',
    [FrontController::class, 'submitEmail']
)->name('submitEmail');
