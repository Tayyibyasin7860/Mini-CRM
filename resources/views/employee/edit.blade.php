@extends('layouts.app')
@section('content')
        <div class="col-md-4 m-auto">
            <h1>Edit Employee</h1>
            <form class="form" action="/employees/{{$employee->id}}" method="POST">
            @method('patch')
            @include('employee.form')
        </div>

@endsection
