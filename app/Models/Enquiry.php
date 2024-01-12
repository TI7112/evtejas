<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;
    protected $table = "tbl_enquiry";
    protected $primaryKey = "id";

    protected $with = ['getProduct'];

    public function getProduct(){
        return $this->belongsTo(Product::class , 'model' , 'product_id');
    }
}
