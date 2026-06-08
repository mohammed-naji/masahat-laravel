<!doctype html>
<html lang="en">

{{-- if(condition){
    true
}else {
    false
}

if(cond1) {

}else if(cond2) {

}else {

}

(cond1) ? true : (cond2) ? true : false

(condition) ? true : false --}}

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? env('APP_NAME') }}</title>
    <script type="module" crossorigin src="{{ asset('webassets/assets/js/main.js') }}"></script>
    <link rel="stylesheet" crossorigin href="{{ asset('webassets/assets/css/main.css') }}">
    @stack('css')
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white shadow-sm px-4 py-3 navbar-custom">
        <div class="container-fluid px-0">
            <a class="navbar-brand" href="index.html">
                <span class="d-flex flex-column text-uppercase text-xs fw-bold lh-sm">
                    <span class="" style="letter-spacing: .12rem;">Furnish</span>
                    <span>Template</span>
                </span></a>

            <div class="mx-auto d-lg-block d-none">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.html">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="testimonials.html">Testimonials</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link " href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex align-items-center gap-4">
                <span class="d-flex align-items-center gap-2 fw-bold">
                    <span>
                        <i class="bi bi-telephone"></i>
                    </span>
                    <span>+901234576</span>
                </span>
                <a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                    aria-controls="offcanvasExample">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                    </svg>
                </a>

            </div>
        </div>
    </nav>
    {{ $features ?? '' }}
    <main>

        {{ $slot }}

    </main>
    <footer class="bg-dark  pt-8 footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <a class="navbar-brand" href="#">
                        <span class="d-flex flex-column text-uppercase text-xs fw-bold lh-sm">
                            <span class="" style="letter-spacing: .12rem;">Furnish</span>
                            <span>Template</span>
                        </span></a>
                </div>
                <div class="col-lg-8 col-md-6 mb-4 d-flex justify-content-start justify-content-md-end gy-4">
                    <ul class="list-unstyled lh-lg d-flex flex-column flex-md-row gap-4">
                        <li><a href="#" class=" ft-links text-decoration-none">Home</a></li>
                        <li><a href="#" class=" ft-links text-decoration-none">Services</a></li>
                        <li><a href="#" class=" ft-links text-decoration-none">Products</a></li>
                        <li><a href="#" class=" ft-links text-decoration-none">About Us</a></li>
                        <li><a href="#" class=" ft-links text-decoration-none">Contact</a></li>
                    </ul>
                </div>
                <div class="row justify-content-center align-items-center pt-lg-8 pb-4">
                    <div class="col-lg-6 col-md-6 mb-4">
                        <h2 class="display-3 text-white">We Design all over the world</h2>

                    </div>


                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="d-flex gap-3 justify-content-start justify-content-lg-end">
                            <a href="#" class="btn btn-outline-light btn-icon"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="btn btn-outline-light btn-icon"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="btn btn-outline-light btn-icon"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="btn btn-outline-light btn-icon"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center py-lg-8">
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="d-flex flex-column">
                            <span>Email Id</span>
                            <span class="h3 fw-light">Info@example.com</span>
                        </div>
                    </div>


                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="d-flex gap-3 justify-content-lg-end">
                            <a href="#" class="btn btn-outline-light">Contact us</a>
                        </div>
                    </div>
                </div>
                <hr class="bg-secondary">
                <div class="row pb-3">
                    <div class="col-md-6 text-center text-md-start">
                        <p class=" mb-0">&copy; 2025 Furnish. Developed by <a href="https://codescandy.com"
                                class="text-white" target="_blank">CodesCandy</a> • Distributed by <a
                                href="https://themewagon.com" class="text-white" target="_blank">ThemeWagon</a>. All
                            rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <a href="#" class=" ft-links text-decoration-none me-3">Privacy Policy</a>
                        <a href="#" class=" ft-links text-decoration-none">Terms of Service</a>
                    </div>
                </div>
            </div>
    </footer>
    <div class="position-fixed end-0 bottom-0 m-4 z-1">
        <a href="https://themewagon.com/themes/furnish/" class="btn btn-primary" target="_blank"> Download Now</a>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header px-4">
            <a class="navbar-brand" href="#">
                <span class="d-flex flex-column text-uppercase text-xs fw-bold lh-sm">
                    <span class="" style="letter-spacing: .12rem;">Furnish</span>
                    <span>Template</span>
                </span></a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            <div class="navbar-custom">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.html">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="testimonials.html">Testimonials</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link " href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @stack('js')
</body>

</html>
