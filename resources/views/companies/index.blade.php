@extends('adminlte::page')

@section('title', 'Companies')

@section('content_header')
    <div class="d-flex align-items-center">
        <h3 class="mr-3 font-weight-bold text-dark">Companies</h3>
        <i class="fas fa-building fa-lg text-primary"></i>
    </div>
@stop

@section('content')

<div class="d-flex justify-content-end mb-3">
    <a href="{{ route('companies.create') }}" class="btn btn-primary">
        <i class="fas fa-plus-circle mr-2"></i> Add Company
    </a>
</div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark sticky-top">
                <tr>
                    <th>Logo</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td><img src="{{ asset('storage/' . $company->logo) }}" width="80" height="80" class="img-fluid rounded"></td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->email }}</td>
                        <td><a href="{{ $company->website }}" target="_blank" class="text-primary">{{ Str::limit($company->website, 30) }}</a></td>
                        <td >
                            <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-warning btn-sm mr-2">Edit</a>
                            <form action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="pagination justify-content-center">
        {{ $companies->links('pagination::bootstrap-4') }}
    </div>
@stop
