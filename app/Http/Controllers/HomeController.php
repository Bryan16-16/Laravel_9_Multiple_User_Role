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
        $this->middleware(['auth', 'verified']);
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function patientHome()
    {
        return view('patient.patientHome',['dashboard_title' => 'PATIENT']);
    } 

    function patient_setting(){
        $data = ['LoggedUserInfo' => user::where('id', '=', session('LoggedUser'))->first()];
        return view('patient.patientSetting', $data,['dashboard_title' => 'PATIENT ']);
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('admin.adminHome',['dashboard_title' => 'ADMIN']);
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function doctorHome()
    {
        return view('doctor.doctorHome',['dashboard_title' => 'Doctor Dashboard']);
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function secretaryHome()
    {
        return view('secretary.secretaryHome',['dashboard_title' => 'Secretary Dashboard']);
    }
}