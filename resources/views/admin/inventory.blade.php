<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CLINIOX | DASHBOARD</title>

  <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
                <h4 style="font-size: 30px; font-weight: bold; text-transform: uppercase;">Inventory
                </h4>
                <hr>
                <br>

                <a href="{{ url('stocks') }}" class="btn btn-info" style="font-weight: bold; text-transform: uppercase; float: right;">
                <i class="fas fa-plus"></i> Stocks
                </a>
                
                <br>
                <br>

                <div class="table-responsive">
                    <table id="myTable" class="table">
    
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Product Name</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    @foreach($stocks as $stocks)
                    <tbody>
                        <tr>
                            <td>{{ $stocks->id }}</td>
                            <td>{{ $stocks->product_name }}</td>
                            <td>{{ $stocks->type }}</td>
                            <td>{{ $stocks->description }}</td>
                            <td>{{ $stocks->status }}</td>
                            <td>{{ $stocks->quantity }}</td>
                            <td>
                                <a href="{{ url('updatestocks', $stocks->id) }}" class="btn btn-info">Edit</a>
                            </td>
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
