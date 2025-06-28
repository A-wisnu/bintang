@extends('layouts.main')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title mb-0">Detail Konsol</h2>
                </div>
                <div class="card-body">
                    <h4>{{ $console->name }}</h4>
                    <p>{{ $console->description }}</p>
                    <div>
                        <span class="badge bg-primary">Harian: Rp {{ number_format($console->daily_rate, 0, ',', '.') }}</span>
                        @if($console->weekly_rate)
                            <span class="badge bg-success">Mingguan: Rp {{ number_format($console->weekly_rate, 0, ',', '.') }}</span>
                        @endif
                        @if($console->monthly_rate)
                            <span class="badge bg-warning text-dark">Bulanan: Rp {{ number_format($console->monthly_rate, 0, ',', '.') }}</span>
                        @endif
                    </div>
                    <div class="mt-2">
                        <span class="text-muted">Stok: {{ $console->stock }}</span>
                    </div>
                    <a href="{{ url('/consoles') }}" class="btn btn-secondary mt-3">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 