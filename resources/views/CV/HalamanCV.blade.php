<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae - Nama Anda</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }

        .cv-card {
            border-radius: 16px;
            overflow: hidden;
            border: none;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .profile-header {
            background: linear-gradient(135deg, #0d6efd, #0a58ca);
            color: white;
            padding: 2.5rem 2rem;
        }

        .profile-header h2 {
            letter-spacing: -0.5px;
        }

        .section-title {
            font-size: 0.95rem;
            letter-spacing: 1px;
            color: #0d6efd;
            border-bottom: 2px solid #e9ecef;
            padding-bottom: 0.5rem;
            margin-bottom: 1.25rem;
        }

        .job-title {
            color: #212529;
        }

        .company {
            color: #0d6efd;
            font-weight: 500;
        }

        .skill-badge {
            background-color: #e7f1ff;
            color: #0d6efd;
            font-weight: 500;
            padding: 0.45rem 0.9rem;
            border-radius: 50px;
            font-size: 0.85rem;
            transition: all 0.2s ease;
        }

        .skill-badge:hover {
            background-color: #0d6efd;
            color: white;
        }

        .contact-info i {
            width: 18px;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
              <a href="{{ route('cv.index') }}" class="btn btn-primary mb-4">Kembali ke Formulir</a>
              <a href="{{ route('cv.edit', $cv_id) }}" class="btn btn-secondary mb-4">Edit</a>
              <a href="{{ route('cv.destroy', $cv_id) }}" class="btn btn-danger mb-4" onclick="return confirm('Apakah Anda yakin ingin menghapus CV ini?')">Hapus</a>

                <div class="card cv-card">
                    
                    <!-- Header Profil -->
                    <div class="profile-header text-center">
                        <h2 class="fw-bold mb-1">{{ $nama }}</h2>
                        <p class="mb-3 opacity-90">Web Developer / UI-UX Designer</p>
                        
                        <div class="contact-info d-flex flex-wrap justify-content-center gap-3 small">
                            <span><i class="bi bi-envelope me-1"></i> email@example.com</span>
                            <span><i class="bi bi-telephone me-1"></i> +62 812-3456-7890</span>
                            <span><i class="bi bi-geo-alt me-1"></i> Jakarta, Indonesia</span>
                        </div>
                    </div>

                    <div class="card-body p-4 p-md-5">

                        <!-- Tentang Saya -->
                        <div class="mb-5">
                            <h5 class="section-title text-uppercase fw-bold">Tentang Saya</h5>
                            <p class="text-secondary mb-0 lh-lg">
                                {{ $tentang_saya }}
                            </p>
                        </div>

                        <!-- Pengalaman Kerja -->
                        <div class="mb-5">
                            <h5 class="section-title text-uppercase fw-bold">Pengalaman Kerja</h5>
                            
                            <div class="mb-4">
                              
                                <p class="text-secondary small mb-0">
                                    {{ $pengalaman_kerja }}
                                </p>
                            </div>
                        </div>

                        <!-- Pendidikan -->
                        <div class="mb-5">
                            <h5 class="section-title text-uppercase fw-bold">Pendidikan</h5>
                            
                            <div>
                                <div class="d-flex justify-content-between align-items-start mb-1">
                                    <h6 class="job-title fw-bold mb-0">{{ $pendidikan }}</h6>
                                    <small class="text-muted">2019 - 2023</small>
                                </div>
                            </div>
                        </div>

                        <!-- Keahlian -->
                        <div>
                            <h5 class="section-title text-uppercase fw-bold">Keahlian</h5>
                            <div class="d-flex flex-wrap gap-2">
                                <span class="skill-badge">HTML5</span>
                                <span class="skill-badge">CSS3</span>
                                <span class="skill-badge">JavaScript</span>
                                <span class="skill-badge">Bootstrap 5</span>
                                <span class="skill-badge">Git / GitHub</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>