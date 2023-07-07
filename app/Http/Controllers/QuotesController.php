<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuotesController extends Controller
{
    //
    public function store_quotes(Request $request)
    {



        try {
        $quotes = new Quote();
        $quotes->property_type = $request->property_type;
        $quotes->home_type = $request->home_type;
        $quotes->bill = $request->bill;
        $quotes->address_input = $request->address_input;
        $quotes->address_latitude = $request->address_latitude;
        $quotes->address_longitude = $request->address_longitude;
        $quotes->home_age = $request->home_age;
        $quotes->name = $request->name;
        $quotes->email = $request->email;
        $quotes->number = $request->number;
        $quotes->save();

        $details = [
            'property_type' => $quotes->property_type,
            'home_type' => $quotes->home_type,
            'bill' => $quotes->bill,
            'address_input' => $quotes->address_input,
            'home_age' => $quotes->home_age,
            'name' => $quotes->name,
            'email' => $quotes->email,
            'number' => $quotes->number
        ];
        Mail::to('nomanimtiaz2019@icloud.com')->send(new \App\Mail\QuoteMail($details));
            return response()->json('Addedd',200);
        } catch (\Exception $ex) {
            return ($ex->getMessage());
        }




    }
}
