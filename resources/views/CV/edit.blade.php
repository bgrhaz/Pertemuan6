<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Curriculum Vitae</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            min-height: 100vh;
        }

        .form-card {
            border-radius: 16px;
            border: none;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        .form-header {
            background: linear-gradient(135deg, #0d6efd, #0a58ca);
            color: white;
            padding: 1.75rem 2rem;
        }

        .form-label {
            font-weight: 600;
            color: #212529;
            margin-bottom: 0.4rem;
        }

        .form-control {
            border-radius: 10px;
            padding: 0.7rem 1rem;
            border: 1px solid #dee2e6;
            transition: all 0.2s ease;
        }

        .form-control:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.15);
        }

        textarea.form-control {
            min-height: 110px;
            resize: vertical;
        }

        .btn-submit {
            background: linear-gradient(135deg, #0d6efd, #0a58ca);
            border: none;
            border-radius: 10px;
            padding: 0.75rem 2rem;
            font-weight: 600;
            transition: all 0.2s ease;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(13, 110, 253, 0.3);
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9">

                <div class="card form-card">
                    
                    <!-- Header -->
                    <div class="form-header text-center">
                        <h3 class="mb-1 fw-bold">
                            <i class="bi bi-file-earmark-person me-2"></i>
                            Form Curriculum Vitae
                        </h3>
                        <p class="mb-0 opacity-90 small">Isi data diri Anda di bawah ini</p>
                    </div>

                    <!-- Form Body -->
                    <div class="card-body p-4 p-md-5">
                        <form action="{{ route('cv.store') }}" method="POST">
                            @csrf

                            <!-- Nama -->
                            <div class="mb-4">
                                <label for="nama" class="form-label">
                                    <i class="bi bi-person me-1 text-primary"></i> Nama Lengkap
                                </label>
                                <input type="text" 
                                       class="form-control" 
                                       id="nama" 
                                       name="nama" 
                                       value="{{ $cv->nama }}"
                                       placeholder="Masukkan nama lengkap Anda"
                                       required>
                            </div>

                            <!-- Tentang Saya -->
                            <div class="mb-4">
                                <label for="tentang_saya" class="form-label">
                                    <i class="bi bi-chat-quote me-1 text-primary"></i> Tentang Saya
                                </label>
                                <textarea class="form-control" 
                                          id="tentang_saya" 
                                          name="tentang_saya" 
                                          placeholder="Ceritakan sedikit tentang diri Anda..."
                                          required>{{ $cv->tentang_saya }}</textarea>
                            </div>

                            <!-- Pengalaman Kerja -->
                            <div class="mb-4">
                                <label for="pengalaman_kerja" class="form-label">
                                    <i class="bi bi-briefcase me-1 text-primary"></i> Pengalaman Kerja
                                </label>
                                <textarea class="form-control" 
                                          id="pengalaman_kerja" 
                                          name="pengalaman_kerja" 
                                          placeholder="Contoh: Frontend Developer di PT Teknologi Nusantara (2023 - Sekarang)"
                                          required>{{ $cv->pengalaman_kerja }}</textarea>
                            </div>

                            <!-- Pendidikan -->
                            <div class="mb-4">
                                <label for="pendidikan" class="form-label">
                                    <i class="bi bi-mortarboard me-1 text-primary"></i> Pendidikan
                                </label>
                                <textarea class="form-control" 
                                          id="pendidikan" 
                                          name="pendidikan" 
                                          placeholder="Contoh: S1 Teknik Informatika - Universitas Contoh (2019 - 2023)"
                                          required>{{ $cv->pendidikan }}</textarea>
                            </div>

                            <!-- Tombol Submit -->
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary btn-submit">
                                    <i class="bi bi-save me-2"></i> Simpan Data
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>