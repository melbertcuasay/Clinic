<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Appointments;

class HomeController extends Controller
{
    public function home()
    {
        return view ('user.home');
    }

    public function myappointment()
    {
        $appoint = DB::table('appointments')->get();
        return view ('user.myappointment', compact('appoint'));
    }

    public function cancel($id)
    {
        $appoint = Appointments::find($id);

        $appoint->delete();
        return redirect()->back();
    }
}
