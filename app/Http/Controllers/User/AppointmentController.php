<?php

namespace App\Http\Controllers\User;

use App\Models\Appointments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Notification;

class AppointmentController extends Controller
{
    public function appointment(Request $request)
    {
        $user_id = Auth::id();

        $appoint = new Appointments;

        $appoint->patient_id = $user_id;
        $appoint->last_name = $request->last_name;
        $appoint->first_name = $request->first_name;
        $appoint->email = $request->email;
        $appoint->phone = $request->phone;
        $appoint->date = $request->date;
        $appoint->time = $request->time;
        $appoint->message = $request->message;
        $appoint->status = 'In Progress';

        if(Auth::id())
        {
            $appoint->user_id = Auth::user()->id;
        }

        $appoint->save();
        Alert::success('Book Appointment Successfully', 'Please Wait for the Confirmation');
        return redirect()->back();
    }

    public function bookappointment()
    {
        $appoint = Appointments::all();
        return view ('admin.bookappointment',compact('appoint'));
    }

    public function approved($id)
    {
        $appoint = Appointments::find($id);

        $appoint->status = 'Approved';

        $appoint->save();
        Alert::success('Book Appointment Approved', 'Please send an Email to the Client');
        return redirect()->back();
    }

    public function canceled($id)
    {
        $appoint = Appointments::find($id);

        $appoint->status = 'Canceled';

        $appoint->save();

        return redirect()->back();
    }

    public function email($id)
    {
        $appoint = Appointments::find($id);
        return view ('admin.email',compact('appoint'));
    }

    public function sendemail(Request $request,$id)
    {
        $appoint = Appointments::find($id);

        $details = [

            'greeting' => $request->greeting,
            'body' => $request->body,
            'endpart' => $request->endpart
        ];

        Notification::send($appoint, new SendEmailNotification($details));

        $appoint->save();
        Alert::success('Email Sent Successfully', 'The email sent to the Client');
        return redirect()->back();
      
    }
}
