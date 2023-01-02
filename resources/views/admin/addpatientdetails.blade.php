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
        <div class="card">
            <form action="{{ url('savepatientdetails') }}" method="POST">
                @csrf

                    @foreach($details as $details)
                    <input type="hidden" name="patient_id" value="{{ $details->id}}" class="form-control">
                    @endforeach
           
            <div class="card-header px-5 py-4 border-0 bg-light" style="font-weight: bold; text-transform:uppercase; font-size: 30px;">
                <h4 class="fw-bold mb-0">Add Patient Record
                    <a href="{{ url('patientdetails') }}" class="btn btn-info" style="float: right;"> Back</a>
                </h4>
            </div>

            <div class="card-body px-5">
                <div class="row">

                <div class="form-group col-md-4">
                    <label>Last Name</label>
                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
                </div>

                <div class="form-group col-md-4">
                    <label>Middle Initial</label>
                    <input type="text" name="middle_initial" class="form-control" placeholder="Middle Initial" required>
                </div>

                <div class="form-group col-md-4">
                    <label>First Name</label>
                    <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
                </div>

                <div class="form-group col-md-12">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Address" required>
                </div>

                <div class="form-group col-md-12">
                    <label>Phone Number</label>
                    <input type="number" name="phone" class="form-control" placeholder="Phone Number" required>
                </div>
                
                </div>
            </div>

            <hr class="my-2">

            <div class="card-body px-5">
                <div class="row">

                <div class="form-group col-md-6">
                    <label>Age</label>
                    <input type="text" name="age" class="form-control" placeholder="Age" required>
                </div>

                <div class="form-group col-md-6">
                    <label>Birthday</label>
                    <input type="date" name="birthday" class="form-control" required>
                </div>
  
                <div class="form-group col-md-12">
                    <label>Birth Place</label>
                    <input type="text" name="birth_place" class="form-control" placeholder="Birth Place" required>
                </div>
      
                <div class="form-group col-md-6">
                    <label>Civil Status</label>
                   <select name="civil_status" class="form-control">
                    <option selected>...</option>
                    <option>Single</option>
                    <option>Married</option>
                   </select>
                </div>

                <div class="form-group col-md-6">
                    <label>Gender</label>
                   <select name="gender" class="form-control">
                    <option selected>...</option>
                    <option>Male</option>
                    <option>Female</option>
                   </select>
                </div>

                <div class="form-group col-md-6">
                    <label>Religion</label>
                   <select name="religion" class="form-control">
                    <option selected>...</option>
                    <option>Catholic</option>
                    <option>Iglesia ni Cristo</option>
                    <option>Evangelical Christianity</option>
                    <option>Protestant</option>
                    <option>Seventh-day Adventism</option>
                    <option>Aglipayan</option>
                    <option>Bible Baptist Church</option>
                   </select>
                </div>
     
                <div class="form-group col-md-6">
                    <label>Occupation</label>
                    <input type="text" name="occupation" class="form-control" placeholder="Occupation" required>
                </div>

                </div>
            </div>

            <hr class="my-2">
            <div class="card-footer border-0 bg-light py-2 px-5" style="float: right;">
                <button class="btn btn-info btn-round">Submit</button>
            </div>
                

            </form>
        </div>
    </div>

 


@include('admin.include.script')

</body>
</html>
