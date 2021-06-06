<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Income;
use App\Models\Orders;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $title = "Dashboard";
        $total_customers = Customer::count();
        $total_orders = Orders::count();
        $total_income = DB::table('incomes')->where('deleted_at',null)->whereDate('created_at', '>', Carbon::now()->subDays(30))->sum("amount");
        $total_expense = DB::table('expenses')->whereDate('created_at', '>', Carbon::now()->subDays(30))->sum('price');
        return view('dashboard',compact(
            'title','total_customers','total_orders',
            'total_income','total_expense',
        ));
    }
}
