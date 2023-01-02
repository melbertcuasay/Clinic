<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\MedicalRecords;
use App\Models\PatientDetails;

class ReportsController extends Controller
{
    public function reports()
    {
          $data = DB::table('patient_details')
        ->join('medical_records', 'medical_records.patient_id', '=', 'patient_details.patient_id')
        ->get([
           'patient_details.case_no', 'patient_details.last_name', 'patient_details.middle_initial',
           'patient_details.first_name', 'patient_details.created_at', 'medical_records.patient_history', 'medical_records.diagnostic_result',
           'medical_records.total_payment', 'patient_details.patient_id', 'medical_records.patient_id'
        ]);
       return view ('admin.reports', compact('data'));
    }

    public function viewreports($patient_id)
    {
      $details = DB::table('patient_details')->where('patient_id', $patient_id)->get(); 
      $records = DB::table('medical_records')->where('patient_id', $patient_id)->get();
      return view ('admin.viewreports', compact('details', 'records'));
    }

    public function viewInvoice(int $patient_id)
    {
      $details = PatientDetails::findOrFail($patient_id);
      $records = MedicalRecords::findOrFail($patient_id);

      return view ('admin.generate-invoice', compact('details', 'records'));
    }

    public function generateInvoice(int $patient_id)
    {
      $details = PatientDetails::find($patient_id);
      $records = MedicalRecords::find($patient_id);
      $data = ['details' => $details, 'records' => $records];

      $pdf = Pdf::loadView('admin.generate-invoice', $data)->setOptions(['defaultFont' => 'sans-serif']);;

      $todayDate = Carbon::now()->format('d-m-Y');

      return $pdf->download('invoice'.$details->patient_id.$records->patient_id.'-'.$todayDate.'.pdf');
    }

   
}
