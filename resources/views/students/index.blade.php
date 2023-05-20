@extends('students.layout')
@section('content')
<div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-md-4">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title fs-4" style="color:green;"><a href="{{url('totalcomplaints')}}"> Total complaints</a></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-exclamation-triangle"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $totalcomplaints}}</h6>


                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-md-4">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>
                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title fs-4" style="color:green;"><a href="{{url('responses')}}">Responses</a></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-check"></i>
                    </div>
                    <div class="ps-3">
                      <h6>$3,264</h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Revenue Card -->
            <div class="col-md-4">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title fs-4" style="color:green;"><a href="{{url('pendingcompliants')}}"> Pending</a></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person"></i>
                    </div>
                    <div class="ps-3">
                      <h6>total</h6>
                      <span class="text-success small pt-1 fw-bold"></span> <span class="text-muted small pt-2 ps-1"></span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

           </div>

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <!-- End Right side columns -->

      </div>
    </section>
<!-- End #main -->
@endsection




























{{-- @extends('students.layout')
@section('content')

<a href="{{url('/student/create')}}"><button type="button" class="btn btn-success my-3">create new user</button></a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Studentnumber</th>
        <th scope="col">address</th>
        <th scope="col">mobile</th>
        <th>View</th>
        <th>edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    @foreach($students as $student)
    <tbody>
      <tr>
        <th scope="row">{{$student->name}}</th>
        <td>{{$student->studentnumber}}</td>
        <td>{{$student->address}}</td>
        <td>{{$student->mobile}}</td>
        <td>
             <a href="{{url('/student/'.$student->id)}}"> 
                <button type="button" class="btn btn-secondary">View</button></a>
            </td>

             <td>       
                 <a href="{{url('/student/' .$student->id. '/edit')}}">  
                          <button type="button" class="btn btn-warning">Edit</button>
                 </a>
             </td>

                <td>
                    
                    <form action="{{url('student/'.$student->id)}}" method="POST">
                       {{method_field('DELETE')}}
                        @csrf
                      <button type="submit" class="btn btn-danger" name="submit">Delete</button>
                    </form>
        </td>

        </td>
      </tr>
    </tbody>
    @endforeach
  </table>

@endsection --}}