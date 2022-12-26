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
            <form action="{{ url('saveproducts') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
           
            <div class="card-header px-5 py-4 border-0 bg-light" style="font-weight: bold; text-transform:uppercase; font-size: 30px;">
                <h4 class="fw-bold mb-0">Add Products
                    <a href="{{ url('products') }}" class="btn btn-info" style="float: right;"> Back</a>
                </h4>
            </div>

            <div class="card-body px-5">
                <div class="row">

                <div class="form-group col-md-12">
                    <label>Product Name</label>
                    <input type="text" name="product_name" class="form-control" placeholder="Product Name" required>
                </div>

                <div class="form-group col-md-12">
                    <label>Product Type</label>
                    <input type="text" name="product_type" class="form-control" placeholder="Product Type" required>
                </div>

                <div class="form-group col-md-12">
                    <label>Description</label>
                    <textarea name="description" class="form-control" placeholder="Description" rows="3" required></textarea>
                </div>

                <div class="form-group col-md-12">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control"  required>
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
