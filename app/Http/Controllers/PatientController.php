<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Repositories\UserRepository;

use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{

    public function index(UserRepository $userRepo){

        $users =$userRepo->getAllPatients();

        return view('patients.list',["patientsList"=>$user,
                                     "footerYear"=> date("Y"),
                                     "title" => "Moduł pacjentów"]);
    }
    public function show(){

        return view('patients.show',["patient"=>$user,
                                     "footerYear"=> date("Y"),
                                     "title" => "Moduł pacjentów"]);

    }
    public function store(Request $request){
        if(Auth::user()=>type != 'doctor' && Auth::user()=>type !='admin')
        {
            return redirect()->route('login');
        }     
       $request->validate([
        'name'=>'required|max:255',
        'email'=>'required|email|unique:users,email',
        'password'=>'required',
        'phone'=>'required',
        'address'=>'required',
        'pesel'=>'required',
    ]);

       $patient = new User;
       $patient->name = $request->input('name');
       $patient->email = $request->input('email');
       $patient->password = $request->input('password');
       $patient->phone = $request->input('phone');
       $patient->address = $request->input('address');
       $patient->pesel = $request->input('pesel');
       $patient->status = $request->input('status');
       $patient->type = 'patient';
       $patient->save();
    
       return view('patients.confirm',["footerYear"=> date("Y"),
                                     "title" => "Moduł pacjentów"]);
    }
}
