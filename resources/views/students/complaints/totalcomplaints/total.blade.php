@extends('students.layout')
@section( 'content')

<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Total Complaints</h5>
    
            <table class="table datatable">
              <thead>
                <tr>
                  {{-- <th scope="col">#</th> --}}
                  <th scope="col">category</th>
                  <th scope="col">Complaint</th>
                  <th scope="col">submission date</th>
                </tr>
              </thead>
              <tbody>
              
                @foreach($allcomplaints as $complaint)
                <tr>
                    <th scope="col">category</th>
                   <td>{{$complaint->description}}</td>
                    <td>{{$complaint->created_at}}</td>
                  </tr>
                    @endforeach
                
                
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>


@endsection