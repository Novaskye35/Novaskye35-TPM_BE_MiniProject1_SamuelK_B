@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Smartphone</h1>

    <form action="{{ route('smartphones.update', $smartphone->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Smartphone Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $smartphone->name }}" required>
        </div>
        <div class="mb-3">
            <label for="manufacturer" class="form-label">Manufacturer</label>
            <input type="text" class="form-control" id="manufacturer" name="manufacturer" value="{{ $smartphone->manufacturer }}" required>
        </div>
        <div class="mb-3">
            <label for="ram" class="form-label">RAM (GB)</label>
            <input type="number" class="form-control" id="ram" name="ram" value="{{ $smartphone->ram }}" required>
        </div>
        <div class="mb-3">
            <label for="processor" class="form-label">Processor</label>
            <input type="text" class="form-control" id="processor" name="processor" value="{{ $smartphone->processor }}" required>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Upload New Image</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*">
            @if ($smartphone->image)
                <img src="{{ asset('storage/' . $smartphone->image) }}" alt="Image" width="100" class="mt-2">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
