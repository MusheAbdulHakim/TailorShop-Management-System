<?php

namespace App\Models;

use App\Models\ExpenseCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Expense extends Model
{
    use HasFactory;

    protected $fillable=[
        'expense_category_id',
        'description',
        'purchase_date','price',
    ];

    public function expenseCategory(){
        return $this->belongsTo(ExpenseCategory::class);
    }
}
