@extends('students.layout')
@section( 'content')
<div class="card" style="width: 18rem;">
    
    <div class="card-body">
<form  action="{{url('student/'.$students->id)}}" method="POST">
    @csrf
    @method("PATCH")
    <div class="form-group">
      <label for="formGroupExampleInput">name</label>
      <input name="name" type="text" class="form-control" id="formGroupExampleInput"  value="{{old('name',$students->name)}}">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Studentnumber</label>
        <input  name="studentnumber" type="text" class="form-control" id="formGroupExampleInput" value="{{old('name',$students->studentnumber)}}" >
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">address</label>
        <input name="address" type="text" class="form-control" id="formGroupExampleInput" value="{{old('name',$students->address)}}">
      </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">mobile</label>
      <input name="mobile" type="text" class="form-control" id="formGroupExampleInput2" value="{{old('name',$students->mobile)}}" >
    </div>
    <br>
    <input type="submit" value="update" class="btn btn-success"> 
   
  </form>
</div>
</div>
@endsection