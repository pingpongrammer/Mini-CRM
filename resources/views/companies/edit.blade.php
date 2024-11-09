@extends('adminlte::page')

@section('title', 'Edit Company')

@section('content_header')
    <h1>Edit Company</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('companies.update', $company->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $company->name }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $company->email }}">
                </div>

                <div class="form-group">
                    <label for="logo">Logo</label>
                    <input type="file" class="form-control" name="logo">
                    <small>Current logo:</small><br>
                    <img src="{{ asset('storage/' . $company->logo) }}" width="100" height="100">
                </div>

                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" name="website" value="{{ $company->website }}">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@stop
