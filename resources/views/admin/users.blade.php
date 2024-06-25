<!DOCTYPE html>
<html lang="en">
@extends('admin.components')

@section('admin-content')
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link collapsed  " href="/admin-dashboard">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->


    <li class="nav-item">
      <a class="nav-link collapsed" href="/admin-movies">
        <i class="bi bi-film"></i>
        <span>Movies</span>
      </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="/admin-theater">
        <i class="bi bi-image-fill"></i>
        <span>Theaters</span>
      </a>
    </li><!-- End F.A.Q Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed active" href="/admin-users">
        <i class="bi bi-person active"></i>
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
    <h1>Users Registered Data</h1>
  </div>
  <!-- Table with hoverable rows -->
  <div class="mt-4">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Usertype</th>
          <th scope="col">Registered Time</th>
          <th scope="col">Operations</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $d )
               <tr>
          <td>{{$d->id}}</td>
          <td>{{$d->name}}</td>
          <td>{{$d->email}}</td>
          <td>
            @if($d->usertype==0)
            User
            @else
            Admin
            @endif
          </td>
          <td>{{$d->created_at}}</td>

          <td>
          @if($d->usertype==1)
          Unable 
          @else 
          <a href="{{URL('delete-user',$d->id)}}" class="rs-btn" style="background-color:#C70039 ;">Delete</a></td>
        @endif
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