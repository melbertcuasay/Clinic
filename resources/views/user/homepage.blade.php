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
 
</head>
<body>
    @include('sweetalert::alert')

     <!--========== HEADER SECTION STARTS ==========-->

     @include('user.homepage.header')

     <!--========== HEADER SECTION ENDS ==========-->

     <!--========== HOME SECTION STARTS ==========-->

     @include('user.homepage.home')
    
     <!--========== HOME SECTION ENDS ==========-->

     <!--========== ABOUT SECTION STARTS ==========-->

     @include('user.homepage.about')
   
     <!--========== ABOUT SECTION ENDS ==========-->

     <!--========== PRODUCTS SECTION STARTS ==========-->

     @include('user.homepage.products')
    
     <!--========== PRODUCTS SECTION ENDS ==========-->

     <!--========== SERVICE SECTION STARTS ==========-->

     @include('user.homepage.service')

     <!--========== SERVICE SECTION ENDS ==========-->

     <!--========== CLINIC SECTION STARTS ==========-->

     @include('user.homepage.clinic')
     
     <!--========== CLINIC SECTION ENDS ==========-->

     <!--========== REVIEW SECTION STARTS ==========-->

     @include('user.homepage.review')

     <!--========== REVIEW SECTION ENDS ==========-->

     <!--========== BLOGS SECTION STARTS ==========-->

     @include('user.homepage.blogs')

     <!--========== BLOGS SECTION ENDS ==========-->

     <!--========== CONTACT SECTION STARTS ==========-->
 
     @include('user.homepage.contact')
    
     <!--========== CONTACT SECTION END ==========-->

     <!--========== BANNER SECTION STARTS ==========-->
     
     @include('user.homepage.banner')

     <!--========== BANNER SECTION ENDS ==========-->

     <!--========== FOOTER SECTION STARTS ==========-->

     @include('user.homepage.footer')

     <!--========== FOOTER SECTION ENDS ==========-->


  
<!-- JS  LINK -->
   <script src="{{asset('assets/js/script.js')}}" defer></script>
</body>
</html>