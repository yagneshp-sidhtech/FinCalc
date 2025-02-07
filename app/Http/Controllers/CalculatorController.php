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

    public function ppfCalculator()
    {
        return view('admin.calculator.ppf-calculator');
    }

    public function gstCalculator()
    {
        return view('admin.calculator.gst-calculator');
    }

    public function compareLoan()
    {
        return view('admin.calculator.compare-loan');
    }

    public function emi()
    {
        return view('admin.calculator.emi-calculator.emi');
    }

    public function loanAmount()
    {
        return view('admin.calculator.emi-calculator.loan-amount');
    }
}
