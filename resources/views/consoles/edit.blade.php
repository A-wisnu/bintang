@extends('layouts.main')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title mb-0">Edit Konsol</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('consoles.update', $console) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Konsol</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                id="name" name="name" value="{{ old('name', $console->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="type" class="form-label">Tipe Konsol</label>
                            <input type="text" class="form-control @error('type') is-invalid @enderror" 
                                id="type" name="type" value="{{ old('type', $console->type) }}" required>
                            @error('type')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" 
                                id="description" name="description" rows="3" required>{{ old('description', $console->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="daily_rate" class="form-label">Harga Sewa per Hari</label>
                                <input type="number" class="form-control @error('daily_rate') is-invalid @enderror" 
                                    id="daily_rate" name="daily_rate" value="{{ old('daily_rate', $console->daily_rate) }}" required>
                                @error('daily_rate')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="stock" class="form-label">Stok</label>
                                <input type="number" class="form-control @error('stock') is-invalid @enderror" 
                                    id="stock" name="stock" value="{{ old('stock', $console->stock) }}" required>
                                @error('stock')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="weekly_rate" class="form-label">Harga Sewa per Minggu</label>
                                <input type="number" class="form-control @error('weekly_rate') is-invalid @enderror" 
                                    id="weekly_rate" name="weekly_rate" value="{{ old('weekly_rate', $console->weekly_rate) }}">
                                @error('weekly_rate')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="monthly_rate" class="form-label">Harga Sewa per Bulan</label>
                                <input type="number" class="form-control @error('monthly_rate') is-invalid @enderror" 
                                    id="monthly_rate" name="monthly_rate" value="{{ old('monthly_rate', $console->monthly_rate) }}">
                                @error('monthly_rate')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            @if($console->image)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $console->image) }}" 
                                        alt="{{ $console->name }}" 
                                        class="img-thumbnail" 
                                        style="max-height: 200px">
                                </div>
                            @endif
                            <label for="image" class="form-label">Gambar Konsol</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" 
                                id="image" name="image">
                            <small class="form-text text-muted">Biarkan kosong jika tidak ingin mengubah gambar</small>
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('consoles.index') }}" class="btn btn-secondary">Kembali</a>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 