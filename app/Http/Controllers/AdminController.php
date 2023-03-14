<?php

namespace App\Http\Controllers;
use App\hospital;
use App\HospitalImage;
use App\doctor;
use App\ambulance;
use Image;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    
    public function createhospital()
    {
        return view('admin.create');
    }
    
    public function storehospital(Request $request)
    {
        $hospital = new hospital;

        $hospital->hospital_name = $request->hospital_name;
        $hospital->hospital_location = $request->hospital_location;
        $hospital->hospital_departments = $request->hospital_departments;
        $hospital->hospital_contact = $request->hospital_contact;
        $hospital->hospital_icu = $request->hospital_icu;
        $hospital->lat = $request->lat;
        $hospital->lng = $request->lng;
    
       
        //$hospital->save();
        if ($request->hasFile('hospital_image')) 
        {
            //   //insert that image
              $image = $request->file('hospital_image');
              $img = time() . '.'. $image->getClientOriginalExtension();
              $location = public_path('images/' .$img);
              Image::make($image)->save($location);
            
              $hospital->hospital_img = $img;

        }
        $hospital->save();
        return redirect()->route('admincreate');
    }

    public function edithospital()
    {
        $hospital = hospital::all();
        return view('admin.edithospital')->with('hospital', $hospital);
       
    }

    public function mainedithospital($id)
    {
    $hospital = hospital::find($id);
       return view('admin.mainedit')->with('hospital', $hospital);
      
    }
    
    
    public function updatehospital(Request $request,$id)
    {
        $hospital =  hospital::find($id);

        $hospital->hospital_name = $request->hospital_name;
        $hospital->hospital_location = $request->hospital_location;
        $hospital->hospital_departments = $request->hospital_departments;
        $hospital->hospital_contact = $request->hospital_contact;
        $hospital->hospital_icu = $request->hospital_icu;
    
       
        //$hospital->save();
        //if ($request->hasFile('hospital_image')) 
        //{
            //   //insert that image
          //    $image = $request->file('hospital_image');
            //  $img = time() . '.'. $image->getClientOriginalExtension();
              //$location = public_path('images/' .$img);
              //Image::make($image)->save($location);
            
              //$hospital->hospital_img = $img;

        //}
        $hospital->save();
        return redirect()->route('edithospital');
    }

    // Admin Panel for Doctor///

    public function createdoctor()
    {
        return view('admin.createdoctor');
    }

    public function editdoctor()
    {
        $doctor = doctor::all();
        return view('admin.editdoctor')->with('doctor', $doctor);
       
    }

    public function maineditdoctor($id)
    {
        $doctor = doctor::find($id);
        return view('admin.maineditdoctor')->with('doctor', $doctor);
       
    }

    public function updatedoctor(Request $request,$id)
    {
        $doctor =  doctor::find($id);

        $doctor->doctor_name = $request->doctor_name;
        $doctor->doctor_chember = $request->doctor_chember;
        $doctor->doctor_location = $request->doctor_location;
        $doctor->doctor_speciality = $request->doctor_speciality;
        $doctor->doctor_contact = $request->doctor_contact;
        
        $doctor->save();
        return redirect()->route('editdoctor');
    }







    public function storedoctor(Request $request)
    {
        $doctor = new doctor;

        $doctor->doctor_name = $request->doctor_name;
        $doctor->doctor_chember = $request->doctor_chember;
        $doctor->doctor_location = $request->doctor_location;
        $doctor->doctor_speciality = $request->doctor_speciality;
        $doctor->doctor_contact = $request->doctor_contact;

        
        //$doctor->save();
        if ($request->hasFile('doctor_image')) 
        {
            //   //insert that image
              $image = $request->file('doctor_image');
              $img = time() . '.'. $image->getClientOriginalExtension();
              $location = public_path('images/' .$img);
              Image::make($image)->save($location);
            
              $doctor->doctor_img = $img;

        }
        $doctor->save();
        return redirect()->route('admincreatedoctor');
    }


    // Admin Panel for Ambulance///
    public function createambulance()
    {
        return view('admin.createambulance');
    }

    public function storeambulance(Request $request)
    {
        $ambulance = new ambulance;

        $ambulance->ambulance_name = $request->ambulance_name;
        $ambulance->ambulance_location = $request->ambulance_location;
        $ambulance->ambulance_type = $request->ambulance_type;
        $ambulance->ambulance_contact = $request->ambulance_contact;
        $ambulance->ambulance_Fare = $request->ambulance_Fare;
    
       
        //$doctor->save();
        if ($request->hasFile('ambulance_image')) 
        {
            //   //insert that image
              $image = $request->file('ambulance_image');
              $img = time() . '.'. $image->getClientOriginalExtension();
              $location = public_path('images/' .$img);
              Image::make($image)->save($location);
            
              $ambulance->ambulance_img = $img;

        }
        $ambulance->save();
        return redirect()->route('admincreateambulance');
    }


    public function editambulance()
    {
        $ambulance = ambulance::all();
        return view('admin.editambulance')->with('ambulance', $ambulance);
       
    }

    public function maineditambulance($id)
    {
        $ambulance = ambulance::find($id);
        return view('admin.maineditambulance')->with('ambulance', $ambulance);
       
    }

    public function updateambulance(Request $request,$id)
    {
        $ambulance =  ambulance::find($id);

        $ambulance->ambulance_name = $request->ambulance_name;
        $ambulance->ambulance_location = $request->ambulance_location;
        $ambulance->ambulance_type = $request->ambulance_type;
        $ambulance->ambulance_contact = $request->ambulance_contact;
        $ambulance->ambulance_fare = $request->ambulance_fare;

        
        $ambulance->save();
        return redirect()->route('editambulance');
    }


    
}
