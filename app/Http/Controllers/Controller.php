<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function postRental(Request $request)
    {
        $data = $request->validate([
            'zip_code' => 'required',
            'bathrooms' => 'required|integer',
            'beds' => 'required|integer',
            'sqft' => 'required|integer',
            'photo' => 'required|mimes:jpeg,jpg,png'
        ],$request->all());
        $data['photo'] = $this->uploadPhoto($request);
        \Auth::user()->rentals()->create($data);
        return \Redirect::route('list-rental');
    }

    public function uploadPhoto($request)
    {
        $file = $request->file('photo');
        $path = '/uploads/rental/';
        $serverPath = $this->mkdirPublic($path);
        $file->move($serverPath, $f = (Str::random(10) . '.' . $file->getClientOriginalExtension()));
        return $path . $f;
    }

    public function mkdirPublic($path)
    {
        $publicPath = public_path($path);
        if(!\File::exists($publicPath)) {
            \File::makeDirectory(public_path($path), 0755, true);
        }
        return $publicPath;
    }

    public function destroy($id)
    {
        if($rental =\Auth::user()->rentals()->find($id)) {
            unlink(public_path($rental->photo));
            $rental->delete();
            return \Redirect::route('list-rental');
        }
        return error(404);
    }

}
