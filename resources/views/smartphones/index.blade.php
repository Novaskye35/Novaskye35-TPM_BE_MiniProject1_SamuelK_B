@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Smartphones</h1>
    @if ($smartphones->isEmpty())
        <p>No smartphones available.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Manufacturer</th>
                    <th>RAM</th>
                    <th>Processor</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($smartphones as $smartphone)
                <tr>
                    <td>{{ $smartphone->id }}</td>
                    <td>{{ $smartphone->name }}</td>
                    <td>{{ $smartphone->manufacturer }}</td>
                    <td>{{ $smartphone->ram }} GB</td>
                    <td>{{ $smartphone->processor }}</td>
                    <td>
                        @if ($smartphone->image)
                            <img src="{{ asset('storage/' . $smartphone->image) }}" alt="Image" width="50">
                        @else
                            No Image
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
