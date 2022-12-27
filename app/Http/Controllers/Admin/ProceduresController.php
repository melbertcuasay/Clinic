<?php

namespace App\Http\Controllers\Admin;

use App\Models\Procedures;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class ProceduresController extends Controller
{
    public function procedures()
    {
        $procedures = Procedures::all();
        return view ('admin.procedures', compact('procedures'));
    }

    public function addprocedures()
    {
        return view ('admin.addprocedures');
    }

    public function saveprocedures(Request $request)
    {
        $procedures = new Procedures;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('assets/uploads/procedures', $imagename);
        $procedures->image = $imagename;

        $procedures->skin_treatment = $request->input('skin_treatment');
        $procedures->procedures = $request->input('procedures');

        $procedures->save();
        Alert::success('Procedures Added Succesfully', 'New Procedures in the Database');
        return redirect()->back();
    }
}
