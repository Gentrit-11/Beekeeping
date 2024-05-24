<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HiveController; // Add this line
use App\Http\Controllers\HoneyController; // Add this line
use App\Http\Controllers\HoneyCategoryController; // Add this line
use App\Http\Controllers\SellingHoneyController; // Add this line
use App\Http\Livewire\HiveSearch;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
// Routes for hive
// Route to display the form
Route::get('/insert-data', [HiveController::class, 'showForm'])->name('insert.form');
// Route to handle form submission
Route::post('/insert-data', [HiveController::class, 'insertData'])->name('insert.data');
//Routes for hive

//routes for honey
// Route to display the honey form
Route::get('/insert-honey', [HoneyController::class, 'showFormHoney'])->name('insert.formHoney');

// Route to handle honey form submission
Route::post('/insert-honey', [HoneyController::class, 'insertHoney'])->name('insert.honey');

//Routes for honey cataegories

Route::get('/insert-honey-category', [HoneyCategoryController::class, 'showFormCategory'])->name('insert.formCategory');

// Route to handle form submission and store HoneyCategory data
Route::post('/insert-honey-category', [HoneyCategoryController::class, 'insertHoneyCategory'])->name('insert.honey.category');



Route::get('/sell-honey', [SellingHoneyController::class, 'showSellHoneyForm'])->name('sell-honey.form');
Route::post('/sell-honey', [SellingHoneyController::class, 'sellHoney'])->name('sell-honey.submit');



// Route to display all hives
Route::get('/showHives', [HiveController::class, 'showHives'])->name('hives.showHives');
Route::get('/hive-search', [HiveController::class, 'search'])->name('hive.search');


// Route to display all Honey
Route::get('/showHoney', [HoneyController::class, 'showHoney'])->name('hives.showHoney');


// Route to display all sellings
Route::get('/showSellings', [SellingHoneyController::class, 'showSellings'])->name('hives.showSellings');


Route::post('/showHoney/{sellingId}', [SellingHoneyController::class, 'returnHoney'])->name('returnHoney');

Route::get('/editSelling/{id}', [SellingHoneyController::class, 'editSelling'])->name('editSelling');
Route::put('/updateSelling/{sellingId}', [SellingHoneyController::class, 'updateSelling'])->name('updateSelling');



// Edit Honey Route
Route::get('/editHoney/{id}', [HoneyController::class, 'editHoney'])->name('editHoney');

// Update Honey Route
Route::put('/updateHoney/{id}', [HoneyController::class, 'updateHoney'])->name('updateHoney');

// Delete Honey Route
Route::delete('/deleteHoney/{id}', [HoneyController::class, 'deleteHoney'])->name('deleteHoney');


// Edit Hive Route
Route::get('/editHive/{id}', [HiveController::class, 'editHive'])->name('editHive');

// Update Hive Route
Route::put('/updateHive/{id}', [HiveController::class, 'updateHive'])->name('updateHive');

// Delete Hive Route
Route::delete('/deleteHive/{id}', [HiveController::class, 'deleteHive'])->name('deleteHive');
