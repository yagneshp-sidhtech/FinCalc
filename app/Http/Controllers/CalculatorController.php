<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('admin.calculator.index');
    }

    public function fdCalculator()
    {
        return view('admin.calculator.fd-calculator');
    }

    public function sipCalculator()
    {
        return view('admin.calculator.sip-calculator');
    }

    public function rdCalculator()
    {
        return view('admin.calculator.rd-calculator');
    }
}
