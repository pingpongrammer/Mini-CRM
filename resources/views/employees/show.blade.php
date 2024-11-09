@extends('adminlte::page')

@section('title', 'Employee Details')

@section('content_header')
    <h1>Employee Details</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <p><strong>First Name:</strong> {{ $employee->first_name }}</p>
            <p><strong>Last Name:</strong> {{ $employee->last_name }}</p>
            <p><strong>Company:</strong> {{ $employee->company->name }}</p>
            <p><strong>Email:</strong> {{ $employee->email }}</p>
            <p><strong>Phone:</strong> {{ $employee->phone }}</p>
        </div>
    </div>
@stop
