@extends('layout.default')

@section('content')
    <div class="row">
        <div class="col-12 py-5">
            <div class="float-left">
                <h1>All Employees</h1>
            </div>
            <div class="float-right">
                <a href="{{ route('employee.export.pdf') }}" class="btn btn-primary">Export To PDF</a>
            </div>
        </div>

        @include('employees.table')
    </div>
@endsection