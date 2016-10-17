<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\csvmodel;
use Validator;
use DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class csvcontroller extends Controller {

    //to view the csv form
    public function csvview() {
        return view('csvform');
    }

    // for the post of csv data 
    public function csvdata(Request $re) {
        $obj = new csvmodel;

        //for form validation
        $validation = Validator::make($re->all(), [
                    'name' => 'required|min:5|max:20',
                    'phoneno' => 'required|regex:/(98)/|max:10',
                    'email' => 'required|email|max:150|unique:csvmodels',
                    'address' => 'required|max:30',
        ]);

        //if errors occurs
        if ($validation->fails()) {
            return view('csvform')->with('errors', $validation->errors());
        } else {
            $name = $re->get('name');
            $address = $re->get('address');
            $phone = $re->get('phoneno');
            $email = $re->get('email');
            $edu = $re->get('educationlevel');
            $nationality = $re->get('nationality');
            $dob = $re->get('dobb');
            $contact = $re->get('contactmode');
            $gender = $re->get('genderr');

            //creating an array of the data
            $contents = array(
                array($name, $email, $address, $phone, $edu, $dob, $nationality, $contact, $gender),
            );

            $headers = ["", "", "", "", "", "", "", "", ""];

            //open or create the csv to save data
            $file = fopen("./introcept.csv", "a");

            fputcsv($file, $headers);
            foreach ($contents as $content) {
                fputcsv($file, $content);
            }
            fclose($file);

            //to save the form data
            $obj->name = $name;
            $obj->phone = $phone;
            $obj->email = $email;
            $obj->address = $address;
            $obj->nationality = $nationality;
            $obj->dob = $dob;
            $obj->education = $edu;
            $obj->contact = $contact;
            $obj->gender = $gender;


            $obj->save();
            return redirect('csv');
        }
    }

    public function dataview() {
        $page = LengthAwarePaginator::resolveCurrentPage();
        $total = DB::table('csvmodels')->count('id'); //Count the total record
        $perPage = 5; //set the data per page

        $results = DB::table('csvmodels')->forPage($page, $perPage)->get(['name', 'phone', 'email', 'address', 'nationality', 'dob', 'education', 'contact', 'gender']);
        $data = new LengthAwarePaginator($results, $total, $perPage, $page, [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
        ]);
        return view('csvview', ['datas' => $data]);
    }
    public function test(){
        return view('test');
    }

}
