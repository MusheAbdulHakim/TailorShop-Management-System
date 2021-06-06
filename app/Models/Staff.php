<?php

namespace App\Models;

use App\Models\Designation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Staff extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable=[
        'designation_id','fullname','address','gender',
        'phone','salary','avatar'
    ];

    public function designation(){
        return $this->belongsTo(Designation::class);
    }
}
