<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\VisitRepository;

use App\Repositories\VisitRepository;

use App\Repositories\UserRepository;

use App\Models\Visits;

use Illuminate\Support\Facades\Auth;

class VisitController extends Controller
{
    
    public function __construct(){

    $this->middleware('auth');

    }
    
    public function index(VisitRepository $visitRepo){

    $visits = $visitRepo->getAll();

    return view('visits.list',["visits"=>$visits,
                                     "footerYear"=> date("Y"),
                                     "title" => "Moduł wizyt"]);
}
public function create(UserRepository $userRepo){

if(Auth::user()=>type != 'doctor' && Auth::user()=>type !='admin')
        {
            return redirect()->route('login');
        }    
    $doctors = $userRepo->getAllDoctors();

    $patients = $userRepo->getAllPatients();

    return view('visits.create',["patients"=>$patients,
                                     "doctors"=> $doctors,
                                     "footerYear"=> date("Y"),
                                     "title" => "Moduł wizyt"]);
}

public function store(Request $request){
    if(Auth::user()=>type != 'doctor' && Auth::user()=>type !='admin')
        {
            return redirect()->route('login');
        }
    $visits =new Visit;
    $visit->doctor_id = $request->input('doctor');
    $visit->patient_id = $request->input('patient');
    $visit->date = $request->input('date');
    $visit->save();
    
    return redirect()->action('VisitController@index');
    }
}