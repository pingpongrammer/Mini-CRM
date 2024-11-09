@extends('adminlte::page')

@section('title', 'Add Employee')

@section('content_header')
    <h1 class="text-center text-primary font-weight-bold">Add New Employee</h1>
@stop

@section('content')
    <div class="d-flex justify-content-center">
        <div class="card shadow-lg p-4" style="max-width: 600px; width: 100%; margin-top: 20px; border-radius: 15px;">
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('employees.store') }}" method="POST">
                    @csrf

                    <div class="form-group mb-4">
                        <label for="first_name" class="font-weight-bold text-secondary">First Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control border-primary shadow-sm" name="first_name"  placeholder="Enter first name">
                    </div>

                    <div class="form-group mb-4">
                        <label for="last_name" class="font-weight-bold text-secondary">Last Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control border-primary shadow-sm" name="last_name" placeholder="Enter last name">
                    </div>

                    <div class="form-group mb-4">
                        <label for="company_id" class="font-weight-bold text-secondary">Company <span class="text-danger">*</span></label>
                        <select name="company_id" class="form-control border-primary shadow-sm" >
                            @foreach($companies as $company)
                                <option value="{{ $company->id }}">{{ $company->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-4">
                        <label for="email" class="font-weight-bold text-secondary">Email</label>
                        <input type="email" class="form-control border-primary shadow-sm" name="email" placeholder="Enter email address">
                    </div>

                    <div class="form-group mb-4">
                        <label for="phone" class="font-weight-bold text-secondary">Phone</label>
                        <input type="text" class="form-control border-primary shadow-sm" name="phone" placeholder="Enter phone number">
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary btn-lg shadow-sm w-100" style="border-radius: 50px;">
                         Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
