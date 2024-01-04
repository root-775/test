<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
       
    </head>
    <body>
        <h1>Create an EMI calculator</h1>
        @php
            if(!Session::has('count')){
                session()->put('count', 1);
            }
        @endphp
        <form action="{{ route('cal') }}" method="post">
            @csrf
            <table>
                <tr>
                    <td><label for="">Loan Type</label></td>
                    <td>
                        <select name="loan_type" id="">
                            <option value="h_loan">Home Loan</option>
                            <option value="c_loan">Car Loan</option>
                            <option value="p_loan">Personal Loan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="">loan amount</label></td>
                    <td><input type="text" name="amount" id=""></td>
                </tr>
                <tr>
                    <td>
                        <label for="">rate of interest</label>
                    </td>
                    <td>
                        <input type="text" name="r_of_i" id="">
                    </td>
                </tr>
                <tr>
                    <td><label for="">loan tenure</label></td>
                    <td><input type="text" name="loan_t" id=""></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="submit">
                    </td>
                </tr>
            </table>
            
            
        </form>
    </body>
</html>
