
@extends('students.layout')
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

@endsection