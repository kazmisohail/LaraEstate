@extends('layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header bg-warning text-dark">
                <h4 class="mb-0">Edit Property</h4>
            </div>
            <div class="card-body">
                <form action="/properties/{{ $property->id }}" method="POST">
                    @csrf
                    @method('PUT') <div class="mb-3">
                        <label class="form-label">Property Title</label>
                        <input type="text" name="title" value="{{ $property->title }}" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Location</label>
                        <input type="text" name="location" value="{{ $property->location }}" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Price ($)</label>
                        <input type="number" name="price" value="{{ $property->price }}" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="4" required>{{ $property->description }}</textarea>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-warning btn-lg">Update Property</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsectionw