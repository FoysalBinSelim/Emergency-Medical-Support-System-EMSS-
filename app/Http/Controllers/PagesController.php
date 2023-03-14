<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\hospital;
use App\doctor;
use App\Ambulance;
use App\HospitalImage;
use DB;

class PagesController extends Controller
{
    public function index()
    {
      return view('index');
    }
    public function about()
    {
      return view('about');
    }
     public function hospital()
    {   $hospital = hospital::all();
      return view('hospital')->with('hospital', $hospital);
    }
    public function doctor()
    {
      $doctor = doctor::all();
      return view('doctor')->with('doctor', $doctor);
      
    }
    
    public function Ambulance()
    {
      $ambulance = Ambulance::all();
      return view('ambulance')->with('ambulance', $ambulance);

      //return view('ambulance');
    }
    public function search(Request $request)
    { 
      //dd($request->all());
       $search = $request->search;
       $name = $request->name;
       $depname = $request->depname;
       $hospitals = hospital::Where('hospital_location','like', '%'.$search.'%')
       ->Where('hospital_name', 'like', '%'.$name.'%')
       ->Where('hospital_departments', 'like', '%'.$depname.'%')->get();
       $image = HospitalImage::all();
      
       return view('adib', compact('search', 'hospitals'));
      
       
      
    }

    //doctor search function
    public function doctorsearch(Request $request)
    {
      $searchdocl = $request->searchdocl;
      $searchdocspecial = $request->searchdocspecial;

      $doctors = doctor::Where('doctor_location','like', '%'.$searchdocl.'%')
      ->Where('doctor_speciality','like', '%'.$searchdocspecial.'%')->get();

      return view('doctorsearch', compact( 'doctors'));
    }

    //Ambulance search function
    public function ambulancesearch(Request $request)
    {
      $searchamblocation = $request->searchamblocation;
      $searchambtype = $request->searchambtype;
      $ambulances = ambulance::Where('ambulance_location','like', '%'.$searchamblocation.'%')
      ->Where('ambulance_type', 'like', '%'.$searchambtype.'%')->get();

      return view('ambulancesearch', compact( 'ambulances'));
    }
    


    public function covid19()
    {
      return view('covid19');
    }
}