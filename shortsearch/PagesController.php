<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\hospital;
use App\doctor;
use App\Ambulance;
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
       $hospitals = hospital::Where('hospital_location', $search)
       ->Where('hospital_name', $name)->get();
      
       return view('adib', compact('search', 'hospitals'));
      
    }

    //doctor search function
    public function doctorsearch(Request $request)
    {
      $searchdoc = $request->searchdoc;
      $doctors = doctor::orWhere('doctor_location', 'like', '%'.$searchdoc.'%')
      ->orWhere('doctor_speciality', 'like', '%'.$searchdoc.'%')->get();
      return view('doctorsearch', compact('searchdoc', 'doctors'));
    }

    //Ambulance search function
    public function ambulancesearch(Request $request)
    {
      $searchamb = $request->searchambu;
      $ambulances = ambulance::orWhere('ambulance_location', 'like', '%'.$searcambu.'%')
      ->orWhere('ambulance_type', 'like', '%'.$searchamb.'%')->get();
      return view('ambulancesearch', compact('searchdoc', 'ambulances'));
    }
    public function covid19()
    {
      return view('covid19');
    }
}