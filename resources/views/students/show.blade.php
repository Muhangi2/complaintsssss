@extends('students.layout')


  @section( 'content')
  <dl class="row">
    <dt class="col-sm-3">Name:</dt>
    <dd class="col-sm-9">{{$student->name}}</dd>
  
    <dt class="col-sm-3">studentnumber:</dt>
    <dd class="col-sm-9">
      <p>{{$student->studentnumber}}</</p>
      
    </dd>
  
    <dt class="col-sm-3">address:</dt>
    <dd class="col-sm-9">{{$student->address}}</dd>
  
    <dt class="col-sm-3 text-truncate">mobile:</dt>
    <dd class="col-sm-9">{{$student->mobile}}</dd>
  
  </dl>
  
  @endsection