@extends('layouts.main')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Konsol Tersedia</h1>
        <a href="{{ route('consoles.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i> Tambah Konsol
        </a>
    </div>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($consoles as $console)
        <div class="col">
            <div class="card h-100">
                @if($console->image)
                    <img src="{{ asset('storage/' . $console->image) }}" class="card-img-top" alt="{{ $console->name }}">
                @else
                    <img src="{{ asset('images/no-image.jpg') }}" class="card-img-top" alt="No Image">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $console->name }}</h5>
                    <p class="card-text">{{ $console->description }}</p>
                    <div class="pricing-info mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span>Harian:</span>
                            <strong>Rp {{ number_format($console->daily_rate, 0, ',', '.') }}</strong>
                        </div>
                        @if($console->weekly_rate)
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span>Mingguan:</span>
                            <strong>Rp {{ number_format($console->weekly_rate, 0, ',', '.') }}</strong>
                        </div>
                        @endif
                        @if($console->monthly_rate)
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span>Bulanan:</span>
                            <strong>Rp {{ number_format($console->monthly_rate, 0, ',', '.') }}</strong>
                        </div>
                        @endif
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="card-text mb-0"><small class="text-muted">Stok: {{ $console->stock }}</small></p>
                        <div class="btn-group">
                            <a href="{{ route('consoles.edit', $console->id_console) }}" class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            <form action="{{ route('consoles.destroy', $console->id_console) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus konsol ini?')">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </form>
                            <a href="{{ route('rentals.create', ['console' => $console->id_console]) }}" class="btn btn-sm btn-success ms-1">
                                <i class="bi bi-cart-plus"></i> Sewa
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection 