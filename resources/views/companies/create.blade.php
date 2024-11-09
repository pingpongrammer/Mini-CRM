@extends('adminlte::page')

@section('title', 'Create Company')

@section('content_header')
    <h1>Create Company</h1>
@stop

@section('content')
    <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Company Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="logo">Logo (100x100 minimum)</label>
            <input type="file" name="logo" class="form-control">
        </div>
        <div class="form-group">
            <label for="website">Website</label>
            <input type="text" name="website" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@stop
