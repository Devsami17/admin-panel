<!DOCTYPE html>
<html lang="en">
@extends('admin.components')

@section('admin-content')
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed active " href="/admin-dashboard" >
      <i class="bi bi-grid active"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->


  <li class="nav-item">
    <a class="nav-link collapsed" href="/admin-movies" >
      <i class="bi bi-film"></i>
      <span>Movies</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="/admin-theater" >
      <i class="bi bi-image-fill"></i>
      <span>Theaters</span>
    </a>
  </li><!-- End F.A.Q Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="/admin-users" > 
      <i class="bi bi-person"></i>
      <span>Users Data</span>
    </a>
  </li><!-- End Contact Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed " href="/admin-ticket">
      <i class="bi bi-ticket"></i>
      <span>Tickets Booked</span>
    </a>
  </li><!-- End Login Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="/">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Return To Website</span>
    </a>
  </li><!-- End Login Page Nav -->



</ul>

</aside><!-- End Sidebar-->
<main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-11">
      <div class="row">

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card">

            <div class="card-body">
              <h5 class="card-title">Total Movies</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-image"></i>
                </div>
                <div class="ps-3">
                <h6>{{$movieCount}}</h6>
                  <a href="/admin-movies" class="text-black small pt-1 fw-regular">Read More</a> <span class="bi bi-arrow-right"></span>


                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->

        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card revenue-card">

         

            <div class="card-body">
              <h5 class="card-title">Theaters</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-building"></i>
                </div>
                <div class="ps-3">
                  <h6>{{$theaterCount}}</h6>
                  <a href="/admin-theater" class="text-black small pt-1 fw-regular">Read More</a> <span class="bi bi-arrow-right"></span>


                </div>
              </div>
            </div>

          </div>
        </div><!-- End Revenue Card -->

        <!-- Customers Card -->
        <div class="col-xxl-4 col-xl-12">

          <div class="card info-card customers-card">

         

            <div class="card-body">
              <h5 class="card-title">Users <span>| Registered</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                <h6>{{$userCount}}</h6>
                  <a href="/admin-users" class="text-black small pt-1 fw-regular">Read More</a> <span class="bi bi-arrow-right"></span>


                </div>
              </div>

            </div>
          </div>

        </div><!-- End Customers Card -->
                <!-- Customers Card -->
                <div class="col-xxl-4 col-md-6">

<div class="card info-card ticket">



  <div class="card-body">
    <h5 class="card-title">Tickets <span>| Booked</span></h5>

    <div class="d-flex align-items-center">
      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
        <i class="bi bi-ticket"></i>
      </div>
      <div class="ps-3">
        <h6>45</h6>
        <a href="/admin-ticket" class="text-black small pt-1 fw-regular">Read More</a> <span class="bi bi-arrow-right"></span>

      </div>
    </div>

  </div>
</div>

</div><!-- End Customers Card -->
<div class="col-xxl-4 col-md-6">

<div class="card info-card revenue-card">



  <div class="card-body">
    <h5 class="card-title">Revenue <span>| Annual</span></h5>

    <div class="d-flex align-items-center">
      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
        <i class="bi bi-currency-dollar"></i>
      </div>
      <div class="ps-3">
        <h6>65,000</h6>
        <span  class="text-success small pt-1 fw-bold">100%</span>&nbsp; <span class="text-black fw-light">increases</span>

      </div>
    </div>

  </div>
</div>

</div><!-- End Customers Card -->
        <!-- Customers Card -->
        <div class="col-xxl-4 col-xl-12">

          <div class="card info-card ticket">

         

            <div class="card-body">
              <h5 class="card-title">Ticket Packages</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-git"></i>
                </div>
                <div class="ps-3">
                  <a href="/admin-packages"><h3>Control Packages <span class="bi bi-arrow-right"></span></h3></a>
                  


                </div>
              </div>

            </div>
          </div>

        </div><!-- End Customers Card -->





      </div>
    </div><!-- End Left side columns -->



  </div>
</section>

</main><!-- End #main -->
@endsection
</html>