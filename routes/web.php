<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\DinningController;
use App\Models\Slider;
use App\Models\FoodSchedule;

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
    $date = Carbon::now();

    $currentDate = $date->format('l, jS F Y');

    //Get Sliders
    $sliders = Slider::where('active', '=', 1)->where('main_section', '=', 'mainsection')->orderBy('hour')->get();

    //Get Food
    $foods = FoodSchedule::where('active', '=', 1)->get();

    //Get Employees
    $slidersEmp = Slider::where('active', '=', 1)->where('main_section', '=', 'employeesection')->get();

    //Get Flyer's
    $slidersFlyer = Slider::where('active', '=', 1)->where('main_section', '=', 'flyersection')->get();
    return view('welcome', compact('currentDate', 'sliders', 'slidersEmp', 'foods', 'slidersFlyer'));
});

Route::get('/dashboard', [SliderController::class, 'getSliders'])->middleware(['auth'])->name('dashboard');
Route::post('/createSlider', [SliderController::class, 'createSlider'])->middleware(['auth'])->name('createSlider');
Route::post('/editSlider', [SliderController::class, 'editSlider'])->middleware(['auth'])->name('editSlider');
Route::post('/getDataSlider', [SliderController::class, 'getDataSlider'])->middleware(['auth'])->name('getDataSlider');
Route::post('/uploadImage', [SliderController::class, 'uploadImage'])->middleware(['auth'])->name('uploadImage');
Route::post('/toggleActivate', [SliderController::class, 'toggleActivate'])->middleware(['auth'])->name('toggleActivate');

Route::get('/dinning', [DinningController::class, 'getFoodList'])->middleware(['auth'])->name('admindinning');
Route::post('/getDataDinning', [DinningController::class, 'getDataDinning'])->middleware(['auth'])->name('getDataDinning');
Route::post('/editDinning', [DinningController::class, 'editDinning'])->middleware(['auth'])->name('editDinning');

//    return view('admin-dinning');
//})->middleware(['auth'])->name('admindinning');

Route::get('/adminemployees', function () {
    return view('admin-employees');
})->middleware(['auth'])->name('adminemployees');

Route::get('/breakfast', function () {
    return view('admin-breakfast');
})->middleware(['auth'])->name('adminbreakfast');

Route::get('/ourbars', function () {
    return view('admin-ourbars');
})->middleware(['auth'])->name('adminourbars');

Route::get('/flyer', function () {
    return view('admin-flyer');
})->middleware(['auth'])->name('adminflyer');


require __DIR__ . '/auth.php';
