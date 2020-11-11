<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function postRental(Request $request)
    {
        $request->validate([
            'zip_code' => 'required',
            'bathrooms' => 'required|integer',
            'beds' => 'required|integer',
            'sqft' => 'required|integer',
            'photo' => 'mimes:jpeg,jpg,png'
        ],$request->all());
        dd(1);
    }
}
