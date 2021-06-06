<?php

namespace App\Models;

use App\Models\IncomeCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Income extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable=[
        'income_category_id',
        'description','income_date',
        'amount',
    ];

    public function incomeCategory(){
        return $this->belongsTo(IncomeCategory::class);
    }
}
