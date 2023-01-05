<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Records;
use App\Models\Appointments;
use Illuminate\Http\Request;
use App\Models\MedicalRecords;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Products;
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

                $products = DB::table('products')->get();
                return view ('user.homepage', compact('statusbook', 'products'));
            }
            else
            {
                $totalAppointment = Appointments::count();
                $totalRecords = MedicalRecords::count();
                $totalUsers = User::count();
                $totalProducts = Products::count();
                return view ('admin.dashboard', compact('totalAppointment', 'totalRecords', 'totalUsers',
                'totalProducts'));
            }
        }
        else 
        {
            return redirect()->back();
        }
    }
}
