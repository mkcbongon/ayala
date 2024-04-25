<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EstatesController;
use App\Http\Controllers\ResidencesController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\BotManController;

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
//     return view('home');
// });
Route::match(['get', 'post'], '/botman', 'App\Http\Controllers\BotManController@handle');

// AUTH
Route::post('/login', [AuthController::class, 'login']);
Route::post('/signup', [AuthController::class, 'signup']);
Route::get('/signup', [HomeController::class, 'signup'])->name('signup');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ADMIN
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('admin');
Route::get('/schedule', [AdminController::class, 'schedule'])->name('schedule')->middleware('admin');
Route::get('/requests', [AdminController::class, 'requests'])->name('requests')->middleware('admin');
Route::post('/submitreq', [AdminController::class, 'submitreq'])->name('submitreq');
Route::post('accept/{id}', [AdminController::class, 'accept'])->name('accept');
Route::post('decline/{id}', [AdminController::class, 'decline'])->name('decline');
Route::post('/uploadreq', [AdminController::class, 'uploadreq'])->name('uploadreq');
Route::get('/chat', [AdminController::class, 'chat'])->name('chat')->middleware('admin');
Route::put('/addchat', [AdminController::class, 'addchat'])->name('addchat');
Route::delete('/deletechat/{id}', [AdminController::class, 'deletechat'])->name('deletechat');

Route::get('/premier-properties', [AdminController::class, 'premierproperties'])->name('premierproperties')->middleware('admin');
Route::post('/addproperty', [AdminController::class, 'addproperty'])->name('addproperty');
Route::put('/editproperty/{id}', [AdminController::class, 'editproperty'])->name('editproperty');
Route::delete('/deleteproperty/{id}', [AdminController::class, 'deleteproperty'])->name('deleteproperty');

Route::get('/other', [AdminController::class, 'other'])->name('other')->middleware('admin');
Route::post('/editother/{id}', [AdminController::class, 'editother'])->name('editother');
Route::post('/addnearby', [AdminController::class, 'addnearby'])->name('addnearby');
Route::put('/editnearby/{id}', [AdminController::class, 'editnearby'])->name('editnearby');
// Route::put('/editnearby', [AdminController::class, 'editnearby'])->name('editnearby.no_id');

Route::put('/editamenity/{id}', [AdminController::class, 'editamenity'])->name('editamenity');
Route::put('/editvideo/{id}', [AdminController::class, 'editvideo'])->name('editvideo');

Route::put('/add_img', [AdminController::class, 'add_img'])->name('add_img');
Route::put('/edit_img/{id}', [AdminController::class, 'edit_img'])->name('edit_img');
Route::put('/display/{id}', [AdminController::class, 'display'])->name('display');
Route::delete('/deleteimg/{id}', [AdminController::class, 'deleteimg'])->name('deleteimg');


// HOME
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/adminhome', [HomeController::class, 'adminhome'])->name('adminhome')->middleware('admin');
Route::post('/updatehome', [HomeController::class, 'updatehome'])->name('updatehome');
Route::post('/updatebg', [HomeController::class, 'updatebg'])->name('updatebg');
Route::post('/changeImg', [HomeController::class, 'changeImg'])->name('changeImg');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/submitform', [HomeController::class, 'submitform'])->name('submitform');

// ABOUT US
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/our-legacy', [AboutController::class, 'ourlegacy'])->name('ourlegacy');
Route::get('/adminlegacy', [AboutController::class, 'adminlegacy'])->name('adminlegacy')->middleware('admin');
Route::post('/updatevideo', [AboutController::class, 'updatevideo'])->name('updatevideo');
Route::post('/updatelegacy', [AboutController::class, 'updatelegacy'])->name('updatelegacy');

Route::get('/admincareers', [AboutController::class, 'admincareers'])->name('admincareers')->middleware('admin');
Route::post('/updatecareer', [AboutController::class, 'updatecareer'])->name('updatecareer');
Route::post('/updateimg', [AboutController::class, 'updateimg'])->name('updateimg');
Route::get('/careers', [AboutController::class, 'careers'])->name('careers');
// Route::post('/submit-form', [AboutController::class, 'submitForm'])->name('submit.form');
Route::get('/awards', [AboutController::class, 'awards'])->name('awards');




Route::get('/', [HomeController::class, 'index']);



Route::get('/estates', [EstatesController::class, 'estates'])->name('estates');
Route::get('/makaticentral', [EstatesController::class, 'makaticentral'])->name('makaticentral');







Route::get('/residences', [ResidencesController::class, 'residences'])->name('residences');
Route::get('/adminresidences', [ResidencesController::class, 'adminresidences'])->name('adminresidences')->middleware('admin');
Route::post('/updateres', [ResidencesController::class, 'updateres'])->name('updateres');
Route::post('/updateresimg', [ResidencesController::class, 'updateresimg'])->name('updateresimg');


Route::get('/premier', [ResidencesController::class, 'premier'])->name('premier');
Route::get('/adminpremier', [ResidencesController::class, 'adminpremier'])->name('adminpremier')->middleware('admin');
Route::post('/updateimgpremier', [ResidencesController::class, 'updateimgpremier'])->name('updateimgpremier');
Route::post('/createpremier', [ResidencesController::class, 'createpremier'])->name('createpremier');
Route::post('/updatepremier', [ResidencesController::class, 'updatepremier'])->name('updatepremier');
Route::post('/editpremiersection/{id}', [ResidencesController::class, 'editpremiersection'])->name('editpremiersection');
Route::delete('/deletepremier/{id}', [ResidencesController::class, 'deletepremier'])->name('deletepremier');





Route::get('/properties/{category?}', [HomeController::class, 'properties'])->name('properties');
Route::get('/property/{id}', [HomeController::class, 'property'])->name('property');
Route::post('/submit-form', [HomeController::class, 'submitForm'])->name('submit.form');
Route::get('/search', [HomeController::class, 'search'])->name('search');

Route::post('/upload/property', [UploadController::class, 'propertyUpload'])->name('upload.property');
Route::get('/uploads', [UploadController::class, 'index'])->name('upload.index');

Route::post('/upload/accept/{id}', [UploadController::class, 'accept'])->name('upload.accept');
Route::post('/upload/decline/{id}', [UploadController::class, 'decline'])->name('upload.decline');

Route::put('/appoint', [AdminController::class, 'appoint'])->name('appoint');






// N O T NEEDED
Route::get('/alveo', [ResidencesController::class, 'alveo'])->name('alveo');
Route::get('/avida', [ResidencesController::class, 'avida'])->name('avida');
Route::get('/amaia', [ResidencesController::class, 'amaia'])->name('amaia');
Route::get('/bellavita', [ResidencesController::class, 'bellavita'])->name('bellavita');

Route::get('/adminmakati', [ResidencesController::class, 'adminmakati'])->name('adminmakati')->middleware('admin');
Route::get('/makati', [ResidencesController::class, 'makati'])->name('makati');

Route::get('/batangas', [ResidencesController::class, 'batangas'])->name('batangas');



