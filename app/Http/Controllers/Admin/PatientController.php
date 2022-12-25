<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function patientdetails()
    {
        return view ('admin.patientdetails');
    }

    public function addpatientdetails()
    {
        return view ('admin.addpatientdetails');
    }
}
