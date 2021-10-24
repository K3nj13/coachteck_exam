<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests\ClientRequest;

class PeopleController extends Controller
{
    public function index2() 
    {
        return view('index');
    }

    public function confirm2(ClientRequest $request) {
        $last_name = $request -> last_name;
        $first_name = $request -> first_name;
        $gender = $request -> gender;
        $email = $request -> email;
        $postcode = $request -> postcode;
        $address = $request -> address;
        $building_name = $request -> building_name;
        $opinion = $request -> opinion;

        $input_data = [
            'last_name' => $last_name,
            'first_name' => $first_name,
            'gender' => $gender,
            'email' => $email,
            'postcode' => $postcode,
            'address' => $address,
            'building_name' => $building_name,
            'opinion' => $opinion,
        ];
        return view('confirm', $input_data);
    }    
    
    public function regist2(Request $request) {

    if($request -> get('back')) {
            return redirect('/index2')->withInput();
        }
        return view('regist');
    }
    
      public function find2()
    {
        return view('find', ['input' => '']);
    }
    public function search(Request $request)
    {
        $item = Person::find($request->input);
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return view('find', $param);
    }

    public function bind(Request $request)
    {
        $data = [
            'item'=>$people,
        ];
        return view('binds', $data);
    }
}