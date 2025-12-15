@extends('layout')

@section('content')
<div class="card shadow-lg">
    <div class="row g-0">
        <img src="{{ asset('storage/' . $property->image) }}" class="card-img-top" alt="House" style="height: 200px; object-fit: cover;">
        <div class="col-md-6">
            <div class="card-body p-5">
                <h1 class="card-title">{{ $property->title }}</h1>
                <h3 class="text-success mb-3">${{ number_format($property->price) }}</h3>
                <p class="text-muted">{{ $property->location }}</p>
                
                <hr>
                <h5>Description</h5>
                <p class="card-text">{{ $property->description }}</p>
                
                <div class="mt-5 d-flex gap-2">
                    <a href="/properties/{{ $property->id }}/edit" class="btn btn-warning">Edit Property</a>
                    
                    <form action="/properties/{{ $property->id }}" method="POST" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete Property</button>
                    </form>
                    
                    <a href="/properties" class="btn btn-secondary ms-auto">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection