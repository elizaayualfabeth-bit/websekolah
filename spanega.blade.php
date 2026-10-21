<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Spanega</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="mortarboard-fill.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                SMK 3 BLITAR
            </a>
            <ul class="navbar-nav ms-5"
                <li class="nav-item">
                <a class="navbar-brand" href="/spanega">Beranda</a>
                </li>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </ul>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Profil</a>
                    <a class="nav-link" href="#">Akademik</a>
                    <a class="nav-link" href="#">Kesiswaan</a>
                    <a class="nav-link" href="#">Berita</a>
                    <a class="nav-link" href="#">Galeri</a>
                    <a class="nav-link" href="#">Kontak</a>

                </div>
            </div>
        </div>
    </nav>
    <div id="carouselExamplelight" class="carousel carousel-light slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExamplelight" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExamplelight" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExamplelight" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{ asset('spanega.png') }}"
                    class="d-block w-100"
                    style="width: 100%; height: 250px;
      object-fit: fill;"
                    alt="SMK 3 Blitar">
                <div class="carousel-caption d-none d-md-block">
                    <div class="bg-dark bg-opacity-75 p-3 rounded">
                        <h5>Selamat datang di website sekolah</h5>
                        <p>Bersama kita wujudkan generasi yang cerdas, berakhlak dan berprestasi</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="..." class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-9">
                <div class="card border-light mb-3">
                    <div class="card-header">
                        <h2>Sambutan Kepala Sekolah

                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-md-8">

                            <div class="card mb-3">

                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="kepala.png"
                                            class="img-fluid rounded-start"
                                            alt="SMK PGRI WLINGI">
                                    </div>
                                    <div class="col-md-8">

                                        <div class="card-body">

                                            <h5 class="card-title">
                                                Assalamualikum Wr. Wb.
                                            </h5>
                                            <hr>
                                            <p class="card-text">
                                                Portal ini kami hadirkan sebagai pusat informasi dan layanan bagi seluruh satuan pendidikan SMK di Jawa Timur.

                                                Melalui portal ini, tersedia ruang informasi, layanan digital, dan berbagai pembaruan program yang mendukung penguatan pendidikan vokasi agar semakin adaptif, kolaboratif, dan relevan dengan kebutuhan dunia kerja.

                                                Semoga kehadiran halaman ini dapat mempererat sinergi dan menjadi sumber inspirasi dalam mewujudkan SMK Jawa Timur yang unggul dan berdaya saing global.
                                            </p>
                                            <p class="card-text"><small class="text-body-secondary">AGUS HARIYONO, S.Pd.,M.Pd</small></p>
                                            <hr>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>




                    </div>
                </div>

                <br>
                <div class="card mt-3">

                    <div class="card-header bg-primary-subtle">
                        <b> Kegiatan Terbaru</b>
                    </div>

                    <div class="card-body">

                        <div class="row">

                            {{-- KEGIATAN 1 --}}
                            <div class="col-md-3 mb-3">

                                <div class="card h-100">

                                    <img src="dokumentasi smk 3.jpeg"
                                        class="card-img-top"
                                        style="height:150px; object-fit:cover;">

                                    <div class="card-body">
                                        <h6 class="fw-bold">
                                            Kegiatan Penyusunan KSP
                                        </h6>

                                        <small class="text-secondary">
                                            📅 16 Juli 2026
                                        </small>

                                        <p class="mt-2">
                                            Kegiatan penyusunan KSP di SMK Negeri 3 Blitar secara umum dapat dijelaskan sebagai berikut. Rincian ini merupakan gambaran kegiatan penyusunan KSP di sekolah, bukan laporan terverifikasi mengenai kegiatan tertentu yang telah dilaksanakan oleh SMK Negeri 3 Blitar.
                                        </p>
                                    </div>

                                </div>

                            </div>


                            {{-- KEGIATAN 2 --}}
                            <div class="col-md-3 mb-3">

                                <div class="card h-100">

                                    <img src="dokumentasi ke 2.jpeg"
                                        class="card-img-top"
                                        style="height:150px; object-fit:cover;">

                                    <div class="card-body">
                                        <h6 class="fw-bold">
                                            Tahun Baru Hijriah 1447 H - Dan Santunan Anak Yatim Piatu 

                                        </h6>

                                        <small class="text-secondary">
                                            📅 21 April 2026
                                        </small>

                                        <p class="mt-2">
                                             Kegiatan Tahun Baru Hijriah 1447 H dan santunan anak yatim piatu bertujuan meningkatkan keimanan, mempererat kebersamaan warga sekolah, serta menumbuhkan sikap peduli dan berbagi kepada sesama.
                                        </p>
                                    </div>

                                </div>

                            </div>


                            {{-- KEGIATAN 3 --}}
                            <div class="col-md-3 mb-3">

                                <div class="card h-100">

                                    <img src="dokumentasi 4.jpeg"
                                        class="card-img-top"
                                        style="height:150px; object-fit:cover;">

                                    <div class="card-body">
                                        <h6 class="fw-bold">
                                            Kunjungan Industri Pokja BKK ke PT AICE Ice Cream Jatim Industry
                                        </h6>

                                        <small class="text-secondary">
                                            📅 18 Juni 2026
                                        </small>

                                        <p class="mt-2">
                                            Kunjungan Industri Pokja BKK merupakan kegiatan kunjungan ke dunia industri yang berkaitan dengan Bursa Kerja Khusus (BKK) di sekolah. Kegiatan ini bertujuan mengenalkan dunia kerja kepada pihak sekolah serta memperkuat hubungan antara sekolah dan perusahaan.
                                            Dalam kunjungan ke PT AICE Ice Cream Jatim Industry, kegiatan ini dapat berkaitan dengan pengenalan lingkungan industri, sistem kerja perusahaan, dan peluang kerja bagi lulusan SMK.
                                        </p>
                                    </div>

                                </div>

                            </div>


                            {{-- KEGIATAN 4 --}}
                            <div class="col-md-3 mb-3">

                                <div class="card h-100">

                                    <img src="dokumentasi 5.jpeg"
                                        class="card-img-top"
                                        style="height:150px; object-fit:cover;">

                                    <div class="card-body">
                                        <h6 class="fw-bold">
                                            kegiatan Pra pendaftaran SPMB 2025 SMKN 3 Blitar pada tahap Entry, Verifikasi dan Validasi Data Calon Murid.


                                        </h6>

                                        <small class="text-secondary">
                                            📅 14 januari 2026
                                        </small>

                                        <p class="mt-2">
                                            Kesimpulan: Kegiatan pra-pendaftaran SPMB 2025 di SMKN 3 Blitar bertujuan memastikan data calon murid tercatat dengan benar, dokumen lengkap, serta proses penerimaan murid baru berjalan tertib, akurat, dan transparan. Informasi spesifik mengenai pembagian tugas petugas di SMKN 3 Blitar tidak dijelaskan secara terperinci dalam sumber yang tersedia.
                                        </p>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <div class="col-3">
                <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-action active" aria-current="true">

                        Pengumuman Terbaru
                    </button>
                    <button type="button" class="list-group-item list-group-item-action">
                        <i class="bi bi-file-earmark-text-fill"></i>
                        <b> Pendaftaran Peserta Didik Baru Tahun Ajaran 2025/2026</b>
                        <br>
                        <small> 📆15 Apr 2025</small>
                    </button>
                    <button type="button" class="list-group-item list-group-item-action">
                        <b> Jadwal Ujian Sementer Genap Tahun Ajaran 2025/2026</b>
                        <br>
                        <small>📆10 Apr 2025</small>
                    </button>
                    <button type="button" class="list-group-item list-group-item-action">
                        <b> Informasi Libur Idul Fitri 1446 H </b>
                        <br>
                        <small>📆 25 Mar 2025</small>
                    </button>
                    <button type="button" class="list-group-item list-group-item-action">
                        <b>Pengumuman Kelulusan Kelas XII </b>
                        <br>
                        <small> 📆20 Mar 2025</small>
                    </button>
                    <button type="button" class="list-group-item list-group-item-action">
                        <b>kegiatan Bakti Sosial Sekolah </b>
                        <br>
                        <small>📆 12 Mar 2025</small>
                    </button>
                </div>
            </div>
        </div>


    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>

</html>