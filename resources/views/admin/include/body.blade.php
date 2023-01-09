<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Cliniox</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $totalAppointment }}</h3>

                <p>Total Appointment</p>
              </div>
              <div class="icon">
              <i class='bx bxs-book-bookmark'></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $totalRecords }}</h3>

                <p>Total Records</p>
              </div>
              <div class="icon">
              <i class='bx bxs-folder-plus'></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $totalUsers }}</h3>

                <p>Total User</p>
              </div>
              <div class="icon">
              <i class='bx bxs-user-account'></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $totalProducts }}</h3>

                <p>Total Products</p>
              </div>
              <div class="icon">
              <i class='bx bxs-injection'></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Reports
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Donut</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sales-chart" data-toggle="tab">Area</a>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 470px;">
                       {!! $DonutChart->container() !!}
 
                       <script src="{{ $DonutChart->cdn() }}"></script>
 
                      {{ $DonutChart->script() }}
                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 470px;">
                       {!! $AreaChart->container() !!}
 
                       <script src="{{ $AreaChart->cdn() }}"></script>

                      {{ $AreaChart->script() }}
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>

                {!! $BarChart->container() !!}
 
                <script src="{{ $BarChart->cdn() }}"></script>

                {{ $BarChart->script() }}

              </div>
            </div>
            
            <!--/.direct-chat -->

            <!-- TO DO List -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Polar Area Chart
                </h3>

                
              
              <div class="card-body">
              {!! $PolarAreaChart->container() !!}
 
              <script src="{{ $PolarAreaChart->cdn() }}"></script>

                {{ $PolarAreaChart->script() }}

                
              </div>
              </div>
            </div>
                 
                
                 
                   
          
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->
            <div class="card bg-white">
              <div class="card-header border-0">
                <h3 class="card-title">
                 
                  Line Chart
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                  
                </div>
                <!-- /.card-tools -->
              </div>
              <div class="card-body">
              {!! $LineChart->container() !!}
 
              <script src="{{ $LineChart->cdn() }}"></script>

               {{ $LineChart->script() }}
              </div>
              <!-- /.card-body-->
        
            </div>
            <!-- /.card -->

            <!-- solid sales graph -->
            <div class="card bg-white">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-th mr-1"></i>
                  Horizontal Bar Chart
                </h3>

                {!! $HorizontalBarChart->container() !!}
 
                  <script src="{{ $HorizontalBarChart->cdn() }}"></script>

                {{ $HorizontalBarChart->script() }}

                
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>
  
            <!-- /.card -->

            <!-- Calendar -->
           
 

  <footer class="main-footer">
    <strong>Copyright &copy; 2022-2023 <a href="https://adminlte.io">Cliniox Administration</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -