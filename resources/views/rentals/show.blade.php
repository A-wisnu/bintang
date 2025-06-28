@extends('layouts.main')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Detail Penyewaan #{{ $rental->id }}</h5>
                        <span class="badge bg-{{ $rental->status == 'completed' ? 'success' : 
                            ($rental->status == 'active' ? 'primary' : 
                            ($rental->status == 'pending' ? 'warning' : 'danger')) }}">
                            {{ ucfirst($rental->status) }}
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h6>Informasi Pelanggan</h6>
                            <p class="mb-1">{{ $rental->user->name }}</p>
                            <p class="mb-1">{{ $rental->user->email }}</p>
                            <p class="mb-1">{{ $rental->user->phone ?? '-' }}</p>
                            <p class="mb-0">{{ $rental->user->address ?? '-' }}</p>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <h6>Informasi Penyewaan</h6>
                            <p class="mb-1">Tanggal Sewa: {{ $rental->rental_date->format('d/m/Y') }}</p>
                            <p class="mb-1">Tanggal Kembali: {{ $rental->return_date->format('d/m/Y') }}</p>
                            <p class="mb-0">Durasi: {{ $rental->rental_date->diffInDays($rental->return_date) }} hari</p>
                        </div>
                    </div>

                    <h6>Item yang Disewa</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Tipe</th>
                                    <th>Jumlah</th>
                                    <th class="text-end">Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($rental->rentalItems as $item)
                                <tr>
                                    <td>
                                        @if($item->console)
                                            {{ $item->console->name }}
                                        @else
                                            Item tidak tersedia
                                        @endif
                                    </td>
                                    <td>
                                        @if($item->console)
                                            Konsol
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>{{ $item->qty }}</td>
                                    <td class="text-end">Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3" class="text-end"><strong>Total</strong></td>
                                    <td class="text-end"><strong>Rp {{ number_format($rental->total_price, 0, ',', '.') }}</strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('rentals.index') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Kembali
                        </a>
                        @if($rental->status == 'pending')
                        <div class="float-end">
                            <form action="{{ route('rentals.update-status', $rental) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="status" value="active">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-play-circle"></i> Aktifkan
                                </button>
                            </form>
                            <form action="{{ route('rentals.update-status', $rental) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="status" value="cancelled">
                                <button type="submit" class="btn btn-danger">
                                    <i class="bi bi-x-circle"></i> Batalkan
                                </button>
                            </form>
                        </div>
                        @endif
                        @if($rental->status == 'active')
                        <form action="{{ route('rentals.update-status', $rental) }}" method="POST" class="float-end">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="status" value="completed">
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-check-circle"></i> Selesaikan
                            </button>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 