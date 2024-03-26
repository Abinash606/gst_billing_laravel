<?php

namespace App\Http\Controllers;

use App\Models\Party;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AppController extends Controller
{
    // All The Function

   public function home(){

        return view('welcome');
    }

    public function about(){
        return view('about');
    }

    public function addParty(){
        return view('party.add');
    }

    public function gstBill(){
        return view('party.gstbill');
    }
    // Create Store Party
    public function createParty ( Request $request){
        // echo "<pre>";
        // print_r($request->all());
        // echo $request->full_name;
        // $param = array(
        //     'full_name' => $request->full_name
        // );
        // Validation
        $request->validate(
            [
                'party_type' => 'required',
                'full_name' => 'required|string|min:2|max:20',
                'phone_no' => 'required|numeric|min:10',
                'address' => 'required|max:255',
                'account_holder_name' => 'required',
                'account_no' => 'required | numeric|max:30',
                'bank_name' => 'required|max:255',
                'ifsc_code' => 'required|max:50',
                'branch_address' => 'required|max:255'
            ]
            );

        $param = $request->all();
        unset($param['_token']);
        Party::create($param);

        // redirect to add party back
        return redirect()->route('add_party')->withStatus("Client Created Successfully");
    }
    public function CreategstBill()
    {
        
    }
};
