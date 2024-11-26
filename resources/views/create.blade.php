@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Smartphone</h1>
    <form action="{{ route('smartphones.store') }}" method="POST">
        @csrf
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
