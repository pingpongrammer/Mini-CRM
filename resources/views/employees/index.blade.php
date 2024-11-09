@extends('adminlte::page')

@section('title', 'Employees')

@section('content_header')
    <div class="d-flex align-items-center">
        <h3 class="mr-3 font-weight-bold text-dark">Employees</h3>
        <i class="fas fa-users fa-lg text-primary"></i> 
    </div>
@stop

@section('content')

<div class="d-flex justify-content-end mb-3">
    <a href="{{ route('employees.create') }}" class="btn btn-primary">
        <i class="fas fa-plus-circle mr-2"></i> Add New Employee
    </a>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead class="thead-dark sticky-top">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Company</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->first_name }}</td>
                    <td>{{ $employee->last_name }}</td>
                    <td>{{ $employee->company->name }}</td>
                    <td>{{ Str::limit($employee->email, 20) }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Employee Actions">
                            <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-info btn-sm mr-2">
                                <i class="fas fa-eye"></i> View
                            </a>
                            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning btn-sm mr-2">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="pagination justify-content-center">
    {{ $employees->links('pagination::bootstrap-4') }}
</div>

@stop
