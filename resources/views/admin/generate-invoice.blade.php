<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CLINIOX | DASHBOARD</title>

  <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  




  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="shadow bg-white p-3">
                <h4 style="font-size: 30px;">Reports
                    

                   
                </h4>
                <hr>

                <div class="row">
                    <div class="col-md-6">
                        <br>
                        <h5>Reports</h5>
                        <hr>
                        <br>
                        
                    
                        <h6>Patient ID: {{ $details->patient_id }}</h6>
                        <h6>Case No. : {{ $details->case_no }}</h6>
                        <h6>Date Created: {{ $details->created_at }}</h6>
                      
                        <h6>Total Payment: {{ $records->total_payment }}</h6>
                        <h6 class="border p-2 text-success">
                            Payment Status: <span class="text-uppercase">Paid</span>
                        </h6>
                       
                       
                    </div>
                    <div class="col-md-6">
                        <br>
                        <h5>Patient Details</h5>
                        <hr>
                        <br>
                        <h6>Last Name: {{ $details->last_name }}</h6>
                        <h6>Middle Initial: {{ $details->middle_initial }}</h6>
                        <h6>First Name: {{ $details->first_name }}</h6>
                        <h6>Address: {{ $details->address }}</h6>
                        <h6>Phone Number: {{ $details->phone }}</h6>
                    </div>

                    <div class="col-md-12">
                        <br>
                        <table class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Patient History</th>
                                        <th>Findings</th>
                                        <th>Diagnostic Result</th>
                                        <th>Medicine</th>
                                        <th>Medicine Taken</th>
                                        <th>Prescription</th>
                                        <th>Non Prescription</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $records->patient_history }}</td>
                                        <td>{{ $records->findings }}</td>
                                        <td>{{ $records->diagnostic_result }}</td>
                                        <td>{{ $records->medicine }}</td>
                                        <td>{{ $records->medicine_taken }}</td>
                                        <td>{{ $records->prescription }}</td>
                                        <td>{{ $records->non_prescription }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </div>
  </div>





</body>
</html>
