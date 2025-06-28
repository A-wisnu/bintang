@extends('layouts.main')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Riwayat Penyewaan</h1>
    </div>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID Sewa</th>
                            <th>Pelanggan</th>
                            <th>Tanggal Sewa</th>
                            <th>Tanggal Kembali</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($rentals as $rental)
                        <tr>
                            <td>{{ $rental->id }}</td>
                            <td>{{ $rental->user->name }}</td>
                            <td>{{ $rental->rental_date->format('d/m/Y') }}</td>
                            <td>{{ $rental->return_date->format('d/m/Y') }}</td>
                            <td>Rp {{ number_format($rental->total_price, 0, ',', '.') }}</td>
                            <td>
                                <span class="badge bg-{{ $rental->status == 'completed' ? 'success' : 
                                    ($rental->status == 'active' ? 'primary' : 
                                    ($rental->status == 'pending' ? 'warning' : 'danger')) }}">
                                    {{ ucfirst($rental->status) }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('rentals.show', $rental) }}" 
                                        class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i> Detail
                                    </a>
                                    <button type="button" 
                                        class="btn btn-sm btn-outline-secondary dropdown-toggle"
                                        data-bs-toggle="dropdown">
                                        <i class="bi bi-gear"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        @if($rental->status == 'pending')
                                        <li>
                                            <form action="{{ route('rentals.update-status', $rental) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="status" value="active">
                                                <button type="submit" class="dropdown-item">
                                                    <i class="bi bi-play-circle"></i> Aktifkan
                                                </button>
                                            </form>
                                        </li>
                                        <li>
                                            <form action="{{ route('rentals.update-status', $rental) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="status" value="cancelled">
                                                <button type="submit" class="dropdown-item text-danger">
                                                    <i class="bi bi-x-circle"></i> Batalkan
                                                </button>
                                            </form>
                                        </li>
                                        @endif
                                        @if($rental->status == 'active')
                                        <li>
                                            <form action="{{ route('rentals.update-status', $rental) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="status" value="completed">
                                                <button type="submit" class="dropdown-item">
                                                    <i class="bi bi-check-circle"></i> Selesaikan
                                                </button>
                                            </form>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center py-4">
                                <div class="text-muted">Belum ada data penyewaan</div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection 