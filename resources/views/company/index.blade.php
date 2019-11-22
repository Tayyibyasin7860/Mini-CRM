@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}
            <h1>Companies</h1>
            <a href="{{ route('home') }}" class="float-right">Back</a>
            <a href="{{ route('companies.create') }}" class="btn btn-success mb-2">Add New Company</a>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>
                        Name
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Logo
                    </th>
                    <th>
                        Website
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($companies as $company)
                <tr>
                    <td>
                        {{ $company->name }}
                    </td>
                    <td>
                        {{ $company->email }}
                    </td>
                    <td>
                        {{ $company->logo }}
                    </td>
                    <td>
                        {{ $company->website }}
                    </td>
                    <td>
                        <a href="" class="btn btn-success">Edit</a>
                        <a href="" class="btn btn-success">Update</a>
                        <a href="" class="btn btn-success">Delete</a>
                    </td>
                </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $companies->links() }}
        </div>
    </div>
</div>
@endsection
