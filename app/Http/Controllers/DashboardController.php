<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Income;
use App\Models\Orders;
use App\Models\Customer;
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $title = "Dashboard";

        $total_income = DB::table('incomes')->where('deleted_at',null)->whereDate('created_at', '>', Carbon::now()->subDays(30))->sum("amount");
        $total_expense = DB::table('expenses')->whereDate('created_at', '>', Carbon::now()->subDays(30))->sum('price');
        $pieChart = app()->chartjs
                ->name('pieChart')
                ->type('pie')
                ->size(['width' => 400, 'height' => 200])
                ->labels(['Total Customers', 'Customers Orders','Total Expenses'])
                ->datasets([
                    [
                        'backgroundColor' => ['#36A2EB','#7bb13c','#FF6384'],
                        'hoverBackgroundColor' => ['#36A2EB','#7bb13c','#FF6384'],
                        'data' => [Customer::count(),Orders::count(),Expense::count()]
                    ]
                ])
                ->options([]);
        return view('dashboard',compact(
            'title','pieChart',
            'total_income','total_expense',
        ));
    }
}
