<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded= [];

    public function brands()
    {
        return $this->hasmany(Brand::class);
    }

    public function products()
    {
        return $this->hasmany(Product::class);
    }
}
