<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CLINIOX | DASHBOARD</title>

 @include('admin.include.css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


  <!-- Navbar -->
  @include('admin.include.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.include.sidebar')

  <div class="content-wrapper">

  <!-- details start -->
  <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shadow bg-white p-3">
                <h4 style="font-size: 30px; font-weight: bold; text-align: center; text-transform: uppercase;">Patient Medical Records </h4>
                <hr>
                <br>

                <table class="table-top-0">

                @foreach($details as $details)
                <tbody>
                    <tr style="font-size: 20px; font-weight: bold; text-transform: uppercase;">
                        <h3 style="font-size: 20px; font-weight: bold; text-transform: uppercase;">
                        Case No. {{ $details->case_no }}
                        </h3>
                        <br>
                       
                        <h3 style="font-size: 20px; margin-left: 100px;">Name: <br>
                        {{ $details->last_name }}
                        {{ $details->middle_initial }}
                        {{ $details->first_name }} <br> <br>
                        <h3 style="font-size: 20px; margin-left: 100px;">Contact Number: <br>
                        {{ $details->phone }} </h3><br> <br>
                        <h3 style="font-size: 20px; margin-left: 100px;">Address: <br>
                        {{ $details->address }}
                        </h3>
                        <h3 style="font-size: 20px; float:right; margin-right: 225px; margin-top: -220px;">
                         Birthday: <br> {{ $details->birthday }}
                        </h3>
                        <h3 style="font-size: 20px; float:right; margin-right: 280px; margin-top: -150px;">
                         Age: <br> {{ $details->age }}
                        </h3>
                        <h3 style="font-size: 20px; float:right; margin-right: 150px; margin-top: -50px;">
                         Birth Place: <br> {{ $details->birth_place }}
                        </h3>
                    </tr>
                </tbody>
                @endforeach
              
                </table>
                </div>
            </div>
        </div>
  </div>
  <hr>
  <!-- details end -->

  <!-- records start -->


  <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shadow bg-white p-3">
                <h4 style="font-size: 30px; font-weight: bold; text-align: center; text-transform: uppercase;">General Medical Records </h4>
                <hr>
                <br>

                <table class="table-top-0">

                @foreach($records as $records)
                <tbody>
                    <tr style="font-size: 20px; font-weight: bold; text-transform: uppercase;">
                        <h3 style="font-size: 20px; text-align: center;">
                        Patient History <br> {{ $records->patient_history }}
                        </h3>
                        <br>
                        <h3 style="font-size: 20px; text-align: center;">
                        Findings <br> {{ $records->findings }}
                        </h3>
                        <br>
                        <h3 style="font-size: 20px; margin-left: 100px;">
                        Weight <br> {{ $records->weight }}
                        </h3>
                        <br>
                        <h3 style="font-size: 20px; margin-left: 500px; margin-top: -70px;">
                        Height <br> {{ $records->height }}
                        </h3>
                        <br>
                        <h3 style="font-size: 20px; margin-left: 800px; margin-top: -70px;">
                        Blood Pressure <br> {{ $records->blood_pressure }}
                        </h3>
                        <br>
                        <h3 style="font-size: 20px; text-align: center;">
                        Diagnostic Test Result <br> {{ $records->diagnostic_result }}
                        </h3>
                        <br>
                        <h3 style="font-size: 20px; text-align: center;">
                        Medicine <br> {{ $records->medicine }}
                        </h3>
                        <br>
                        <h3 style="font-size: 20px; text-align: center;">
                        How often Medicine is Taken <br> {{ $records->medicine_taken }}
                        </h3>
                        <br>
                        <h3 style="font-size: 20px; text-align: center;">
                        Prescription <br> {{ $records->prescription }}
                        </h3>
                        <br>
                        <h3 style="font-size: 20px; text-align: center;">
                        Non Prescription <br> {{ $records->non_prescription }}
                        </h3>
                        <br>
                       
                      
                    </tr>
                </tbody>
                @endforeach
              
                </table>
                </div>
            </div>
        </div>
  </div>

  

  <!-- records end -->


@include('admin.include.script')

</body>
</html>
