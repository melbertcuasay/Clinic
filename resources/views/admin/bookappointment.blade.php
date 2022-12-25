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
            <div class="shadow bg-white p-3">
                <h4 style="font-size: 30px; font-weight: bold; text-transform: uppercase;">Book Appointment</h4>
                <hr>
                <br>
           
     
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">

                    <thead>
                        <tr>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th>Approved</th>
                        <th>Canceled</th>
                        <th>Send Mail</th>
                        </tr>
                    </thead>

                    

                    @foreach($appoint as $appoint)
                    <tbody>
                        <tr>
                        <td>{{ $appoint->last_name }}</td>
                            <td>{{ $appoint->first_name }}</td>
                            <td>{{ $appoint->email }}</td>
                            <td>{{ $appoint->phone }}</td>
                            <td>{{ $appoint->date }}</td>
                            <td>{{ $appoint->time }}</td>
                            <td>{{ $appoint->status }}</td>
                            <td>
                                <a href="{{ url('approved', $appoint->id) }}" class="btn btn-success">Approved</a>
                            </td>
                            <td>
                                <a href="{{ url('canceled', $appoint->id) }}"  class="btn btn-danger" onclick="confirmation(event)">Canceled</a>
                            </td>
                            <td>
                                <a href="{{ url('email', $appoint->id) }}" class="btn btn-info">Email</a>
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
      title: "Are you sure you want to Canceled this Appointment?",
      text: "Appointment Cancelation!",
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
