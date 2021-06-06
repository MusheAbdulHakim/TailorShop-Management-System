<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Orders extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable =[
        'customer_id','description',
        'recieved_on','recieved_by','amount_charged',
        'amount_paid','collecting_on',
     ];
 
     public function customer(){
         return $this->belongsTo(Customer::class);
     }
}
