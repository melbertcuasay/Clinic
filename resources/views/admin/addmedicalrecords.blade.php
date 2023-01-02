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
            <form action="{{ url('savemedicalrecords') }}" method="POST">
                @csrf

                @foreach($records as $records)
                    <input type="hidden" name="patient_id" value="{{ $records->id}}" class="form-control">
                    @endforeach
           
            <div class="card-header px-5 py-4 border-0 bg-light" style="font-weight: bold; text-transform:uppercase; font-size: 30px;">
                <h4 class="fw-bold mb-0">Add Medical Records
                    <a href="{{ url('medicalrecords') }}" class="btn btn-info" style="float: right;"> Back</a>
                </h4>
            </div>

            <div class="card-body px-5">
                <div class="row">

                <div class="form-group col-md-12">
                    <label>Patient History</label>
                    <textarea name="patient_history" class="form-control" placeholder="Patient History" rows="3" required></textarea>
                </div>

                <div class="form-group col-md-3">
                    <label>Findings</label>
                    <input type="text" name="findings" class="form-control" placeholder="Findings" required>
                </div>

                <div class="form-group col-md-3">
                    <label>Weight</label>
                    <input type="text" name="weight" class="form-control" placeholder="Weight" required>
                </div>

                <div class="form-group col-md-3">
                    <label>Height</label>
                    <input type="text" name="height" class="form-control" placeholder="Height" required>
                </div>

                <div class="form-group col-md-3">
                    <label>Blood Pressure</label>
                    <input type="text" name="blood_pressure" class="form-control" placeholder="Blood Pressure" required>
                </div>

                <div class="form-group col-md-12">
                    <label>Diagnostic Result</label>
                    <textarea name="diagnostic_result" class="form-control" placeholder="Diagnostic Result" rows="3" required></textarea>
                </div>

                <div class="form-group col-md-6">
                    <label>Medicine</label>
                    <textarea name="medicine" class="form-control" placeholder="Medicine" rows="3" required></textarea>
                </div>

                <div class="form-group col-md-6">
                    <label>How often Medicine Take</label>
                    <textarea name="medicine_taken" class="form-control" placeholder="Medicine Taken" rows="3" required></textarea>
                </div>

                <div class="form-group col-md-6">
                    <label>Prescription</label>
                    <textarea name="prescription" class="form-control" placeholder="Prescription" rows="3" required></textarea>
                </div>

                <div class="form-group col-md-6">
                    <label>Non Prescription</label>
                    <textarea name="non_prescription" class="form-control" placeholder="Non Prescription" rows="3" required></textarea>
                </div>

                <div class="form-group col-md-6">
                    <label>Patient Progress</label>
                    <input type="text" name="patient_progress" class="form-control" placeholder="Patient Progress" required>
                </div>

                <div class="form-group col-md-6">
                    <label>Total Payment</label>
                    <input type="text" name="total_payment" class="form-control" placeholder="Total Payment" required>
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
