@extends('layouts.app')
@section('content')
<p>You are {{ Auth::user()->email }}</p>
<p>Welcome</p>
<form action = "{{ route('logout') }}" method="POST">
{{ csrf_field() }}
<div>
<input type="submit" value="Logout" class="btn btn-danger">
</div>
</form>
<p>There are {{ count($applications) }} Applications</p>
@endsection