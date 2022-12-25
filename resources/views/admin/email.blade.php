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
@include('sweetalert::alert')


  <!-- Navbar -->
  @include('admin.include.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.include.sidebar')

  <div class="content-wrapper">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 style="font-size: 30px; font-weight: bold; text-transform: uppercase;">
                        Send Email
                        <a href="{{ url('bookappointment') }}" class="btn btn-info" style="float: right;">Back</a> 
                        </h3>
                    </div>
                    <div class="card-body">

                    <form action="{{ url('sendemail', $appoint->id) }}" method="POST">
                        @csrf

                    <div class="row">

                    <div class="form-group col-md-12">
                        <label>Greetings</label>
                        <input type="text" name="greeting" class="form-control" placeholder="Greetings" required>
                    </div>

                    <div class="form-group col-md-12">
                        <label>Body</label>
                        <textarea name="body" class="form-control" rows="6" placeholder="Message Here" required></textarea>
                    </div>

                    <div class="form-group col-md-12">
                        <label>End Part</label>
                        <input type="text" name="endpart" class="form-control" placeholder="End Part" required>
                    </div>

                    </div>

                    <button type="submit" name="submit" class="btn btn-info" style="background-color: lightseagreen;">Send Email</button>

                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@include('admin.include.script')

</body>
</html>
