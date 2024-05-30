@extends('layouts.master')

@section('content')

<h1>Update Employee</h1>
<form action="{{ route('course.update',['id'=>$employee->id]) }}" method="post">
    @csrf
    <input type="text" class="form-control" value="{{ $employee->full_name }}" name="full_name" placeholder="Enter your Full Name">
    <input type="text" class="form-control" value="{{ $employee->phone }}" name="phone" placeholder="Enter your Phone">
    <input type="submit" value="Save">
</form>
@endsection
