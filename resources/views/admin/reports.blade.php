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
                <h4 style="font-size: 30px; font-weight: bold; text-transform: uppercase;">Reports
                </h4>
                <hr>
                <br>

                <label>Monthly Reports</label>
                <input type="date">
                
                <br>
                <br>

                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered table-striped">
    
                    <thead>
                        <tr>
                            <th>Patient ID</th>
                            <th>Case No.</th>
                            <th>Last Name</th>
                            <th>Middle Initial</th>
                            <th>First Name</th>
                            <th>Patient History</th>
                            <th>Diagnostic Test Result</th>
                            <th>Total Payment</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    @foreach($data as $data)
                    <tbody>
                        <tr>
                           <td>{{ $data->patient_id }}</td>
                           <td>{{ $data->case_no }}</td>
                           <td>{{ $data->last_name }}</td>
                           <td>{{ $data->middle_initial }}</td>
                           <td>{{ $data->first_name }}</td>
                           <td>{{ $data->patient_history }}</td>
                           <td>{{ $data->diagnostic_result }}</td>
                           <td>{{ $data->total_payment }}</td>
                           <td><a href="{{ url('viewreports',$data->patient_id) }}" class="btn btn-info">View</a></td>
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
    $('#myTable').DataTable();
} );
</script>


</body>
</html>
