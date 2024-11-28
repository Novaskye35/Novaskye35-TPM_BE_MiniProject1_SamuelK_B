@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Smartphones</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Manufacturer</th>
                <th>RAM</th>
                <th>Processor</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($smartphones as $smartphone)
            <tr>
                <td>{{ $smartphone->id }}</td>
                <td>{{ $smartphone->name }}</td>
                <td>{{ $smartphone->manufacturer }}</td>
                <td>{{ $smartphone->ram }}</td>
                <td>{{ $smartphone->processor }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
