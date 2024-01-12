<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "tbl_product";
    protected $primaryKey = "id";

    protected $with = ['getFeatures'];

    public function getFeatures(){
        return $this->belongsTo(Feature::class , 'id' , 'product_id');
    }
}
