<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
       

               <li class="nav-item">
            <a href="{{ url('reports') }}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="{{ url('bookappointment') }}" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
              <p>
                Book Appointment
              </p>
            </a>
          </li>

         

        

          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
              <p>
                Patient Records
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('patientdetails') }}" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                  <p>Patient Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('medicalrecords') }}" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                  <p>Medical Records</p>
                </a>
              </li>
            </ul>

            <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon far fa-plus-square"></i>
            <span class="badge badge-info right">2</span>
              <p>
              Products-Procedures
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('products') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p>Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('procedures') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p>Procedures</p>
                </a>
              </li>
            </ul>

            <li class="nav-item">
            <a href="{{ url('inventory') }}" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
              <p>
                Inventory
              </p>
            </a>
          </li>

            <li class="nav-item">
            <a href="{{ url('reports') }}" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
              <p>
                Reports
              </p>
            </a>
          </li>

         

            
            
     

      
         



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


 