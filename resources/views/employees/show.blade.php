@extends('adminlte::page')

@section('title', 'Employee Details')

@section('content_header')
    <h1 class="text-center text-primary font-weight-bold">Employee Details</h1>
@stop

@section('content')
    <div class="d-flex justify-content-center">
        <div class="card shadow-lg p-4" style="max-width: 700px; width: 100%; margin-top: 20px; border-radius: 15px;">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <p><strong class="text-secondary">First Name:</strong> <span class="text-dark">{{ $employee->first_name }}</span></p>
                    </div>
                    <div class="col-md-6">
                        <p><strong class="text-secondary">Last Name:</strong> <span class="text-dark">{{ $employee->last_name }}</span></p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <p><strong class="text-secondary">Company:</strong> <span class="text-dark">{{ $employee->company->name }}</span></p>
                    </div>
                    <div class="col-md-6">
                        <p><strong class="text-secondary">Email:</strong> <span class="text-dark">{{ $employee->email }}</span></p>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <p><strong class="text-secondary">Phone:</strong> <span class="text-dark">{{ $employee->phone }}</span></p>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('employees.index') }}" class="btn btn-secondary btn-sm shadow-sm">
                        <i class="fas fa-arrow-left"></i> Back to Employees List
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop
