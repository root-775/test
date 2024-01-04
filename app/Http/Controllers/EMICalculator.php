<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EMICalculator extends Controller
{
    function cal(Request $request) {
        $request->validate([
            'amount' => 'required',
            'r_of_i' => 'required',
            'loan_t' => 'required',
        ]);
        $amount = $request->post('amount');
        $r_of_i = $request->post('r_of_i');
        $loan_t = $request->post('loan_t');
        // a * r * t /100

        $result = (($amount * $r_of_i * $loan_t) / 100);


        if(session()->get('count') == 1) {
            session()->put('count', 2);
            session()->put('prv_result', $result);
            return view('result')->with('cur_result',$result );
        }else {
            session()->put('count', 1);
            return view('result')->with('cur_result',$result )->with('prv_result', session()->get('prv_result'));

        }
    }
}
