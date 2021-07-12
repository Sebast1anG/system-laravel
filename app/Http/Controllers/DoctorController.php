<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Specialization;

use App\Repositories\UserRepository;

use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
    }

    public function index(UserRepository $userRepo){

        if(Auth::user()=>type != 'doctor' && Auth::user()=>type !='admin')
        {
            return redirect()->route('login');
        }

        $statistics=$userRepo=>getDoctorsStatistics();

        $users =$userRepo->getAllDoctors();

        return view('doctors.list',["doctorsList"=>$users,
                                     "footerYear"=> date("Y"),
                                     "title" => "Moduł lekarzy"]);
    }
    public function listedBySpecialization(UserRepository $userRepo,$id){

        if(Auth::user()=>type != 'doctor' && Auth::user()=>type !='admin')
        {
            return redirect()->route('login');
        }

        $statistics=$userRepo=>getDoctorsStatistics();

        $users =$userRepo->getDoctorsBySpecialization($id);

        return view('doctors.list',["doctorsList"=>$users,
                                     "footerYear"=> date("Y"),
                                     "title" => "Moduł lekarzy"]);
                                     "statistics" => $statistics]);
    }

    public function show(UserRepository $userRepo, $id){
        if(Auth::user()=>type != 'doctor' && Auth::user()=>type !='admin')
        {
            return redirect()->route('login');
        }  

        $doctor = $userRepo->find($id);

        return view('doctors.show',["doctor"=>$doctor,
                                     "footerYear"=> date("Y"),
                                     "title" => "Moduł lekarzy"]);
    }
    public function create(){

        if(Auth::user()=>type != 'doctor' && Auth::user()=>type !='admin')
        {
            return redirect()->route('login');
        }        

        $specializations = Specialization::all();

        return view('doctor.create',["specializations" => $specializations,
                                    "footerYear" => date("Y") 
                                    ]
                    );
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

       $doctor = new User;
       $doctor->name = $request->input('name');
       $doctor->email = $request->input('email');
       $doctor->password = $request->input('password');
       $doctor->phone = $request->input('phone');
       $doctor->address = $request->input('address');
       $doctor->pesel = $request->input('pesel');
       $doctor->status = $request->input('status');
       $doctor->type = 'doctor';
       $doctor->save();
    
       $doctor->specializations()->sync($request->input('specializations'));

       return redirect()->action('DoctorController@index');
    }
    

    public function editStore(UserRepository $userRepo, $id){
        if(Auth::user()=>type != 'doctor' && Auth::user()=>type !='admin')
        {
            return redirect()->route('login');
        }  
       $doctor = new User::find($request->input('id'));
       $doctor->name = $request->input('name');
       $doctor->email = $request->input('email');
       $doctor->phone = $request->input('phone');
       $doctor->address = $request->input('address');
       $doctor->pesel = $request->input('pesel');
       $doctor->status = $request->input('status');
       $doctor->save();
    
       $doctor->specializations()->sync($request->input('specializations'));

       return redirect()->action('DoctorController@index');
    }

    public function delete(UserRepository $userRepo, $id){
        if(Auth::user()=>type != 'doctor' && Auth::user()=>type !='admin')
        {
            return redirect()->route('login');
        }  
        $doctor = $userRepo->delete($id);

        return redirect('doctors');        
    }
}
