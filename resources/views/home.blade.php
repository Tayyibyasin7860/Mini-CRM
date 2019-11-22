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
                            <table class="table">
                                <tr>
                                        <td>
                                            <a href="{{ route('companies.index') }}" class="btn btn-primary">Companies</a><br>
                                        </td>
                                        <td>
                                            <a href="{{ route('employees.index') }}" class="btn btn-primary">Employees</a>
                                        </td>
                                </tr>
                            </table>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
