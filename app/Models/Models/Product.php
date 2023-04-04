<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id_product','name','size', 'type', 'description', 'price', 'slug', 'quantity'
    ];

    protected $hidden = [

    ];

    public function galleries()
    {
        return $this->hasMany(ProductGallery::class, 'products_id');
    }
}
