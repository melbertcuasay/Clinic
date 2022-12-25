<header class="header">
    
    <div id="menu-btn"><i class='bx bx-menu' ></i></div>
    <a href="#" class="logo"><i class='bx bxl-medium-old'></i> CLINIOX </a>

    <nav class="navbar">
        <a href="#home"> Home </a>
        <a href="#about"> About </a>
        <a href="#products"> Products </a>
        <a href="#services"> Services </a>
        <a href="#clinic"> Clinic </a>
        <a  href="#blogs"> Blogs </a>
        <a href="#book-form" class="btn">Book Appointment</a>
    </nav>

    
    
    @if(Route::has('login'))
    @auth
    
    <x-app-layout>

    </x-app-layout>


    @else

    @endauth
    @endif
 
</header>