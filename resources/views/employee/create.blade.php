@extends('layouts.app')
@section('content')
    <div class="col-md-4 m-auto">
        <h1>Add New Employee</h1>
        <form class="form" action="{{ route('employees.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" class="form-control">
                @if($errors->first('first_name'))
                    {{$errors->first('first_name')}}
                @endif
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" class="form-control">
                @if($errors->first('last_name'))
                    {{$errors->first('last_name')}}
                @endif
            </div>
            <div class="form-group">
                <label for="company">Company</label>
                <select name="company" class="form-control">
                    <option disabled>Please select a Company</option>
                @foreach($companies as $company)
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endforeach
                </select>
                @if($errors->first('company'))
                    {{$errors->first('company')}}
                @endif
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control">
                @if($errors->first('email'))
                    {{$errors->first('email')}}
                @endif
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="number" name="phone" class="form-control">
                @if($errors->first('phone'))
                    {{$errors->first('phone')}}
                @endif
            </div>
            <input type="submit">
        </form>
    </div>
@endsection
