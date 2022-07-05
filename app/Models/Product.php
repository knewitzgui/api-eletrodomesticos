<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;

class Product extends Model
{
    use HasFactory;

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    protected $fillable = [
        'name',
        'description',
        'voltage',
        'brand_id'
    ];
}
