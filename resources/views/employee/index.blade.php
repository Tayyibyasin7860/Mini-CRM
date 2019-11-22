@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <h1>Employees</h1>
                    <a href="{{ route('home') }}" class="float-right">Back</a>
                <a href="{{ route('employees.create') }}" class="btn btn-primary mb-2">Add New Employee</a>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>
                            First Name
                        </th>
                        <th>
                            Last Name
                        </th>
                        <th>
                            Company
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Phone
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($employees as $employee)
                        <tr>
                            <td>
                                {{ $employee->first_name }}
                            </td>
                            <td>
                                {{ $employee->last_name }}
                            </td>
                            <td>
                                {{ $employee->employer->name }}
                            </td>
                            <td>
                                {{ $employee->email }}
                            </td>
                            <td>
                                {{ $employee->phone }}
                            </td>
                            <td>
                                <a href="/employees/{{ $employee->id }}/edit" class="btn btn-success">Edit</a>
                                <form action="/employees/{{ $employee->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $employees->links() }}
            </div>
        </div>
    </div>
@endsection
