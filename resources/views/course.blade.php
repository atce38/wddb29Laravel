@extends('layouts.master')

@section('content')

<form action="{{ route('course.store') }}" method="post">
    @csrf
    <input type="text" class="form-control" name="full_name" placeholder="Enter your Full Name">
    <input type="text" class="form-control" name="phone" placeholder="Enter your Phone">
    <input type="submit" value="Save">
</form>

<div
    class="table-responsive"
>
    <table
        class="table table-striped table-hover align-middle"
    >
        <thead class="table-light">
            <caption>
                Table Name
            </caption>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->full_name }}</td>
                <td>{{ $employee->phone }}</td>
                <td><a class="btn btn-danger" href="{{ route('course.destroy',['id'=>$employee->id]) }}">Delete</a>
                    <a class="btn btn-primary" href="{{ route('course.edit',['id'=>$employee->id]) }}">Edit</a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>


<h2><a href="/courses/show/8765">Open Course with ID</a></h2>
<h2><a href="/courses/show/765">Open Course with ID</a></h2>
<h2><a href="{{ route('course.show',['id'=>76587]) }}">Open Course with ID</a></h2>
<h2><a href="{{ route('product.show',['name'=>'SomeProduct','price'=>1234,'discount'=>020]) }}">Open Product</a></h2>
<h1> <?php echo 'Hello in Kuch b function ECHO with CORE PHP'; ?> </h1>
<h2> {{ 'Creating Route, Controller, Views ECho with BLADE SYNTAX' }} </h2>
<h1>{{ $abc }}</h1>

<h3>{{ 'Name:'.$name }}</h3>
<h3>{{ 'Age:'.$age }}</h3>
@if ($is_admin)
<h3>{{ 'Hello Admin' }}</h3>
@else
<h3>{{ 'Hello User' }}</h3>
@endif


@php
$j=0;
@endphp
@foreach ($students as $key=> $student)
    @if ($j ==5)
        @break
    @endif
<h4>{{ $student }}</h4>
@php
    $j++;
@endphp
@endforeach


<div class="container">
<div class="row">
    @foreach ($columns as $koib=>$column)
    @if ($koib==2)
    @break

    @endif
    <div class="col ">
        <img src="{{ $column['img'] }}" alt="">
        <h5>{{ $column['title'] }}</h5>

    </div>

    @endforeach

</div>
</div>
@endsection
