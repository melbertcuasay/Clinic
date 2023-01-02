<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use App\Models\PatientDetails;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\MedicalRecords;
use RealRashid\SweetAlert\Facades\Alert;

class PatientController extends Controller
{
    public function patientdetails()
    {
        $details = DB::table('patient_details')->get();
        return view ('admin.patientdetails', compact('details'));
    }

    public function addpatientdetails()
    {
        $details = DB::table('patient_details')->get();
        return view ('admin.addpatientdetails',compact('details'));
    }

    public function savepatientdetails(Request $request)
    {
        $request->validate([

            'last_name' => 'required|string',
            'middle_initial' => 'required|string',
            'first_name' => 'required|string',
            'address' => 'required|string',
            'age' => 'required|string',
            'birthday' => 'required|string',
            'birth_place' => 'required|string',
            'civil_status' => 'required|string',
            'gender' => 'required|string',
            'phone' => 'required|string',
            'religion' => 'required|string',
            'occupation' => 'required|string',
        ]);

        $case_no = Helper::IDGenerator(new PatientDetails, 'case_no', 5, 'MDA');

        $details = new PatientDetails;

        $details->case_no = $case_no;
        $details->patient_id = $request['patient_id'];
        $details->last_name = $request['last_name'];
        $details->middle_initial = $request['middle_initial'];
        $details->first_name = $request['first_name'];
        $details->address = $request['address'];
        $details->age = $request['age'];
        $details->birthday = $request['birthday'];
        $details->birth_place = $request['birth_place'];
        $details->civil_status = $request['civil_status'];
        $details->gender = $request['gender'];
        $details->phone = $request['phone'];
        $details->religion = $request['religion'];
        $details->occupation = $request['occupation'];

        $details->save();
        Alert::success('Patient Details Added Successfully', 'New Details has been Saved.');
        return redirect()->back();
    }

    public function patientrecords($id)
    {
        $details = DB::table('patient_details')->where('id', $id)->get();
        $records = DB::table('medical_records')->where('id', $id)->get();
        return view ('admin.patientrecords', compact('details', 'records'));
    }

    public function medicalrecords()
    {
        $records = DB::table('medical_records')->get();
        return view ('admin.medicalrecords', compact('records'));
    }

    public function addmedicalrecords()
    {
        
        $records = DB::table('medical_records')->get();
        return view ('admin.addmedicalrecords', compact('records'));
    }

    public function savemedicalrecords(Request $request)
    {
        $request->validate([

            'patient_history' => 'required|string',
            'findings' => 'required|string',
            'weight' => 'required|string',
            'height' => 'required|string',
            'blood_pressure' => 'required|string',
            'diagnostic_result' => 'required|string',
            'medicine' => 'required|string',
            'medicine_taken' => 'required|string',
            'prescription' => 'required|string',
            'non_prescription' => 'required|string',
            'patient_progress' => 'required|string',
            'total_payment' => 'required|string',
        ]);

        $records = new MedicalRecords;

        $records->patient_id = $request['patient_id'];
        $records->patient_history = $request['patient_history'];
        $records->findings = $request['findings'];
        $records->weight = $request['weight'];
        $records->height = $request['height'];
        $records->blood_pressure = $request['blood_pressure'];
        $records->diagnostic_result = $request['diagnostic_result'];
        $records->medicine = $request['medicine'];
        $records->medicine_taken = $request['medicine_taken'];
        $records->prescription = $request['prescription'];
        $records->non_prescription = $request['non_prescription'];
        $records->patient_progress = $request['patient_progress'];
        $records->total_payment = $request['total_payment'];

        $records->save();
        Alert::success('Medical Records Added Successfully', 'New Records has been Saved.');
        return redirect()->back();
    }
}
