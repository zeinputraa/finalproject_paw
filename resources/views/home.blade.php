<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="" class="navbar-brand mb-0 h1"><i class="bi bi-ear-fill me-2"></i>RuangTeduh</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="/home" class="nav-link active">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="#" class="nav-link">Consultation</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="#" class="nav-link">Contact</a></li>
                </ul>

                <hr class="d-lg-none text-white-50">

                <a href="" class="btn btn-outline-light my-2 ms-md-auto"><i
                        class="bi bi-box-arrow-in-right me-2"></i>Login</a>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <h4>Jelajahi Topik Konseling Umum</h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
            <div class="bi-house-fill me-3 fs-1"></div>
            <h4 class="mb-0">Well done! this is.</h4>
        </div>
    </div>
    <div class="container mt-4">
        <h4>Komunikasi Sesuai Caramu</h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
            <div class="bi-house-fill me-3 fs-1"></div>
            <h4 class="mb-0">Well done! this is.</h4>
        </div>
    </div>
    <div class="container mt-4">
        <h4>Ambil Tes Kesehatan Mental</h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
            <div class="bi-house-fill me-3 fs-1"></div>
            <h4 class="mb-0">Well done! this is.</h4>
        </div>
    </div>
    <div class="container mt-4">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 mb-md-0 text-body-secondary">
                <i class="bi bi-ear-fill me-2"></i>
            </a>
            <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2024 Company, Inc</span>
          </div>

          <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-threads"></i></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-instagram"></i></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-whatsapp"></i></a></li>
          </ul>
        </footer>
      </div>

    @vite('resources/js/app.js')
</body>
</html>
