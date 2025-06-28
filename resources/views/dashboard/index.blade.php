@extends('layouts.main')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Customer Dashboard</h4>
                    <div>
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-light">Logout</button>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Welcome, {{ Auth::user()->name }}!</h5>
                    <p class="card-text">You are logged in as <strong>Customer</strong>.</p>
                    
                    <div class="row mt-4">
                        <div class="col-md-6 mb-3">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5 class="card-title">Available Consoles</h5>
                                    <p class="card-text">Browse and rent game consoles</p>
                                    <a href="/consoles" class="btn btn-success">Browse Consoles</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5 class="card-title">My Rentals</h5>
                                    <p class="card-text">View your rental history</p>
                                    <a href="#" class="btn btn-success">View Rentals</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 