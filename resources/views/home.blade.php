@extends('layouts.main')

@section('content')
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Rasakan Sensasi Gaming Terbaik</h1>
                    <p class="lead mb-4">Nikmati berbagai konsol PlayStation terbaru dan ratusan game premium dengan layanan rental kami yang terpercaya.</p>
                    <div class="d-flex gap-3">
                        <a href="/consoles" class="btn btn-light btn-lg px-4 fw-bold">Sewa Sekarang</a>
                        <a href="/games" class="btn btn-outline-light btn-lg px-4">Lihat Game</a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block text-center">
                    <img src="https://gmedia.playstation.com/is/image/SIEPDC/ps5-product-thumbnail-01-en-14sep21?$facebook$" class="img-fluid rounded" alt="PlayStation 5" style="max-height: 400px;">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Featured Consoles -->
        <h2 class="section-title">Konsol PlayStation</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="position-relative">
                        <img src="https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6566/6566040_rd.jpg" class="card-img-top" alt="PlayStation 5">
                        <div class="position-absolute top-0 end-0 bg-danger text-white m-3 px-2 py-1 rounded-pill">
                            Terbaru
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">PlayStation 5</h3>
                        <p class="card-text">Rasakan gaming generasi terbaru dengan grafis memukau dan waktu loading super cepat.</p>
                        <p class="text-primary fw-bold mb-3">Rp 100.000/hari</p>
                        <a href="/consoles/ps5" class="btn btn-primary w-100">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://elcytec.com/wp-content/uploads/2021/07/ps4-pro-image-block-01-en-24jul20-1536x1536.png" class="card-img-top" alt="PlayStation 4 Pro">
                    <div class="card-body">
                        <h3 class="card-title">PlayStation 4 Pro</h3>
                        <p class="card-text">Gaming 4K dengan grafis yang ditingkatkan dan performa yang lebih baik.</p>
                        <p class="text-primary fw-bold mb-3">Rp 75.000/hari</p>
                        <a href="/consoles/ps4pro" class="btn btn-primary w-100">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/PS4-Console-wDS4.png/1200px-PS4-Console-wDS4.png" class="card-img-top" alt="PlayStation 4">
                    <div class="card-body">
                        <h3 class="card-title">PlayStation 4</h3>
                        <p class="card-text">Konsol klasik dengan koleksi game yang luar biasa untuk pengalaman gaming sempurna.</p>
                        <p class="text-primary fw-bold mb-3">Rp 50.000/hari</p>
                        <a href="/consoles/ps4" class="btn btn-primary w-100">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Promo Section -->
        <div class="row my-5">
            <div class="col-12">
                <div class="card border-0">
                    <div class="card-body p-4" style="background: linear-gradient(135deg, #00439c 0%, #00a6eb 100%); border-radius: 15px;">
                        <div class="row align-items-center">
                            <div class="col-lg-8 text-white">
                                <h3 class="fw-bold">Dapatkan Diskon 20% untuk Sewa Mingguan!</h3>
                                <p class="mb-0">Gunakan kode promo PSWEEKLY saat checkout</p>
                            </div>
                            <div class="col-lg-4 text-end mt-3 mt-lg-0">
                                <a href="/pricing" class="btn btn-light fw-bold px-4">Lihat Penawaran</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Featured Games -->
        <h2 class="section-title">Game Populer</h2>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="card h-100">
                    <img src="https://cdn.mobygames.com/covers/11182321-god-of-war-ragnarok-playstation-5-front-cover.jpg" class="card-img-top" alt="God of War Ragnarök">
                    <div class="card-body">
                        <h5 class="card-title">God of War Ragnarök</h5>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="text-primary fw-bold">Rp 25.000/hari</span>
                            <span class="badge bg-success">Tersedia</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="card h-100">
                    <img src="https://th.bing.com/th/id/OIP.CGhXokxVr0JoYZqLvaTpdQHaKX?cb=iwp2&rs=1&pid=ImgDetMain" class="card-img-top" alt="Spider-Man 2">
                    <div class="card-body">
                        <h5 class="card-title">Spider-Man 2</h5>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="text-primary fw-bold">Rp 25.000/hari</span>
                            <span class="badge bg-success">Tersedia</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="card h-100">
                    <img src="https://assets1.ignimgs.com/2019/11/15/final-fantasy-xiv-online---2019---button-1573848423960.jpg" class="card-img-top" alt="Final Fantasy XIV">
                    <div class="card-body">
                        <h5 class="card-title">Final Fantasy XIV</h5>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="text-primary fw-bold">Rp 25.000/hari</span>
                            <span class="badge bg-success">Tersedia</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="card h-100">
                    <img src="https://image.api.playstation.com/vulcan/ap/rnd/202107/3100/HO8vkO9pfXhwbHi5WHECQJdN.png" class="card-img-top" alt="Horizon Forbidden West">
                    <div class="card-body">
                        <h5 class="card-title">Horizon Forbidden West</h5>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="text-primary fw-bold">Rp 25.000/hari</span>
                            <span class="badge bg-success">Tersedia</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="/games" class="btn btn-outline-primary px-4">Lihat Semua Game</a>
        </div>

        <!-- Why Choose Us -->
        <div class="p-5 rounded-3 mt-5 bg-white shadow-sm">
            <h2 class="section-title">Mengapa Memilih Kami?</h2>
            <div class="row">
                <div class="col-md-4 text-center mb-4">
                    <div class="mb-3">
                        <i class="fas fa-gamepad fa-3x" style="color: #00439c;"></i>
                    </div>
                    <h4 class="fw-bold">Konsol Terbaru</h4>
                    <p>Kami merawat konsol kami dalam kondisi sempurna dan secara rutin memperbarui inventaris kami.</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <div class="mb-3">
                        <i class="fas fa-trophy fa-3x" style="color: #00439c;"></i>
                    </div>
                    <h4 class="fw-bold">Koleksi Game Besar</h4>
                    <p>Akses ke ratusan game terbaru dari berbagai genre untuk pengalaman gaming maksimal.</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <div class="mb-3">
                        <i class="fas fa-clock fa-3x" style="color: #00439c;"></i>
                    </div>
                    <h4 class="fw-bold">Sewa Fleksibel</h4>
                    <p>Pilih sewa harian, mingguan, atau bulanan sesuai kebutuhan Anda dengan harga terbaik.</p>
                </div>
            </div>
        </div>
        
        <!-- Testimonials -->
        <h2 class="section-title mt-5">Ulasan Pelanggan</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="card-text">"Pelayanan sangat memuaskan! Konsol PS5 yang saya sewa dalam kondisi sangat bagus dan pengiriman tepat waktu."</p>
                        <div class="d-flex align-items-center mt-3">
                            <div class="flex-shrink-0">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Customer" class="rounded-circle" width="50">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-0">Budi Santoso</h6>
                                <small class="text-muted">Jakarta</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="card-text">"Koleksi gamenya lengkap dan up-to-date! Sangat worth it menyewa di sini daripada beli konsol sendiri."</p>
                        <div class="d-flex align-items-center mt-3">
                            <div class="flex-shrink-0">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Customer" class="rounded-circle" width="50">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-0">Siti Rahayu</h6>
                                <small class="text-muted">Bandung</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                        </div>
                        <p class="card-text">"Customer service responsif dan membantu. Proses sewa mudah dan prosedurnya jelas. Sangat direkomendasikan!"</p>
                        <div class="d-flex align-items-center mt-3">
                            <div class="flex-shrink-0">
                                <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Customer" class="rounded-circle" width="50">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-0">Andi Wijaya</h6>
                                <small class="text-muted">Surabaya</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 