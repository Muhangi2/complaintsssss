@extends('students.layout')

@section( 'content')

<form method="POST" action="{{url('student')}}">
    @csrf
    <div class="form-group">
      <label for="formGroupExampleInput">name</label>
      <input name="name" type="text" class="form-control" id="formGroupExampleInput">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Studentnumber</label>
        <input  name="studentnumber" type="text" class="form-control" id="formGroupExampleInput" >
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">complaint</label>
        <input name="address" type="text" class="form-control" id="formGroupExampleInput" >
      </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">complaint description</label>
      <input name="mobile" type="text" class="form-control" id="formGroupExampleInput2" >
    </div>
   <br>
    <input type="submit"
     value="Save" class="btn btn-success"> 
    
   </form>
</div>
</div>
</div>
@endsection