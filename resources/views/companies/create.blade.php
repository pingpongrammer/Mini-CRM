@extends('adminlte::page')

@section('title', 'Create Company')

@section('content_header')
    <h1 class="text-center text-primary font-weight-bold">Create Company</h1>
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
                <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="name" class="font-weight-bold">Company Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control border-primary shadow-sm">
                    </div>
                    <div class="form-group">
                        <label for="email" class="font-weight-bold">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control border-primary shadow-sm">
                    </div>

                    <div class="form-group">
                        <label for="logo" class="font-weight-bold">Logo (100x100 minimum) <span class="text-danger">*</span></label>
                        <input type="file" name="logo" class="form-control border-primary shadow-sm">
                    </div>

                    <div class="form-group">
                        <label for="website" class="font-weight-bold">Website</label>
                        <input type="text" name="website" class="form-control border-primary shadow-sm">
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
