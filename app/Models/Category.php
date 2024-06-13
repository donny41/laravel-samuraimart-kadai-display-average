<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function produces(){
        return $this->hasMany(Product::class);
    }

    public function major_category()
    {
        return $this->belongsTo(MajorCategory::class);
    }
}
