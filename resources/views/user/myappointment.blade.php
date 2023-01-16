<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLINIOX|WEBSITE</title>

    <!-- CUSTOM CSS LINK -->
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">

     <!-- FONTAWESOME CDN  LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

     <!-- BOXICON CSS LINK -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

     <!-- AOS CSS LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    @include('sweetalert::alert')

     <!--========== HEADER SECTION STARTS ==========-->

     @include('user.homepage.header')

     <!--========== HEADER SECTION ENDS ==========-->

     <div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-12">
            <div class="shadow bg-white p-3">
                <h4 style="font-size: 30px; font-weight: bold; text-transform: uppercase;">My Appointments Table</h4>
                <hr>
                <br>
           
     
                <div class="table-responsive">
                    <table class="table  table-striped">

                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th>Action</th>
                        </tr>
                    </thead>

                    

                    @foreach($appoint as $appoint)
                    <tbody>
                        <tr>
                            <td>{{ $appoint->id }}</td>
                            <td>{{ $appoint->last_name }}</td>
                            <td>{{ $appoint->first_name }}</td>
                            <td>{{ $appoint->email }}</td>
                            <td>{{ $appoint->phone }}</td>
                            <td>{{ $appoint->date }}</td>
                            <td>{{ $appoint->time }}</td>
                            <td>{{ $appoint->status }}</td>
                            <td>
                                <a href="{{ url('cancel', $appoint->id) }}" class="btn btn-danger" onclick="confirmation(event)">Cancel</a>
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
           


     


  
<!-- JS  LINK -->
   <script src="{{asset('assets/js/script.js')}}" defer></script>
</body>
</html>