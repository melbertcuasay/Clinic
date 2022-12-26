<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CLINIOX | DASHBOARD</title>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


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
                <h4 style="font-size: 30px; font-weight: bold; text-transform: uppercase;">Products
                <a href="{{ url('addproducts') }}" class="btn btn-info" style="float: right;">Add Products</a>
                </h4>
                <hr>
                <br>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">

                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Type</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    @foreach($products as $products)
                    <tbody>
                        <tr>
                            <td>{{ $products->product_name }}</td>
                            <td>{{ $products->product_type }}</td>
                            <td>{{ $products->description }}</td>
                            <td><img src="assets/uploads/products/{{ $products->image }}" alt=""></td>
                            <td>
                                <a href="{{ url('updateproducts', $products->id) }}" class="btn btn-info">Update</a>
                            </td>
                            <td>
                                <a href="{{ url('deleteproducts', $products->id) }}" onclick="confirmation(event)"v class="btn btn-danger">Delete</a>
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
  <script>
  function confirmation(ev)
  {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');
    console.log(urlToRedirect);
    swal({
      title: "Are you sure you want to Delete this Product?",
      text: "Product Deletion!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
   .then((willCancel) => {
      if (willCancel) {
        window.location.href = urlToRedirect;
      }
   });
  }
 </script>


@include('admin.include.script')

</body>
</html>
