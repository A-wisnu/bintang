@extends('layouts.main')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Admin Dashboard</h4>
                    <div>
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-light">Logout</button>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Welcome, {{ Auth::user()->name }}!</h5>
                    <p class="card-text">You are logged in as <strong>Administrator</strong>.</p>
                    
                    <div class="row mt-4">
                        <div class="col-md-4 mb-3">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5 class="card-title">User Management</h5>
                                    <p class="card-text">Manage all users in the system</p>
                                    <a href="#" class="btn btn-primary">Manage Users</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5 class="card-title">Console Management</h5>
                                    <p class="card-text">Manage game consoles</p>
                                    <a href="{{ route('consoles.index') }}" class="btn btn-primary">Manage Consoles</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5 class="card-title">Rental Management</h5>
                                    <p class="card-text">Manage all rental transactions</p>
                                    <a href="{{ route('rentals.index') }}" class="btn btn-primary">Manage Rentals</a>
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