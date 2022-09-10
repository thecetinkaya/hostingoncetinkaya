<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ContactController;
use \App\Http\Controllers\SkillsController;
use \App\Http\Controllers\PortfolioController;
use \App\Http\Controllers\EducationController;
use \App\Http\Controllers\DashboardController;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\ExperienceController;
use \App\Http\Controllers\MailController;
use \App\Mail\DemoMail;



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
Route::middleware(['auth'])->controller(DashboardController::class)->group(function(){
    Route::get('/admin/dashboard','count');
});
Route::controller(HomeController::class)->group(function(){
    Route::get('/','index');
    Route::get('/portfolyom','portfolio');
    Route::get('/portfolyom/{id}','portfolioView');
});
Route::controller(ContactController::class)->group(function(){    
    Route::post('iletisim','contactPost');
});


Route::middleware(['auth'])->controller(ContactController::class)->group(function(){
    Route::get('/admin/mesajlar','index');
    Route::get('/admin/mesajlar/goruntule/{id}','view');
    Route::get('/admin/mesajlar/sil/{id}','delete');
});

Route::middleware(['auth'])->controller(SkillsController::class)->group(function(){
    Route::get('/admin/icerikyonetimi/becerilerim','index');
    Route::get('/admin/icerikyonetimi/becerilerim/ekle','addSkill');
    Route::post('/admin/icerikyonetimi/becerilerim/ekle','addSkillPost');
    Route::get('/admin/icerikyonetimi/becerilerim/sil/{id}','deleteSkill');
    Route::get('/admin/icerikyonetimi/becerilerim/duzenle/{id}','viewSkill');
    Route::post('/admin/icerikyonetimi/becerilerim/duzenle/{id}','editSkill');

});

Route::middleware(['auth'])->controller(PortfolioController::class)->group(function(){
    Route::get('/admin/icerikyonetimi/portfolyom','index');
    Route::get('/admin/icerikyonetimi/portfolyom/ekle','addPortfolio');
    Route::post('/admin/icerikyonetimi/portfolyom/ekle','addPortfolioPost');
    Route::get('/admin/icerikyonetimi/portfolyom/sil/{id}','deletePortfolio');
    Route::get('/admin/icerikyonetimi/portfolyom/duzenle/{id}','viewPortfolio');
    Route::post('/admin/icerikyonetimi/portfolyom/duzenle/{id}','editPortfolio');

});

Route::middleware(['auth'])->controller(EducationController::class)->group(function(){
    Route::get('/admin/icerikyonetimi/egitimim','index');
    Route::get('/admin/icerikyonetimi/egitimim/ekle','addEducation');
    Route::post('/admin/icerikyonetimi/egitimim/ekle','addEducationPost');
    Route::get('/admin/icerikyonetimi/egitimim/sil/{id}','deleteEducation');
    Route::get('/admin/icerikyonetimi/egitimim/duzenle/{id}','viewEducation');
    Route::post('/admin/icerikyonetimi/egitimim/duzenle/{id}','editEducation');

});

Route::middleware(['auth'])->controller(ExperienceController::class)->group(function(){
    Route::get('/admin/icerikyonetimi/deneyimim','index');
    Route::get('/admin/icerikyonetimi/deneyimim/ekle','addExperience');
    Route::post('/admin/icerikyonetimi/deneyimim/ekle','addExperiencePost');
    Route::get('/admin/icerikyonetimi/deneyimim/sil/{id}','deleteExperience');
    Route::get('/admin/icerikyonetimi/deneyimim/duzenle/{id}','viewExperience');
    Route::post('/admin/icerikyonetimi/deneyimim/duzenle/{id}','editExperience');

});

Route::controller(LoginController::class)->group(function(){
    Route::post('/login','authenticate');
    Route::get('/admin/logout','logout');
});

Route::get('/login', function(){
    return view('auth.login');
})->name('login');
