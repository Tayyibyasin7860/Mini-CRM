@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            <ul>
                                <h2>
                                    <li>
                                        <a href="{{ route('companies.index') }}">Companies</a><br>
                                    </li>
                                    <li>
                                        <a href="{{ route('employees.index') }}"><h2>Employees</h2></a>
                                    </li>
                                </h2>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
