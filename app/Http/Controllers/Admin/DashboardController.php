<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Records;
use App\Models\Products;
use App\Models\Inventory;
use App\Models\Appointments;
use Illuminate\Http\Request;
use App\Models\MedicalRecords;
use App\Models\PatientDetails;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use ArielMejiaDev\LarapexCharts\LarapexChart;

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
                $totalInventory = Inventory::count();
                $totalDetails = PatientDetails::count();

                $AreaChart = (new LarapexChart)->AreaChart()
                ->setTitle('Reports during 2023.')
                ->setSubtitle('Appointments vs Reports')
                ->addData('Total Appointment', [$totalAppointment])
                ->addData('Total Records', [$totalRecords])
                ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August']);

                $DonutChart = (new LarapexChart)->DonutChart()
                ->setTitle('')
                ->setSubtitle('')
                ->addData([$totalAppointment, $totalRecords, $totalUsers])
                ->setLabels(['Total Appointment', 'Total Records', 'Total Users']);

                $BarChart = (new LarapexChart)->BarChart()
                ->setTitle('Total Users vs Total Appointment .')
                ->setSubtitle('Wins during season 2023.')
                ->addData('Total Users', [$totalUsers])
                ->addData('Total Appointment', [$totalAppointment])
                ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);

                $PolarAreaChart = (new LarapexChart)->PolarAreaChart()
                ->polarAreaChart()
                ->setTitle('')
                ->setSubtitle('')
                ->addData([$totalInventory, $totalDetails, $totalRecords])
                ->setLabels(['Total Inventory', 'Total Details', 'Total Records']);

                $LineChart = (new LarapexChart)->LineChart()
                ->setTitle('')
                ->setSubtitle('')
                ->addData('Total Appointment', [$totalAppointment])
                ->addData('Total Records', [$totalRecords])
                ->addData('Total Users', [$totalUsers])
                ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);

                $HorizontalBarChart = (new LarapexChart)->HorizontalBarChart()
                ->setTitle('')
                ->setSubtitle('')
                ->setColors(['#FFC107', '#D32F2F', '#29d92d'])
                ->addData('Total Appointment', [$totalAppointment])
                ->addData('Total Records', [$totalRecords])
                ->addData('Total Users', [$totalUsers])
                ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);

             
               

                return view ('admin.dashboard', compact('totalAppointment', 'totalRecords', 'totalUsers',
                'totalProducts', 'totalInventory', 'totalDetails', 'AreaChart', 'DonutChart', 'BarChart',
                'PolarAreaChart', 'LineChart', 'HorizontalBarChart'));
            }
        }
        else 
        {
            return redirect()->back();
        }
    }
}
