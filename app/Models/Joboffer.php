<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joboffer extends Model
{
    use HasFactory;

    
    protected $guarded = [];

    protected $table = 'joboffers';

    protected $with = ['category', 'company'];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query
            ->where('joboffer', 'like', '%' . request('search') . '%')
            ->orWhere('excerpt', 'like', '%' . request('search') . '%')
            ->orWhere('jobdescription', 'like', '%' . request('search') . '%');

        }

    }


    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }

}
