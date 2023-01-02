<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CLINIOX | DASHBOARD</title>

  <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

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

  <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shadow bg-white p-3">
                <h4 style="font-size: 30px; font-weight: bold; text-transform: uppercase;">Medical Records
                <a href="{{ url('addmedicalrecords') }}" class="btn btn-info" style="float: right;"> Add Medical Records</a>
                </h4>
                <hr>
                <br>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="myDataTable" >

                    <thead>
                        <tr>
                            <th>Patient History</th>
                            <th>Clinic Findings</th>
                            <th>Weight</th>
                            <th>Height</th>
                            <th>Blood Pressure</th>
                            <th>Diagnostic Test Result</th>
                            <th>Medicine</th>
                            <th>How often Medicine is Taken</th>
                            <th>Prescription</th>
                            <th>Non Prescription</th>
                            <th>Patient Progress</th>
                            <th>Total Payment</th>
                        </tr>
                    </thead>
 
                    @foreach($records as $records)
                    <tbody>
                        <tr>                       
                            <td>{{ $records->patient_history }}</td>
                            <td>{{ $records->findings}}</td>
                            <td>{{ $records->weight}}</td>
                            <td>{{ $records->height}}</td>
                            <td>{{ $records->blood_pressure}}</td>
                            <td>{{ $records->diagnostic_result}}</td>
                            <td>{{ $records->medicine}}</td>
                            <td>{{ $records->medicine_taken}}</td>
                            <td>{{ $records->prescription}}</td>
                            <td>{{ $records->non_prescription}}</td>
                            <td>{{ $records->patient_progress}}</td>
                            <td>{{ $records->total_payment}}</td>
                        </tr>
                    </tbody>
                    @endforeach
                 

                    </table>
                </div>

                </div>
            </div>
        </div>
  </div>


@include('admin.include.script')

<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#myDataTable').DataTable();
    } );
</script>

</body>
</html>
