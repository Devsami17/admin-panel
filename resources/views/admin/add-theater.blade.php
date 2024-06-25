<!DOCTYPE html>
<html lang="en">
@extends('admin.components')

@section('admin-content')
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed  " href="/admin-dashboard" id="dashboard">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->


  <li class="nav-item">
    <a class="nav-link collapsed  " href="/admin-movies" >
      <i class="bi bi-film active"></i>
      <span>Movies</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed active" href="/admin-theater">
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
        <h1>Add Theater</h1>
    </div>
    <div style="margin-bottom:40px">
      <a href="/admin-theater" class="add-btnn"><span class="bi bi-arrow-left fw-bold"></span>&nbsp;Back</a>
    </div>
              <!-- Table with hoverable rows -->
              <div class="add-movies container">
                <form method="POST" enctype="multipart/form-data" action="{{url('/insert-theater')}}">
             @csrf
                <label for="" class="form-label">Theater Name<span>*</span></label>
             <input name="name" type="text" class="form-control w-75" placeholder="Enter Theater Name">
            
             <label for="" class="form-label mt-3">Theater Poster <span>*</span></label>
             <input name="poster" type="file" class="form-control w-75" >
             <button style="float:left;background-color:red;" type="submit" class="add-btnn mt-3"><span class="bi bi-plus-lg fw-bold"></span>&nbsp;Add Theater</b>
             </form>
            </div>
              <!-- End Table with hoverable rows -->

</section>

</main><!-- End #main -->
@endsection
</html>