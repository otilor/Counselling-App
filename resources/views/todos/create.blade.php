@extends('layouts.app')

@section('content')
<h1>Create Todo</h1>
<form method = "post" action = "{{ route('store_todo') }}"  enctype="multipart/form-data">
    
    {{ csrf_field() }}
    <div class="well">
            <div class="form-group">
                    <label for="title">Title</label>
                    <input name = "text" class="form-control w-25 p-3" id="exampleFormControlTextarea1">
                  </div>
            <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name = "body" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div><!--End of Body-->
        
            <div class="form-group">
                <label for = "due">Due:</label>
                <input type="date" name="due">
            </div><!--End of date due-->
            <div>
                <input type = "submit" class="btn btn-primary" value = "Submit Todo">
            </div>
    </div>
    
</form>

@endsection