@extends('adminlte::page')

@section('title', 'Edit Employee')

@section('content_header')
    <h1 class="text-center text-primary font-weight-bold">Edit Employee</h1>
@stop

@section('content')
    <div class="d-flex justify-content-center">
        <div class="card shadow-lg p-4" style="max-width: 600px; width: 100%; margin-top: 20px; border-radius: 15px;">
            <div class="card-body">
                <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="first_name" class="font-weight-bold">First Name</label>
                        <input type="text" class="form-control border-primary shadow-sm" name="first_name" value="{{ $employee->first_name }}" required>
                    </div>

                    <div class="form-group">
                        <label for="last_name" class="font-weight-bold">Last Name</label>
                        <input type="text" class="form-control border-primary shadow-sm" name="last_name" value="{{ $employee->last_name }}" required>
                    </div>

                    <div class="form-group">
                        <label for="company_id" class="font-weight-bold">Company</label>
                        <select name="company_id" class="form-control border-primary shadow-sm" required>
                            @foreach($companies as $company)
                                <option value="{{ $company->id }}" {{ $employee->company_id == $company->id ? 'selected' : '' }}>
                                    {{ $company->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="email" class="font-weight-bold">Email</label>
                        <input type="email" class="form-control border-primary shadow-sm" name="email" value="{{ $employee->email }}">
                    </div>

                    <div class="form-group">
                        <label for="phone" class="font-weight-bold">Phone</label>
                        <input type="text" class="form-control border-primary shadow-sm" name="phone" value="{{ $employee->phone }}">
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary btn-lg shadow-sm w-100" style="border-radius: 50px;">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
