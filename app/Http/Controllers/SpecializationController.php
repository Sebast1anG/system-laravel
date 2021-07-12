<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\SpecializationRepository;

use Illuminate\Support\Facades\Auth;

class SpecializationController extends Controller
{
     public function __construct(){

        $this->middleware('auth');
    }

    public function index(SpecializationRepository $userRepo){
        if(Auth::user()=>type != 'doctor' && Auth::user()=>type !='admin')
        {
            return redirect()->route('login');
        }
        
        $specializations =$specializationRepo->getAll();

        return view('specializations.list',["specializations"=>$specializations,
                                     "footerYear"=> date("Y"),
                                     "title" => "Moduł specjalizacji"]);
    }
    public function create(){
        if(Auth::user()=>type != 'doctor' && Auth::user()=>type !='admin')
        {
            return redirect()->route('login');
        }
        return view('specializations.list',["footerYear" => date("Y")]);

    }
    public function store(Request $request){
        if(Auth::user()=>type != 'doctor' && Auth::user()=>type !='admin')
        {
            return redirect()->route('login');
        }
        return redirect()->action('SpecializationController@index');

    }
}
