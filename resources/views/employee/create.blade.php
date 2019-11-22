@extends('layouts.app')
@section('content')
    <div class="col-md-4">
        <h1>Add New Employee</h1>
        <form class="form" action="{{ route('employees.store') }}" method="POST">
        @include('employee.form')
    </div>
@endsection
