<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Payroll;

class PayrollController extends Controller
{
    public function getPayroll(){
        $payrolls = Payroll::paginate(20);
        return view('/payrolls',compact('payrolls'));
    }
}
