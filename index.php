<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/LogoUdinus.png" />
    <title>Udinus Poliklinik</title>

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
         body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            margin: 0;
            padding: 0;
        }
        
        .hero {
            background-color: aliceblue;
            height: 50vh;
            background-size: cover;
            background-position: center;
            color: linear-gradient(to right, #4facfe, #00f2fe);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .hero h5 {
            font-size: 1.5rem;
            font-weight: 500;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.6);
        }

        .hero marquee {
            position: absolute;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            width: 100%;
            padding: 10px;
        }

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .client_section {
            padding: 50px 0;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            background-color: #ffffff;
        }

        .testimonial-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: all 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .img-box img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #007bff;
        }

        .btn-modern {
        background: linear-gradient(to right, #4facfe, #00f2fe);
        border: none;
        border-radius: 25px;
        color: white;
        padding: 10px 20px;
        font-size: 1rem;
        font-weight: 500;
        text-transform: uppercase;
        transition: all 0.3s ease;
    }

    .btn-modern:hover {
        background: linear-gradient(to right, #00f2fe, #4facfe);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        transform: translateY(-2px);
    }

    .btn-modern:focus {
        outline: none;
        box-shadow: 0 0 0 3px rgba(79, 172, 254, 0.5);
    }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <div class="hero">
        <div>
            <h1>POLIKLINIK UDINUS</h1>
            <h5>Sistem Pelayanan Kesehatan dari Poliklinik Udinus</h5>
        </div>
        <marquee>Selamat Datang di Website Saya Rawerrrrrr</marquee>
    </div>

        <!-- Login Options -->
    <div class="container py-5">
        <div class="row text-center">
            <div class="col-md-6 mb-4">
                <div class="card p-4">
                    <i class="fas fa-user-injured fa-3x text-info mb-3"></i>
                    <h3>Pasien</h3>
                    <p class="text-muted">Untuk mendapatkan layanan kesehatan dari Udinus Poliklinik, silahkan login terlebih dahulu.</p>
                    <a href="loginUser.php" class="btn btn-modern">Masuk</a>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card p-4">
                    <i class="fas fa-user-md fa-3x text-warning mb-3"></i>
                    <h3>Dokter</h3>
                    <p class="text-muted">Untuk memulai melayani pasien di Udinus Poliklinik, silahkan login terlebih dahulu.</p>
                    <a href="login.php" class="btn btn-modern">Masuk</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <section class="client_section">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Testimoni Pelayanan</h2>
                <p class="text-muted">Apa kata pasien kami tentang pelayanan kami?</p>
            </div>

            <div class="row">
                <!-- Testimonial 1 -->
                <div class="col-md-6 mb-4">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-3">
                            <div class="img-box me-3">
                                <img src="assets/images/hanep.jpg" alt="Hanep">
                            </div>
                            <div>
                                <h6 class="mb-0">Hanif</h6>
                                <small class="text-muted">Semarang</small>
                            </div>
                        </div>
                        <p class="mb-0">Saya sudah sehat</p>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="col-md-6 mb-4">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-3">
                            <div class="img-box me-3">
                                <img src="assets/images/hanep1.jpg" alt="Hanif">
                            </div>
                            <div>
                                <h6 class="mb-0">Hanep</h6>
                                <small class="text-muted">Semarang</small>
                            </div>
                        </div>
                        <p class="mb-0">Saya juga</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
