<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/about-us', function () {
    return Inertia::render('aboutUs-new');
})->name('about');

Route::get('/leadership', function () {
    return Inertia::render('leadership');
})->name('leadership');

Route::get('/service', function () {
    return Inertia::render('service-new');
})->name('service');

Route::get('/project', function () {
    return Inertia::render('projects');
})->name('project');

Route::get('/cyber-security-information', function () {
    return Inertia::render('cyberInfo');
})->name('cyberInfo');

Route::get('/management/Henry-Adrianto', function () {
    return Inertia::render('management/henry');
})->name('henry');

Route::get('/management/Sutadi-Raharjo', function () {
    return Inertia::render('management/sutadi');
})->name('sutadi');

Route::get('/management/Suwoto', function () {
    return Inertia::render('management/suwoto');
})->name('suwoto');

Route::get('/management/Anggi-Simatupang', function () {
    return Inertia::render('management/anggi');
})->name('anggi');

Route::get('/contact-us', function () {
    return Inertia::render('contact');
})->name('contact');

Route::post(
    '/submit-inquiry-form',
    [FrontController::class, 'submitEmail']
)->name('submitEmail');

// start project
// Route::get('/project/enerco-management', function () {
//     return Inertia::render('projects/enerco-management');
// })->name('project-enerco-1');

// Route::get('/project/enerco-service', function () {
//     return Inertia::render('projects/enerco-service');
// })->name('project-enerco-2');

// Route::get('/project/sumba-msm', function () {
//     return Inertia::render('projects/sumba-msm');
// })->name('sumba-msm');

// Route::get('/project/sumba-msm-pmc', function () {
//     return Inertia::render('projects/sumba-msm-pmc');
// })->name('sumba-msm-pmc');

// Route::get('/project/pertaima-rdmp-v', function () {
//     return Inertia::render('projects/pertamina-rdmp-v');
// })->name('pertamina-rdmp-v');

// Route::get('/project/lotte-line-wp03', function () {
//     return Inertia::render('projects/lotte-line-wp03');
// })->name('lotte-line-wp03');

// Route::get('/project/lotte-line-wp03-mps', function () {
//     return Inertia::render('projects/lotte-line-wp03-mps');
// })->name('lotte-line-wp03-mps');

// Route::get('/project/jadestone-akatara-mps', function () {
//     return Inertia::render('projects/akatara-mps');
// })->name('jadestone-akatara-mps');

// Route::get('/project/air-product', function () {
//     return Inertia::render('projects/mpap-1');
// })->name('mpap-1');

// Route::get('/project/unilever-indonesia-const-support', function () {
//     return Inertia::render('projects/unilever-1');
// })->name('unilever-1');

// Route::get('/project/catalyst-loading', function () {
//     return Inertia::render('projects/catalyst-1');
// })->name('catalyst-1');

// Route::get('/project/catalyst-loading-t', function () {
//     return Inertia::render('projects/catalyst-2');
// })->name('catalyst-2');
// end project

// new project
Route::get('/project/line-1', function () {
    return Inertia::render('projects/line-1');
})->name('line-1');
Route::get('/project/msm-1', function () {
    return Inertia::render('projects/msm-1');
})->name('msm-1');
Route::get('/project/rdmp-034', function () {
    return Inertia::render('projects/rdmp-034');
})->name('rdmp-034');
Route::get('/project/rdmp-032', function () {
    return Inertia::render('projects/rdmp-032');
})->name('rdmp-032');
Route::get('/project/pertamina-1', function () {
    return Inertia::render('projects/pertamina-1');
})->name('pertamina-1');
Route::get('/project/ap-1', function () {
    return Inertia::render('projects/ap-1');
})->name('ap-1');
Route::get('/project/ap-2', function () {
    return Inertia::render('projects/ap-2');
})->name('ap-2');
Route::get('/project/ap-3', function () {
    return Inertia::render('projects/ap-3');
})->name('ap-3');
Route::get('/project/tangguh-1', function () {
    return Inertia::render('projects/tangguh-1');
})->name('tangguh-1');
Route::get('/project/line-2', function () {
    return Inertia::render('projects/line-2');
})->name('line-2');
Route::get('/project/ap-4', function () {
    return Inertia::render('projects/ap-4');
})->name('ap-4');
// end project



Route::get('/equipment', function () {
    return Inertia::render('equipment/index');
})->name('equipment.index');

Route::get(
    '/ecatalogue',
    [FrontController::class, 'ecatalogue']
)->name('ecatalogue');

Route::get(
    '/catalyst-loading',
    [FrontController::class, 'catalystLoading']
)->name('catalyst-loading');
