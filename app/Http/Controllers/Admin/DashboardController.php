<?php

namespace App\Http\Controllers\Admin;

use App\Models\Appointments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard ()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype == '0')
            {
                $user_id = Auth::id();

                if (Appointments::where('patient_id', $user_id)->where('status','In Progress')->exists()) {
                    $statusbook = '1';
                }
                elseif(Appointments::where('patient_id', $user_id)->where('status','Approved')->exists()){
                    $statusbook = '2';
                }
                elseif(Appointments::where('patient_id', $user_id)->where('status','Canceled')->exists()) {
                    $statusbook = '3';
                }
                else {
                    $statusbook = '4';
                }
                return view ('user.homepage', compact('statusbook'));
            }
            else
            {
                return view ('admin.dashboard');
            }
        }
        else 
        {
            return redirect()->back();
        }
    }
}
