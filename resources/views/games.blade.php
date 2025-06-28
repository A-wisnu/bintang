@extends('layouts.main')

@section('content')
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Koleksi Game Kami</h1>
                    <p class="lead mb-4">Jelajahi berbagai macam game PlayStation terbaru dan terpopuler untuk pengalaman gaming tak terlupakan.</p>
                </div>
                <div class="col-lg-6 d-none d-lg-block text-center">
                    <img src="https://image.api.playstation.com/vulcan/ap/rnd/202109/1320/8c9UkgMpzIhLzrNHwJKGl6gR.png" class="img-fluid rounded" alt="Game Collection" style="max-height: 400px;">
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <!-- Game Categories -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card border-0 shadow-sm p-3">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <div class="mb-3 mb-md-0">
                            <h5 class="mb-0 fw-bold">Filter Game</h5>
                        </div>
                        <div class="d-flex gap-2 flex-wrap">
                            <button class="btn btn-primary active">Semua</button>
                            <button class="btn btn-outline-primary">Aksi</button>
                            <button class="btn btn-outline-primary">Petualangan</button>
                            <button class="btn btn-outline-primary">RPG</button>
                            <button class="btn btn-outline-primary">Olahraga</button>
                            <button class="btn btn-outline-primary">Balapan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Games Grid -->
        <h2 class="section-title">Game Tersedia</h2>
        <div class="row">
            <!-- Game 1 -->
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="card h-100">
                    <img src="https://cdn.mobygames.com/covers/11182321-god-of-war-ragnarok-playstation-5-front-cover.jpg" class="card-img-top" alt="God of War Ragnarök">
                    <div class="card-body">
                        <h5 class="card-title">God of War Ragnarök</h5>
                        <p class="card-text small">Petualangan epik Kratos dan Atreus berlanjut di dunia Norse.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="text-primary fw-bold">Rp 25.000/hari</span>
                            <span class="badge bg-success">Tersedia</span>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <a href="#" class="btn btn-primary w-100">Sewa Sekarang</a>
                    </div>
                </div>
            </div>

            <!-- Game 2 -->
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="card h-100">
                    <img src="https://th.bing.com/th/id/OIP.CGhXokxVr0JoYZqLvaTpdQHaKX?cb=iwp2&rs=1&pid=ImgDetMain" class="card-img-top" alt="Spider-Man 2">
                    <div class="card-body">
                        <h5 class="card-title">Spider-Man 2</h5>
                        <p class="card-text small">Berayun melintasi New York sebagai Peter Parker dan Miles Morales.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="text-primary fw-bold">Rp 25.000/hari</span>
                            <span class="badge bg-success">Tersedia</span>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <a href="#" class="btn btn-primary w-100">Sewa Sekarang</a>
                    </div>
                </div>
            </div>

            <!-- Game 3 -->
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="card h-100">
                    <img src="https://assets1.ignimgs.com/2019/11/15/final-fantasy-xiv-online---2019---button-1573848423960.jpg" class="card-img-top" alt="Final Fantasy XIV">
                    <div class="card-body">
                        <h5 class="card-title">Final Fantasy XIV</h5>
                        <p class="card-text small">Petualangan MMORPG epik dengan dunia yang luas.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="text-primary fw-bold">Rp 25.000/hari</span>
                            <span class="badge bg-success">Tersedia</span>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <a href="#" class="btn btn-primary w-100">Sewa Sekarang</a>
                    </div>
                </div>
            </div>

            <!-- Game 4 -->
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="card h-100">
                    <img src="https://image.api.playstation.com/vulcan/ap/rnd/202107/3100/HO8vkO9pfXhwbHi5WHECQJdN.png" class="card-img-top" alt="Horizon Forbidden West">
                    <div class="card-body">
                        <h5 class="card-title">Horizon Forbidden West</h5>
                        <p class="card-text small">Jelajahi dunia post-apocalyptic yang menakjubkan.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="text-primary fw-bold">Rp 25.000/hari</span>
                            <span class="badge bg-success">Tersedia</span>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <a href="#" class="btn btn-primary w-100">Sewa Sekarang</a>
                    </div>
                </div>
            </div>

            <!-- Game 5 -->
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="card h-100">
                    <img src="https://image.api.playstation.com/vulcan/ap/rnd/202204/0123/FPSu024kjzODr5dspelkkBG4.png" class="card-img-top" alt="Gran Turismo 7">
                    <div class="card-body">
                        <h5 class="card-title">Gran Turismo 7</h5>
                        <p class="card-text small">Balapan realistis dengan grafis memukau dan fisika yang akurat.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="text-primary fw-bold">Rp 25.000/hari</span>
                            <span class="badge bg-success">Tersedia</span>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <a href="#" class="btn btn-primary w-100">Sewa Sekarang</a>
                    </div>
                </div>
            </div>

            <!-- Game 6 -->
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="card h-100">
                    <img src="https://image.api.playstation.com/vulcan/ap/rnd/202308/0309/d495549a847bc9dd38749562d1805b95c8cda745af339509.png" class="card-img-top" alt="EA Sports FC 24">
                    <div class="card-body">
                        <h5 class="card-title">EA Sports FC 24</h5>
                        <p class="card-text small">Game sepak bola terbaik dengan fitur terbaru dan grafis realistis.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="text-primary fw-bold">Rp 25.000/hari</span>
                            <span class="badge bg-success">Tersedia</span>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <a href="#" class="btn btn-primary w-100">Sewa Sekarang</a>
                    </div>
                </div>
            </div>
            
            <!-- Game 7 -->
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="card h-100">
                    <img src="https://image.api.playstation.com/vulcan/ap/rnd/202211/1407/Ou77QcIGcLZTLfJZSj2JaYIK.png" class="card-img-top" alt="The Last of Us Part I">
                    <div class="card-body">
                        <h5 class="card-title">The Last of Us Part I</h5>
                        <p class="card-text small">Petualangan penuh emosi dalam dunia post-apocalyptic.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="text-primary fw-bold">Rp 25.000/hari</span>
                            <span class="badge bg-danger">Habis</span>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <a href="#" class="btn btn-secondary w-100">Beri Tahu Saya</a>
                    </div>
                </div>
            </div>
            
            <!-- Game 8 -->
            <div class="col-lg-3 col-md-4 col-6 mb-4">
                <div class="card h-100">
                    <img src="https://image.api.playstation.com/vulcan/ap/rnd/202206/0720/eEczyEMDd2BLa3dtkGJVE9Id.png" class="card-img-top" alt="The Callisto Protocol">
                    <div class="card-body">
                        <h5 class="card-title">The Callisto Protocol</h5>
                        <p class="card-text small">Survival horror dalam penjara luar angkasa yang mengerikan.</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <span class="text-primary fw-bold">Rp 25.000/hari</span>
                            <span class="badge bg-success">Tersedia</span>
                        </div>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <a href="#" class="btn btn-primary w-100">Sewa Sekarang</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <nav aria-label="Game pagination" class="my-5">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                </li>
            </ul>
        </nav>

        <!-- Game Rental Information -->
        <div class="row mt-5">
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <h4 class="card-title fw-bold mb-4"><i class="fas fa-info-circle text-primary me-2"></i> Ketentuan Sewa Game</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item border-0 ps-0"><i class="fas fa-check me-2 text-primary"></i> Game dapat disewa terpisah atau dengan konsol</li>
                            <li class="list-group-item border-0 ps-0"><i class="fas fa-check me-2 text-primary"></i> Maksimal 3 game per sewa konsol</li>
                            <li class="list-group-item border-0 ps-0"><i class="fas fa-check me-2 text-primary"></i> Semua game diuji sebelum disewakan</li>
                            <li class="list-group-item border-0 ps-0"><i class="fas fa-check me-2 text-primary"></i> Data simpanan harus di-backup sebelum dikembalikan</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <h4 class="card-title fw-bold mb-4"><i class="fas fa-undo text-primary me-2"></i> Kebijakan Pengembalian</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item border-0 ps-0"><i class="fas fa-check me-2 text-primary"></i> Game harus dikembalikan dalam kondisi semula</li>
                            <li class="list-group-item border-0 ps-0"><i class="fas fa-check me-2 text-primary"></i> Keterlambatan akan dikenakan biaya tambahan per hari</li>
                            <li class="list-group-item border-0 ps-0"><i class="fas fa-check me-2 text-primary"></i> Disc yang rusak akan dikenakan biaya penuh</li>
                            <li class="list-group-item border-0 ps-0"><i class="fas fa-check me-2 text-primary"></i> Pengembalian lebih awal memenuhi syarat untuk pengembalian dana sebagian</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 