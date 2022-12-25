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
                <h4 style="font-size: 30px; font-weight: bold; text-transform: uppercase; text-align:center;">Patient Records </h4>
                <hr>
                <br>

                <table class="table-top-0">

                @foreach($details as $details)
                <tbody>
                    <tr style="font-size: 20px; font-weight: bold; text-transform: uppercase;">
                        <h3 style="float: right; font-size: 20px; font-weight: bold; text-transform: uppercase;">
                        Case No. {{ $details->case_no }}
                        </h3>
                        <td>{{ $details->last_name }}</td>
                        <td>{{ $details->middle_initial }}</td>
                        <td>{{ $details->first_name }}</td>
                    </tr>
                </tbody>
                @endforeach

                </table>

                </div>
            </div>
        </div>
  </div>
  <!-- details end -->

  <!-- records start -->

  <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shadow bg-white p-3">
                <hr>
                <br>

                <table class="table-top-0">

                @foreach($records as $records)
                <tbody>
                    <tr style="font-size: 20px; font-weight: bold; text-transform: uppercase;">
                        <h3 style="float: right; font-size: 20px; font-weight: bold; text-transform: uppercase;">
                       Patient History <br>  {{ $records->patient_history }}
                        </h3>
                       
                  
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
