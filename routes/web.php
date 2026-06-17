<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


#home
Route::get('/', [FrontController::class, 'index'])->name('index');

Route::get('/dashboard', function () {
    return redirect('/admin');
})->name('dashboard');

#who we are
Route::get('/who-we-are', [FrontController::class, 'whoWeAre'])->name('whoWeAre');
Route::get('/who-we-are/our-corporate-structure', [FrontController::class, 'corporateStructure'])->name('corporateStructure');
Route::get('/who-we-are/clients-partners', [FrontController::class, 'clientPartner'])->name('clientPartner');

#what we do
Route::get('/what-we-do', [FrontController::class, 'whatWeDo'])->name('whatWeDo');
Route::get('/what-we-do/construction-fabrication', [FrontController::class, 'constructionFabrication'])->name('constructionFabrication');
Route::get('/what-we-do/catalyst-loading', [FrontController::class, 'catalystLoading'])->name('catalyst-loading');
Route::get('/what-we-do/plant-maintenance', [FrontController::class, 'plantMaintenance'])->name('plantMaintenance');
Route::get('/raya-konstruksi-portfolio', [FrontController::class, 'portfolio'])->name('portfolio');
// Route::get('/what-we-do/raya-konstruksi-portfolio-soil', [FrontController::class, 'portfolioSoil'])->name('portfolio-soil');
Route::get('/what-we-do/heavy-rental-equipment', [FrontController::class, 'heavyRental'])->name('heavyRental');
Route::get('/equipment', [FrontController::class, 'equipment'])->name('equipment');
Route::get('/ecatalogue', [FrontController::class, 'ecatalogue'])->name('ecatalogue');
Route::get('/quality', [FrontController::class, 'quality'])->name('quality');

#sustainability
Route::get('/sustainability', [FrontController::class, 'sustainability'])->name('sustainability');
Route::get('/sustainability/health-n-safety', [FrontController::class, 'safety'])->name('safety');
Route::get('/sustainability/corporate-social-responsibility', [FrontController::class, 'respon'])->name('respon');

#careers
Route::get('/careers', [FrontController::class, 'career'])->name('career');
Route::get('/news-n-event', [FrontController::class, 'news'])->name('news');
Route::get('/news-n-event/{slug}', [FrontController::class, 'newsDetail'])->name('newsDetail');

#contact us
Route::get('/contact-us', [FrontController::class, 'contactUs'])->name('contactUs');

# csi
Route::get('/cyber-security-information', function () {
    return Inertia::render('1cyberInfo');
})->name('cyberInfo');

#inquery
Route::post(
    '/submit-inquiry-form',
    [FrontController::class, 'submitEmail']
)->name('submitEmail')->middleware('throttle:inquiry');

require 'auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});