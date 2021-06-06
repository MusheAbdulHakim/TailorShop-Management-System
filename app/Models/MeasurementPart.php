<?php

namespace App\Models;

use App\Models\ClothType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MeasurementPart extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable=[
        'cloth_type_id','name',
        'description','image',
    ];

    public function clothType(){
        return $this->belongsTo(ClothType::class);
    }
}
