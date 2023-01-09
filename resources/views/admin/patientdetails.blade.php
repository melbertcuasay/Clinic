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
                <h4 style="font-size: 30px; font-weight: bold; text-transform: uppercase;">Patient Details
                <a href="{{ url('addpatientdetails') }}" class="btn btn-info" style="float: right;"><i class="fas fa-plus"></i> Patient Details</a>
                </h4>
                <hr>
                <br>

                <div class="table-responsive">
                    <table id="myDataTable" class="table">

                    <thead>
                        <tr>
                            <th>Case No.</th>
                            <th>Last Name</th>
                            <th>Middle Initial</th>
                            <th>First Name</th>
                            <th>Address</th>
                            <th>Age</th>
                            <th>Birthday</th>
                            <th>Birth Place</th>
                            <th>Civil Status</th>
                            <th>Gender</th>
                            <th>Phone Number</th>
                            <th>Religion</th>
                            <th>Occupation</th>
                        </tr>
                    </thead>

                    @foreach($details as $details)
                    <tbody>
                        <tr>
                            <td><a href="{{ url('patientrecords', $details->id) }}" class="btn btn-info">{{ $details->case_no }}</a></td>
                            <td>{{ $details->last_name }}</td>
                            <td>{{ $details->middle_initial }}</td>
                            <td>{{ $details->first_name }}</td>
                            <td>{{ $details->address }}</td>
                            <td>{{ $details->age }}</td>
                            <td>{{ $details->birthday }}</td>
                            <td>{{ $details->birth_place }}</td>
                            <td>{{ $details->civil_status }}</td>
                            <td>{{ $details->gender }}</td>
                            <td>{{ $details->phone }}</td>
                            <td>{{ $details->religion }}</td>
                            <td>{{ $details->occupation }}</td>
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
