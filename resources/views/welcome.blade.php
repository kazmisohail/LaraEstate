@extends('layout')

@section('content')
<div class="text-center py-5">
    <h1 class="display-4 fw-bold">Find Your Dream Home</h1>
    <p class="lead text-muted mb-4">The best properties in the city are waiting for you.</p>
    
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a href="/properties" class="btn btn-primary btn-lg px-4 gap-3">Browse Listings</a>
        <a href="/properties/create" class="btn btn-outline-secondary btn-lg px-4">Sell a House</a>
    </div>
</div>
@endsection