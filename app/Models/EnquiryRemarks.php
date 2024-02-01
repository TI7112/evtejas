<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnquiryRemarks extends Model
{
    use HasFactory;
    protected $table = "tbl_enquiry_remarks";
    protected $primaryKey = "id";

    protected $with = ['getEnquiry'];

    public function getEnquiry(){
        return $this->belongsTo(Enquiry::class , 'enquiry_id' , 'id');
    }
}
