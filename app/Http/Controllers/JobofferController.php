<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Category;
use App\Models\Joboffer;
use Illuminate\Http\Request;

class JobofferController extends Controller
{
    public function index()
    {
            return view('joboffers', [
            'joboffers' => Joboffer::latest()->filter(request(['search', 'category']))->get(),
            'categories' => Category::all(),
            'currentCategory' => Category::firstWhere('slug', request('category'))
        ]);
        
    }

    public function show(Joboffer $joboffer)
    {
        return view('joboffer', [
            'joboffer' => $joboffer,
            'categories' => Category::all()
        ]);
        
    }
}
