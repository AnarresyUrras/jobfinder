<?php

use App\Http\Controllers\JobofferController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Models\Company;
use App\Models\Category;
use App\Models\Joboffer;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [JobofferController::class, 'index'])->name('home'); 

Route::get('/joboffers/{joboffer:slug}', [JobofferController::class, 'show'])->name('joboffer.show');

Route::get('categories/{category:slug}', function(Category $category){

    return view('joboffers', [
        'joboffers' => $category->joboffers->load(['category', 'company']),
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);
})->name('category');

Route::get('company/{company:slug}', function (Company $company){
    return view('joboffers', [
        'joboffers' => $company->joboffers->load(['category', 'company']),
        'categories' => Category::all()
    ]);
})->name('company');

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login',[SessionsController::class, 'create'])->middleware('guest');
Route::post('sessions',[SessionsController::class, 'store'])->middleware('guest');

Route::post('logout',[SessionsController::class, 'destroy'])->middleware('auth');


// Route::get('sight/{sight:slug}', function (Sight $sight){
//     return view('joboffers', [
//         'joboffers' => Joboffer::latest('updated_at')->with('category', 'company')->get(),
//         'categories' => Category::all()

//     ]);
// })->name('sight');
