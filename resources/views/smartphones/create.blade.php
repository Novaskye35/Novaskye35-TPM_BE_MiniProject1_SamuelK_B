@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Smartphone</h1>
    <a href="{{ route('smartphones.index') }}" class="btn btn-primary mb-3">
        Back to List
    </a>
    <form action="{{ route('smartphones.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">Upload Image</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="manufacturer" class="form-label">Manufacturer</label>
            <input type="text" name="manufacturer" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="ram" class="form-label">RAM (GB)</label>
            <input type="number" name="ram" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="processor" class="form-label">Processor</label>
            <input type="text" name="processor" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection
