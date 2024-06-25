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
    <a class="nav-link collapsed" href="/admin-movies" id="movies">
      <i class="bi bi-film"></i>
      <span>Movies</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed active" href="/admin-theater" id="theaters">
      <i class="bi bi-image-fill active"></i>
      <span>Theaters</span>
    </a>
  </li><!-- End F.A.Q Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="/admin-users" id="users"> 
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
        <h1>Theater Data</h1>
    </div>
    <div style="margin-bottom:80px">
      <a href="/admin-add-theater" class="add-btnn"><span class="bi bi-plus-lg fw-bold"></span>&nbsp;Add Theater</a>
    </div>
              <!-- Table with hoverable rows -->
              <div class="mt-5">
              <table class="table table-hover table-responsive table-bordered ">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Poster</th>
                    <th scope="col">Total Movies</th>
                    <th scope="col">Operation</th>


                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as  $d)
                  
                 
                  <tr>
                    <td>{{$d->id}}</td>
                    <td>{{$d->name}}</td>
                    <td><img src="Images/{{$d->poster}}" alt="not found" height="40px"></td>
                    <td>0</td>
                    <td class="d-flex"><a href="{{URL('/delete-theater',$d->id)}}" class="rs-btn" style="background-color:#C70039 ;">Delete</a>
                    <a href="#" class="rs-btn ms-2" style="background-color: #FFC300;">Update</a></td>
                  </tr>
                    @endforeach
                </tbody>
              </table>
              </div>
              <!-- End Table with hoverable rows -->

</section>

</main><!-- End #main -->
@endsection
</html>