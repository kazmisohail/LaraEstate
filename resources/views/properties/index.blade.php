@extends('layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Latest Properties</h1>
    <a href="/properties/create" class="btn btn-primary">Add New Property</a>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($properties as $property)
    <div class="col">
        <div class="card h-100 shadow-sm">
            <img src="{{ asset('storage/' . $property->image) }}" class="card-img-top" alt="House" style="height: 200px; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title">{{ $property->title }}</h5>
                <p class="card-text text-muted">📍 {{ $property->location }}</p>
                <h6 class="text-primary fw-bold mb-3">${{ number_format($property->price) }}</h6>
                <a href="/property/{{ $property->id }}" class="btn btn-outline-primary w-100">View Details</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection