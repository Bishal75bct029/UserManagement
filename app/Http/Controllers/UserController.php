<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function getAllData(Request $request){
        $users = User::all();
        // dd($users);
        return view('welcome')->with('data',$users);
    }

    public function submitData(Request $request){
        if($request->isMethod('get')){
            return view('insert');
        }
        elseif($request->isMethod('post')){
            $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users|max:255',
                'address' => 'required|max:255',
                'postalcode' => 'required|integer',
                // Add validation rules for other form fields as needed
            ]);
        
            if ($validator->fails()) {
                return redirect()->back()
                    ->withInput()
                    ->withErrors($validator);
            }
        
            $data = new User();
            $data->name = $request['name'];
            $data->email = $request['email'];
            $data->address = $request['address'];
            $data->postalcode = $request['postalcode'];

            $data->save();

            return redirect()->route('home')->with('success','New Record Added Successfully');
        }
        
    }

    public function updateData(Request $request){

    }

    public function deleteData(Request $request){

    }
}
