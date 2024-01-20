<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "tbl_product";
    protected $primaryKey = "id";

    protected $with = ['getFeatures', 'getCategory', 'getModel'];

    public function getFeatures()
    {
        return $this->belongsTo(Feature::class, 'id', 'product_id');
    }
    public function getCategory()
    {
        return $this->belongsTo(Category::class, 'category', 'id');
    }
    public function getModel()
    {
        return $this->belongsTo(ProductModel::class, 'model', 'id');
    }
}
