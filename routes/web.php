<?php

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

Route::get('/', function () {
   
        return view('joboffers', [
            'joboffers' => Joboffer::latest('updated_at')->with('category', 'company')->get(),
            'categories' => Category::all()
        ]);
    })->name('home'); 


Route::get('/joboffers/{joboffer:slug}', function(Joboffer $joboffer){ 

    
    return view('joboffer', [
        'joboffer' => $joboffer,
        'categories' => Category::all()
    ]);
});

Route::get('categories/{category:slug}', function(Category $category){

    return view('joboffers', [
        'joboffers' => $category->joboffers->load(['category', 'company']),
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);
})->name('categories');

Route::get('company/{company:slug}', function (Company $company){
    return view('joboffers', [
        'joboffers' => $company->joboffers->load(['category', 'company']),
        'categories' => Category::all()
    ]);
})->name('companies');
