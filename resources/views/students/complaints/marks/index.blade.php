@extends('students.layout')
@section( 'content')
<div class="modal-body">
    <form action="{{ url('postmarks') }}" method="POST" >
        @csrf
        <div class="form-group mt-3">
            <div class="form-group">
                <label for="exampleSelect">Select complaint category</label>
                <select class="form-control" id="exampleSelect" name="category_name">
                    <option>Marks</option>
                    {{-- <option>Registration</option>
                    <option>Tuition</option> --}}
                </select>
            </div>
        </div>
        <div class="form-group mt-3">
            <div class="form-group">
                <label for="exampleSelect">Select Course</label>
                <select class="form-control" id="exampleSelect" name="course_category">
                    <option>BSSE</option>
                    <option>BIST</option>
                    <option>CS</option>
                </select>
            </div>
        </div>
        <div class="form-group mt-3">
            <textarea class="form-control" name="description" id="description" rows="5" placeholder="Describe here your complaint" required></textarea>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Send</button>
        </div>
    </form>
    
</div>

@endsection