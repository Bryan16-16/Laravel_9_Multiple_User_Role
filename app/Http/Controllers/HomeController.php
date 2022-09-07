<?php
  
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

use App\Models\user;
  
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function patientHome()
    {
        return view('patient.patientHome',['dashboard_title' => 'Patient Dashboard']);
    } 

    function patient_setting(){
        $data = ['LoggedUserInfo' => user::where('id', '=', session('LoggedUser'))->first()];
        return view('patient.patientSetting', $data,['dashboard_title' => 'Patient Dashboard']);
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('adminHome',['dashboard_title' => 'Admin Dashboard']);
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function doctorHome()
    {
        return view('doctorHome',['dashboard_title' => 'Doctor Dashboard']);
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function secretaryHome()
    {
        return view('secretaryHome',['dashboard_title' => 'Secretary Dashboard']);
    }
}