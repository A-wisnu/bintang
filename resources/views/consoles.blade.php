@extends('layouts.main')

@section('content')
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Konsol PlayStation</h1>
                    <p class="lead mb-4">Pilih konsol PlayStation favoritmu dan nikmati pengalaman gaming terbaik dengan performa tinggi dan grafis memukau.</p>
                </div>
                <div class="col-lg-6 d-none d-lg-block text-center">
                    <img src="https://gmedia.playstation.com/is/image/SIEPDC/ps5-family-image-block-01-en-16sep20?$1600px--t$" class="img-fluid rounded" alt="PlayStation Family" style="max-height: 400px;">
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <!-- Filters -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card border-0 shadow-sm p-3">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <div class="mb-3 mb-md-0">
                            <h5 class="mb-0 fw-bold">Filter Konsol</h5>
                        </div>
                        <div class="d-flex gap-2 flex-wrap">
                            <button class="btn btn-primary active">Semua</button>
                            <button class="btn btn-outline-primary">PlayStation 5</button>
                            <button class="btn btn-outline-primary">PlayStation 4 Pro</button>
                            <button class="btn btn-outline-primary">PlayStation 4</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Console Grid -->
        <h2 class="section-title">Konsol Tersedia</h2>
        <div class="row">
            <!-- PS5 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="position-relative">
                        <img src="https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6566/6566040_rd.jpg" class="card-img-top" alt="PlayStation 5">
                        <div class="position-absolute top-0 end-0 bg-danger text-white m-3 px-2 py-1 rounded-pill">
                            Terbaru
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">PlayStation 5</h3>
                        <div class="my-3">
                            <span class="badge bg-success me-2">Tersedia 5 Unit</span>
                            <span class="badge bg-primary">4K Ultra HD</span>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Grafis 4K Ultra HD</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> SSD Super Cepat</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Dukungan Ray Tracing</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Controller DualSense</li>
                        </ul>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-primary fw-bold mb-0">Rp 100.000/hari</h4>
                            <div class="ratings">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-3">Termasuk 1 controller dan 1 game pilihan</p>
                        <a href="/rent/ps5" class="btn btn-primary w-100">Sewa Sekarang</a>
                    </div>
                </div>
            </div>

            <!-- PS4 Pro -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="https://elcytec.com/wp-content/uploads/2021/07/ps4-pro-image-block-01-en-24jul20-1536x1536.png" class="card-img-top" alt="PlayStation 4 Pro">
                    <div class="card-body">
                        <h3 class="card-title">PlayStation 4 Pro</h3>
                        <div class="my-3">
                            <span class="badge bg-success me-2">Tersedia 7 Unit</span>
                            <span class="badge bg-primary">4K Gaming</span>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Grafis 4K</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> HDR Gaming</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> 1TB Storage</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Controller DualShock 4</li>
                        </ul>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-primary fw-bold mb-0">Rp 75.000/hari</h4>
                            <div class="ratings">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-3">Termasuk 1 controller dan 1 game pilihan</p>
                        <a href="/rent/ps4pro" class="btn btn-primary w-100">Sewa Sekarang</a>
                    </div>
                </div>
            </div>

            <!-- PS4 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/PS4-Console-wDS4.png/1200px-PS4-Console-wDS4.png" class="card-img-top" alt="PlayStation 4">
                    <div class="card-body">
                        <h3 class="card-title">PlayStation 4</h3>
                        <div class="my-3">
                            <span class="badge bg-success me-2">Tersedia 10 Unit</span>
                            <span class="badge bg-primary">Full HD</span>
                        </div>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Grafis Full HD</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> HDR Gaming</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> 500GB Storage</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Controller DualShock 4</li>
                        </ul>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-primary fw-bold mb-0">Rp 50.000/hari</h4>
                            <div class="ratings">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-warning"></i>
                            </div>
                        </div>
                        <p class="text-muted small mb-3">Termasuk 1 controller dan 1 game pilihan</p>
                        <a href="/rent/ps4" class="btn btn-primary w-100">Sewa Sekarang</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Package Deals -->
        <h2 class="section-title mt-5">Paket Hemat</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card h-100 border-0 shadow" style="background: linear-gradient(to right, #00439c, #0070cc); color: white; border-radius: 15px;">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h3 class="fw-bold mb-3">Paket Weekend</h3>
                                <p>Sewa PlayStation 5 selama weekend (Jumat-Minggu) dengan 3 game pilihan</p>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="fas fa-gift me-2"></i> 3 game pilihan bebas</li>
                                    <li class="mb-2"><i class="fas fa-gamepad me-2"></i> 2 controller</li>
                                    <li class="mb-2"><i class="fas fa-truck me-2"></i> Pengiriman & pengambilan gratis</li>
                                </ul>
                                <h4 class="fw-bold">Rp 250.000</h4>
                                <p class="small text-light">Hemat Rp 50.000 dari harga normal</p>
                            </div>
                            <div class="bg-white text-primary fw-bold rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                HEMAT<br>20%
                            </div>
                        </div>
                        <a href="/package/weekend" class="btn btn-light text-primary fw-bold w-100 mt-3">Pilih Paket</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100 border-0 shadow" style="background: linear-gradient(to right, #0070cc, #00a6eb); color: white; border-radius: 15px;">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h3 class="fw-bold mb-3">Paket Mingguan</h3>
                                <p>Sewa PlayStation 5 selama 7 hari dengan akses ke semua game</p>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2"><i class="fas fa-infinity me-2"></i> Akses tak terbatas ke semua game</li>
                                    <li class="mb-2"><i class="fas fa-gamepad me-2"></i> 2 controller</li>
                                    <li class="mb-2"><i class="fas fa-truck me-2"></i> Pengiriman & pengambilan gratis</li>
                                </ul>
                                <h4 class="fw-bold">Rp 500.000</h4>
                                <p class="small text-light">Hemat Rp 200.000 dari harga normal</p>
                            </div>
                            <div class="bg-white text-primary fw-bold rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                HEMAT<br>30%
                            </div>
                        </div>
                        <a href="/package/weekly" class="btn btn-light text-primary fw-bold w-100 mt-3">Pilih Paket</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Info -->
        <div class="row mt-5">
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <h4 class="card-title fw-bold mb-4"><i class="fas fa-clipboard-list text-primary me-2"></i> Persyaratan Sewa</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item border-0 ps-0"><i class="fas fa-id-card me-2 text-primary"></i> KTP atau kartu identitas lainnya</li>
                            <li class="list-group-item border-0 ps-0"><i class="fas fa-money-bill-wave me-2 text-primary"></i> Uang jaminan Rp 1.000.000</li>
                            <li class="list-group-item border-0 ps-0"><i class="fas fa-map-marker-alt me-2 text-primary"></i> Alamat tempat tinggal yang valid</li>
                            <li class="list-group-item border-0 ps-0"><i class="fas fa-phone me-2 text-primary"></i> Nomor telepon aktif</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <h4 class="card-title fw-bold mb-4"><i class="fas fa-info-circle text-primary me-2"></i> Informasi Tambahan</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item border-0 ps-0"><i class="fas fa-truck me-2 text-primary"></i> Pengiriman dan pengambilan gratis dalam kota</li>
                            <li class="list-group-item border-0 ps-0"><i class="fas fa-headset me-2 text-primary"></i> Dukungan teknis 24/7</li>
                            <li class="list-group-item border-0 ps-0"><i class="fas fa-shield-alt me-2 text-primary"></i> Garansi kerusakan (non-human error)</li>
                            <li class="list-group-item border-0 ps-0"><i class="fas fa-calendar-plus me-2 text-primary"></i> Bisa perpanjang masa sewa</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="mt-5 p-4 rounded shadow-sm bg-white">
            <h2 class="section-title">Pertanyaan Umum</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item border-0 mb-3 shadow-sm">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Bagaimana cara menyewa konsol PlayStation?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Proses penyewaan sangat mudah! Pilih konsol yang ingin Anda sewa, tentukan durasi sewa, lalu isi formulir dengan data diri lengkap. Setelah pembayaran dikonfirmasi, konsol akan dikirim sesuai jadwal yang Anda pilih.
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0 mb-3 shadow-sm">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Apa yang terjadi jika konsol rusak saat saya sewa?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Kerusakan normal akibat pemakaian wajar ditanggung oleh kami. Namun, untuk kerusakan akibat kelalaian (terjatuh, terkena air, dll), biaya perbaikan akan diambil dari uang jaminan sesuai tingkat kerusakan.
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0 mb-3 shadow-sm">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Bisakah saya memperpanjang periode sewa?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Tentu! Anda bisa memperpanjang periode sewa dengan menghubungi kami minimal 24 jam sebelum periode sewa berakhir. Perpanjangan bergantung pada ketersediaan unit.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 