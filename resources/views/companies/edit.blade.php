@extends('adminlte::page')

@section('title', 'Edit Company')

@section('content_header')
    <h1 class="text-center text-primary font-weight-bold">Edit Company</h1>
@stop

@section('content')
    <div class="d-flex justify-content-center">
        <div class="card shadow-lg p-4" style="max-width: 600px; width: 100%; margin-top: 20px; border-radius: 15px;">
            <div class="card-body">
                <form action="{{ route('companies.update', $company->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="logo" class="font-weight-bold">Logo</label>
                        <input type="file" class="form-control border-primary shadow-sm" name="logo">
                        <small>Current logo:</small><br>
                        <img src="{{ asset('storage/' . $company->logo) }}" width="100" height="100" class="mt-2 rounded-circle">
                    </div>

                    <div class="form-group">
                        <label for="name" class="font-weight-bold">Company Name</label>
                        <input type="text" class="form-control border-primary shadow-sm" name="name" value="{{ $company->name }}" required>
                    </div>

                    <div class="form-group">
                        <label for="email" class="font-weight-bold">Email</label>
                        <input type="email" class="form-control border-primary shadow-sm" name="email" value="{{ $company->email }}">
                    </div>

                    <div class="form-group">
                        <label for="website" class="font-weight-bold">Website</label>
                        <input type="url" class="form-control border-primary shadow-sm" name="website" value="{{ $company->website }}">
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
