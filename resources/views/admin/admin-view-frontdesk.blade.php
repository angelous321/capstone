@extends('layouts.styles')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  @vite('resources/css/app.css')

  <title>Admin Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Microhotel</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <!-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> -->
            <!-- <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span> -->
            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Admin</h6>
              <!-- <span>Web Designer</span> -->
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="">
        <div class="sibar-logo">
          <img src="" class="h-[120px] mx-auto" alt="">
          <p class="text-[#bdb6b5] text-sm flex justify-center">Divine Word College of Calapan</p>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link nav-link-icon collapsed" href="">
          <i class="fa-solid fa-bed icon-nav"></i>
          <span>Manage Rooms</span>
        </a>
      </li><!-- End Manage Rooms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.html">
          <i class="fa-regular fa-file icon-nav"></i>
          <span>Booking History</span>
        </a>
      </li><!-- End Booking History Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-user icon-nav"></i><span>Accounts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Frontdesk</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Guest</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="fa-regular fa-file-lines icon-nav"></i>
          <span>Reports</span>
        </a>
      </li><!-- End Reports Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Admin</a></li>
          <li class="breadcrumb-item"><a href="{{ route('admin.admin-panel') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">Registered Frontdesk</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

  <div class="ml-auto">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  ADD NEW
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="flex items-center justify-center min-h-screen bg-gray-100">
                    <hr class="h-px mb-5 bg-[#55AFAB] border-0">
                    <div class="py-1">
                        <span class="mb-2 text-sm font-semibold">Name <span class="text-red-500 text-sm ">*</span></span>
                        <input type="text" name="name" :value="old('name')" required autofocus id="name" class="w-full p-1 border border-gray-300 rounded-md placeholder:font:light placeholder:text-gray-500 placeholder:text-sm py-1"
                        placeholder="Enter your name" >
                    </div>

                    <!-- <div class="py-1">
                        <span class="mb-2 text-sm font-semibold">First Name</span>
                        <input type="text" name="firstname" id="firstname" class="w-full p-1 border border-gray-300 rounded-md placeholder:font:light placeholder:text-gray-500 placeholder:text-sm py-1"
                        placeholder="Enter your first name">
                    </div>
                    <div class="py-1">
                        <span class="mb-2 text-sm font-semibold">Last Name</span>
                        <input type="text" name="lastname" id="lastname"
                            class="w-full p-1 border border-gray-300 rounded-md placeholder:font:light placeholder:text-gray-500 placeholder:text-sm py-1"
                        placeholder="Enter your last name">
                    </div> -->
                    <div class="py-1">
                        <span class="mb-2 text-sm font-semibold">Email
                            <span class="text-red-500 text-sm ">*</span> </span>
                        <input type="email" name="email" :value="old('email')" required id="email"
                            class="w-full p-1 border border-gray-300 rounded-md placeholder:font:light placeholder:text-gray-500 placeholder:text-sm py-1"
                            placeholder="Enter your email">
                    </div>
                    <div class="py-1">
                        <span class="mb-2 text-sm font-semibold">Password <span class="text-red-500 text-sm ">*</span></span>
                        <input type="password" name="password"
                            required autocomplete="new-password" id="password"
                            class="w-full p-1 border border-gray-300 rounded-md placeholder:font:light placeholder:text-gray-500
                            placeholder:text-sm py-1"
                            placeholder="Enter your password" >
                    </div>
                    <div class="py-1">
                        <span class="mb-2 text-sm font-semibold">Confirm Password <span class="text-red-500 text-sm ">*</span></span>
                        <input type="password" name="password_confirmation" required id="password"
                            class="w-full p-1 border border-gray-300 rounded-md placeholder:font:light placeholder:text-gray-500 placeholder:text-sm py-1"
                            placeholder="Confirm your password">
                    </div>

<div class="w-1/2 flex flex-col m-auto">
    <button class="bg-[#E0C822]  text-white font-bold py-2 px-4 rounded">
       Register
    </button>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>


<hr>



            <table  class="table table-condensed table-sm table-bordered">
                <thead>
                    <tr style="text-align:left">
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($frontdesk as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                       
                        <td>
                        <!--View Button-->
                        <button href="{{ route('modal.view-guest') }}" type="button" class="btn btn-primary" id="modal2" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable">
                              View
                              </button>
                            </td>

                          <!-- Modal -->

                              <div class="modal fade" id="modalDialogScrollable" tabindex="-1">
                                <div class="modal-dialog modal-dialog-scrollable">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title">View Information</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <h6><strong>Name:</strong> </h6><br>
                                    <h6><strong>Email:</strong></h6><br>
                                    <h6><strong>Registered at:</strong></h6><br>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                               </div>
                    </tr>

                </tbody>
                @endforeach
            </table>

          </div>
        </div><!-- End Left side columns -->

      </div>

      @include('modal.view-guest')
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Microhotel</span></strong>. All Rights Reserved
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</body>

</html>
