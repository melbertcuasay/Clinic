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

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="shadow bg-white p-3">
                <h4 style="font-size: 30px; font-weight: bold; text-transform: uppercase;">Patient Details
                <a href="{{ url('addpatientdetails') }}" class="btn btn-info" style="float: right;">Add Patient Details</a>
                </h4>
                <hr>
                <br>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">

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

                    </table>
                </div>

                </div>
            </div>
        </div>
    </div>


@include('admin.include.script')

</body>
</html>
