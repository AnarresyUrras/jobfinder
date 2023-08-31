<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joboffer extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }

}
