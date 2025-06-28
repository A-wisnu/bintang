@extends('layouts.main')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title mb-0">Form Sewa Konsol</h2>
                </div>
                <div class="card-body">
                    @if($console)
                        <div class="mb-3 text-center">
                            @if($console->image)
                                <img src="{{ asset('storage/' . $console->image) }}" alt="{{ $console->name }}" class="img-fluid mb-2" style="max-height: 180px;">
                            @endif
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
                        </div>
                        <form action="{{ route('rentals.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="console_id" value="{{ $console->id_console }}">
                            <div class="mb-3">
                                <label for="qty" class="form-label">Jumlah</label>
                                <input type="number" class="form-control @error('qty') is-invalid @enderror" id="qty" name="qty" value="1" min="1" max="{{ $console->stock }}" required>
                                @error('qty')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="rental_date" class="form-label">Tanggal Sewa</label>
                                    <input type="date" class="form-control @error('rental_date') is-invalid @enderror" id="rental_date" name="rental_date" value="{{ old('rental_date', date('Y-m-d')) }}" required>
                                    @error('rental_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="return_date" class="form-label">Tanggal Kembali</label>
                                    <input type="date" class="form-control @error('return_date') is-invalid @enderror" id="return_date" name="return_date" value="{{ old('return_date', date('Y-m-d', strtotime('+1 day'))) }}" required>
                                    @error('return_date')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="{{ url('/consoles') }}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-success" {{ $console->stock < 1 ? 'disabled' : '' }}>Sewa Sekarang</button>
                            </div>
                        </form>
                    @else
                        <div class="alert alert-danger">
                            Konsol tidak ditemukan.
                        </div>
                        <a href="{{ url('/consoles') }}" class="btn btn-secondary">Kembali</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 