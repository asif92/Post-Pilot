<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BudgetController extends Controller
{
    public function budget_dashboard()
    {
        if(Auth::user()->category=="Individual" or Auth::user()->category=="Team Admin" or  Auth::user()->category=="Admin")
        {
            return view('user.budget.dashboard')->with(['page_title' => 'Dashboard']);
        }
        return redirect()->route('logout');
    }
    public function operations()
    {
        $operation_costs = [
            [ "id" => random_int(100000, 999999), "name" => "First Operation Cost", "cost" => 22000, "status" => 'unpaid' ],
            [ "id" => random_int(100000, 999999), "name" => "Second Operation Cost", "cost" => 33000, "status" => 'paid' ],
            [ "id" => random_int(100000, 999999), "name" => "Third Operation Cost", "cost" => 55000, "status" => 'paid' ],
            [ "id" => random_int(100000, 999999), "name" => "Fourth Operation Cost", "cost" => 66000, "status" => 'paid' ],
            [ "id" => random_int(100000, 999999), "name" => "Fifth Operation Cost", "cost" => 44000, "status" => 'paid' ],
            [ "id" => random_int(100000, 999999), "name" => "Six Operation Cost", "cost" => 77000, "status" => 'paid' ],
            [ "id" => random_int(100000, 999999), "name" => "Seven Operation Cost", "cost" => 88000, "status" => 'paid' ],
        ];

        $payment_history = [
            [ "id" => random_int(100000, 999999), "payment_date" => "02-01-2024", "cost" => 77000, "status" => 'paid' ],
            [ "id" => random_int(100000, 999999), "payment_date" => "01-01-2024", "cost" => 88000, "status" => 'paid' ],
            [ "id" => random_int(100000, 999999), "payment_date" => "12-01-2023", "cost" => 22000, "status" => 'paid' ],
            [ "id" => random_int(100000, 999999), "payment_date" => "11-01-2023", "cost" => 33000, "status" => 'paid' ],
            [ "id" => random_int(100000, 999999), "payment_date" => "10-01-2023", "cost" => 55000, "status" => 'paid' ],
            [ "id" => random_int(100000, 999999), "payment_date" => "09-01-2023", "cost" => 66000, "status" => 'paid' ],
            [ "id" => random_int(100000, 999999), "payment_date" => "08-01-2023", "cost" => 44000, "status" => 'paid' ],
        ];

        if(Auth::user()->category=="Individual" or Auth::user()->category=="Team Admin" or  Auth::user()->category=="Admin")
        {
            return view('user.budget.operations', compact('operation_costs', 'payment_history'))->with(['page_title' => 'Operations']);
        }
        return redirect()->route('logout');
    }
    public function payroll()
    {
        $employee_list = [
            [
                "id" => random_int(100000, 999999),
                "employee_name" => "Garrett Winters",
                "employee_slug" => "Garrett_Winters",
                "hire_date" => "01-23-2024",
                "total_payroll" => 10000
            ],
            [
                "id" => random_int(100000, 999999),
                "employee_name" => "Ashton Cox",
                "employee_slug" => "Ashton_Cox",
                "hire_date" => "01-23-2024",
                "total_payroll" => 20000
            ],
            [
                "id" => random_int(100000, 999999),
                "employee_name" => "Cedric Kelly",
                "employee_slug" => "Cedric_Kelly",
                "hire_date" => "01-23-2024",
                "total_payroll" => 30000
            ],
            [
                "id" => random_int(100000, 999999),
                "employee_name" => "Airi Satou",
                "employee_slug" => "Airi_Satou",
                "hire_date" => "01-23-2024",
                "total_payroll" => 40000
            ],
            [
                "id" => random_int(100000, 999999),
                "employee_name" => "Brielle Williamson",
                "employee_slug" => "Brielle_Williamson",
                "hire_date" => "01-23-2024",
                "total_payroll" => 50000
            ],
            [
                "id" => random_int(100000, 999999),
                "employee_name" => "Herrod Chandler",
                "employee_slug" => "Herrod_Chandler",
                "hire_date" => "01-20-2024",
                "total_payroll" => 11000
            ],
            [
                "id" => random_int(100000, 999999),
                "employee_name" => "Rhona Davidson",
                "employee_slug" => "Rhona_Davidson",
                "hire_date" => "01-20-2024",
                "total_payroll" => 12000
            ],
            [
                "id" => random_int(100000, 999999),
                "employee_name" => "Colleen Hurst",
                "employee_slug" => "Colleen_Hurst",
                "hire_date" => "01-20-2024",
                "total_payroll" => 13000
            ],
            [
                "id" => random_int(100000, 999999),
                "employee_name" => "Sonya Frost",
                "employee_slug" => "Sonya_Frost",
                "hire_date" => "01-20-2024",
                "total_payroll" => 14000
            ],
            [
                "id" => random_int(100000, 999999),
                "employee_name" => "Jena Gaines",
                "employee_slug" => "Jena_Gaines",
                "hire_date" => "01-20-2024",
                "total_payroll" => 15000
            ],
            [
                "id" => random_int(100000, 999999),
                "employee_name" => "Quinn Flynn",
                "employee_slug" => "Quinn_Flynn",
                "hire_date" => "01-12-2024",
                "total_payroll" => 2000
            ],
            [
                "id" => random_int(100000, 999999),
                "employee_name" => "Charde Marshall",
                "employee_slug" => "Charde_Marshall",
                "hire_date" => "01-12-2024",
                "total_payroll" => 22000
            ],
            [
                "id" => random_int(100000, 999999),
                "employee_name" => "Haley Kennedy",
                "employee_slug" => "Haley_Kennedy",
                "hire_date" => "01-09-2024",
                "total_payroll" => 33000
            ],
            [
                "id" => random_int(100000, 999999),
                "employee_name" => "Tatyana Fitzpatrick",
                "employee_slug" => "Tatyana_Fitzpatrick",
                "hire_date" => "01-09-2024",
                "total_payroll" => 44000
            ],
            [
                "id" => random_int(100000, 999999),
                "employee_name" => "Michael Silva",
                "employee_slug" => "Michael_Silva",
                "hire_date" => "01-23-2024",
                "total_payroll" => 21000
            ],
            [
                "id" => random_int(100000, 999999),
                "employee_name" => "Paul Byrd",
                "employee_slug" => "Paul_Byrd",
                "hire_date" => "01-23-2024",
                "total_payroll" => 45000
            ],
            [
                "id" => random_int(100000, 999999),
                "employee_name" => "Gloria Little",
                "employee_slug" => "Gloria_Little",
                "hire_date" => "01-23-2024",
                "total_payroll" => 36000
            ],
        ];
        // return $request->slug;
        if(Auth::user()->category=="Individual" or Auth::user()->category=="Team Admin" or  Auth::user()->category=="Admin")
        {
            return view('user.budget.payroll', compact('employee_list'))->with(['page_title' => 'Payroll']);
        }
        return redirect()->route('logout');
    }
    public function payroll_detail(Request $request)
    {
        $payment_history = [
            [ "id" => random_int(100000, 999999), "payroll_date" => "01-01-2024", "payroll_amount" => 10000, "status" => 'pending' ],
            [ "id" => random_int(100000, 999999), "payroll_date" => "12-01-2023", "payroll_amount" => 10000, "status" => 'paid' ],
            [ "id" => random_int(100000, 999999), "payroll_date" => "11-01-2023", "payroll_amount" => 10000, "status" => 'paid' ],
            [ "id" => random_int(100000, 999999), "payroll_date" => "10-01-2023", "payroll_amount" => 10000, "status" => 'paid' ],
            [ "id" => random_int(100000, 999999), "payroll_date" => "09-01-2023", "payroll_amount" => 10000, "status" => 'paid' ],
            [ "id" => random_int(100000, 999999), "payroll_date" => "08-01-2023", "payroll_amount" => 10000, "status" => 'paid' ],
            [ "id" => random_int(100000, 999999), "payroll_date" => "07-01-2023", "payroll_amount" => 10000, "status" => 'paid' ],
        ];
        if(Auth::user()->category=="Individual" or Auth::user()->category=="Team Admin" or  Auth::user()->category=="Admin")
        {
            return view('user.budget.payroll_detail', compact('payment_history'))->with(['page_title' => Str::title(str_replace('_', ' ', $request->slug))]);
        }
        return redirect()->route('logout');
    }
}
