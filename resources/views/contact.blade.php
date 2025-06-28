@extends('layouts.main')

@section('content')
    <!-- Hero Section -->
    <div class="bg-dark text-white p-5 rounded-3 mb-4">
        <div class="container">
            <h1 class="display-4">Hubungi Kami</h1>
            <p class="lead">Kami siap membantu Anda dengan segala pertanyaan.</p>
        </div>
    </div>

    <div class="row">
        <!-- Contact Form -->
        <div class="col-md-8 mb-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title mb-4">Kirim Pesan</h3>
                    <form action="/contact/send" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Nomor Telepon</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subjek</label>
                            <select class="form-select" id="subject" name="subject" required>
                                <option value="">Pilih subjek</option>
                                <option value="rental">Informasi Rental</option>
                                <option value="pricing">Informasi Harga</option>
                                <option value="support">Dukungan Teknis</option>
                                <option value="complaint">Keluhan</option>
                                <option value="other">Lainnya</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h3 class="card-title mb-4">Informasi Kontak</h3>
                    <div class="mb-4">
                        <h5><i class="fas fa-map-marker-alt text-primary me-2"></i> Alamat</h5>
                        <p>Jalan Gaming 123<br>
                    </div>
                    <div class="mb-4">
                        <h5><i class="fas fa-phone text-primary me-2"></i> Telepon</h5>
                        <p>
                            <a href="tel:+6281234567890" class="text-decoration-none">+62 812-3456-7890</a>
                        </p>
                    </div>
                    <div class="mb-4">
                        <h5><i class="fas fa-envelope text-primary me-2"></i> Email</h5>
                        <p>
                            <a href="mailto:info@psrental.com" class="text-decoration-none">info@psrental.com</a>
                        </p>
                    </div>
                    <div class="mb-4">
                        <h5><i class="fas fa-clock text-primary me-2"></i> Jam Operasional</h5>
                        <p>
                            Senin - Jumat: 09:00 - 21:00<br>
                            Sabtu - Minggu: 10:00 - 22:00
                        </p>
                    </div>
                </div>
            </div>

            <!-- Social Media -->
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title mb-4">Media Sosial</h3>
                    <div class="d-grid gap-2">
                        <a href="#" class="btn btn-outline-primary">
                            <i class="fab fa-facebook me-2"></i> Facebook
                        </a>
                        <a href="#" class="btn btn-outline-info">
                            <i class="fab fa-twitter me-2"></i> Twitter
                        </a>
                        <a href="#" class="btn btn-outline-danger">
                            <i class="fab fa-instagram me-2"></i> Instagram
                        </a>
                        <a href="#" class="btn btn-outline-success">
                            <i class="fab fa-whatsapp me-2"></i> WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 