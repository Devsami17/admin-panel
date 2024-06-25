<!DOCTYPE html>
<html lang="en">
@extends('admin.components')

@section('admin-content')
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed  " href="/admin-dashboard" >
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
    <a class="nav-link collapsed active" href="/admin-ticket">
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
        <h1>Tickets Booked Data</h1>
    </div>
              <!-- Table with hoverable rows -->
              <div class="mt-5">
              <table class="table table-hover table-responsive table-bordered ">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Price</th>
                    <th scope="col">Movie</th>
                    <th scope="col">User</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Operation</th>



                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
               <td>$500</td>
               <td>4</td>
               <td>1</td>
               <td>2</td>
               <td>$1000</td>
                    <td class="d-flex"><a href="#" class="rs-btn" style="background-color:#C70039 ;">Delete</a>
                    <a href="#" class="rs-btn ms-2" style="background-color: #FFC300;">Update</a></td>
                  </tr>
                </tbody>
              </table>
              </div>
              <!-- End Table with hoverable rows -->

</section>

</main><!-- End #main -->
@endsection
</html>