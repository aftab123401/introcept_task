<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\csvmodel;
use Validator;

class csvcontroller extends Controller {

    public function csvview() {
        return view('csvform');
    }

    public function csvdata(Request $re) {
        $obj = new csvmodel;

        //for validation
        $validation = Validator::make($re->all(), [
                    'name' => 'required|min:5|max:20',
                    'phone' => 'required|regex:/(98)[0-9]{8}/',
                    'email' => 'required|email|max:50',
                    'address' => 'required|max:30',
        ]);
        //this is the test
        //if errors occurs
        if($validation->fails()){
            return view('csvform')->with('errors', $validation->errors());
        }
        
        $name=$re->get('name');
        $phone=$re->get('phone');
        $email=$re->get('email');
        $address=$re->get('address');
        $nationality=$re->get('nationality');
        $dob=$re->get('dob');
        $edu=$re->get('education');
        $contact=$re->get('contact');
        $gender=$re->get('gender');
        
        
        $obj->name=$name;
        $obj->phone=$phone;
        $obj->email=$email;
        $obj->address=$address;
        $obj->nationality=$nationality;
        $obj->dob=$dob;
        $obj->education=$edu;
        $obj->contact=$contact;
        $obj->gender=$gender;
        
        
        $obj->save();
        
    }

}
