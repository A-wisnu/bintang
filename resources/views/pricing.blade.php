@extends('layouts.main')

@section('content')
    <!-- Hero Section -->
    <div class="bg-dark text-white p-5 rounded-3 mb-4">
        <div class="container">
            <h1 class="display-4">Daftar Harga</h1>
            <p class="lead">Pilih paket rental yang sesuai dengan kebutuhan Anda.</p>
        </div>
    </div>

    <!-- Pricing Cards -->
    <div class="row mb-4">
        <!-- Daily Package -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-header bg-primary text-white text-center py-4">
                    <h3 class="mb-0">Paket Harian</h3>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <h4>Mulai dari</h4>
                        <h2 class="display-4 text-primary">Rp. 50.000</h2>
                        <p class="text-muted">per hari</p>
                    </div>
                    <ul class="list-unstyled">
                        <li class="mb-3"><i class="fas fa-check text-success me-2"></i> 1 Konsol pilihan</li>
                        <li class="mb-3"><i class="fas fa-check text-success me-2"></i> 1 Controller</li>
                        <li class="mb-3"><i class="fas fa-check text-success me-2"></i> 1 Game pilihan</li>
                        <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Pengiriman gratis</li>
                    </ul>
                    <a href="/rent/daily" class="btn btn-primary w-100">Pilih Paket</a>
                </div>
            </div>
        </div>

        <!-- Weekly Package -->
        <div class="col-md-4 mb-4">
            <div class="card border-primary">
                <div class="card-header bg-primary text-white text-center py-4">
                    <h3 class="mb-0">Paket Mingguan</h3>
                    <span class="badge bg-warning text-dark">Paling Populer</span>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <h4>Mulai dari</h4>
                        <h2 class="display-4 text-primary">Rp. 300.000</h2>
                        <p class="text-muted">per minggu</p>
                    </div>
                    <ul class="list-unstyled">
                        <li class="mb-3"><i class="fas fa-check text-success me-2"></i> 1 Konsol pilihan</li>
                        <li class="mb-3"><i class="fas fa-check text-success me-2"></i> 2 Controller</li>
                        <li class="mb-3"><i class="fas fa-check text-success me-2"></i> 2 Game pilihan</li>
                        <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Pengiriman gratis</li>
                        <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Bonus 1 hari</li>
                    </ul>
                    <a href="/rent/weekly" class="btn btn-primary w-100">Pilih Paket</a>
                </div>
            </div>
        </div>

        <!-- Monthly Package -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-header bg-primary text-white text-center py-4">
                    <h3 class="mb-0">Paket Bulanan</h3>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <h4>Mulai dari</h4>
                        <h2 class="display-4 text-primary">Rp. 1.000.000</h2>
                        <p class="text-muted">per bulan</p>
                    </div>
                    <ul class="list-unstyled">
                        <li class="mb-3"><i class="fas fa-check text-success me-2"></i> 1 Konsol pilihan</li>
                        <li class="mb-3"><i class="fas fa-check text-success me-2"></i> 2 Controller</li>
                        <li class="mb-3"><i class="fas fa-check text-success me-2"></i> 3 Game pilihan</li>
                        <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Pengiriman gratis</li>
                        <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Bonus 3 hari</li>
                        <li class="mb-3"><i class="fas fa-check text-success me-2"></i> Prioritas dukungan</li>
                    </ul>
                    <a href="/rent/monthly" class="btn btn-primary w-100">Pilih Paket</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Information -->
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h4>Informasi Tambahan</h4>
                    <ul>
                        <li>Harga sudah termasuk PPN</li>
                        <li>Pembayaran dapat dilakukan secara tunai atau transfer</li>
                        <li>Deposit dapat dikembalikan setelah pengembalian</li>
                        <li>Perpanjangan sewa dapat dilakukan sewaktu-waktu</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h4>Syarat dan Ketentuan</h4>
                    <ul>
                        <li>Wajib memberikan identitas yang valid</li>
                        <li>Deposit Rp. 1.000.000 untuk semua jenis konsol</li>
                        <li>Kerusakan akibat kelalaian akan dikenakan biaya</li>
                        <li>Keterlambatan pengembalian dikenakan denda</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection 