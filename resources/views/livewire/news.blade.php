<div>
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Noticias</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="text-body" wire:navigate href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-dark active" aria-current="page">Noticias</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Search and Category Filter Start -->
    <div class="container py-3">
        <div class="d-flex align-items-center mb-4">
            <input type="text" class="form-control me-3" placeholder="Search ..." style="max-width: 300px;">
            <div class="btn-group" role="group" aria-label="Category Filter">
                <button type="button" class="btn btn-secondary active">All Categories</button>
                <button type="button" class="btn btn-outline-secondary">Awards & Recognitions</button>
                <button type="button" class="btn btn-outline-secondary">Company</button>
                <button type="button" class="btn btn-outline-secondary">News</button>
                <button type="button" class="btn btn-outline-secondary">Press</button>
                <button type="button" class="btn btn-outline-secondary">Product</button>
            </div>
        </div>
    </div>
    <!-- Search and Category Filter End -->

    <!-- Noticias Section Start -->
    <div class="container py-5 wow fadeInUp" data-wow-delay="0.3s">
        <h2 class="text-center mb-4 animated fadeInDown">Últimas Noticias sobre Producción de Cacao</h2>
        <div class="row g-4">
            <!-- News Item Start -->
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="card border-0 shadow-sm transition">
                    <img src="path/to/image1.jpg" class="card-img-top" alt="Noticia 1">
                    <div class="card-body">
                        <h5 class="card-title">Tendencias en la Producción de Cacao 2024</h5>
                        <p class="card-text">Descubre las nuevas técnicas de producción y cómo están afectando al mercado global del cacao.</p>
                        <a href="#" class="btn btn-primary transition">Leer más</a>
                    </div>
                </div>
            </div>
            <!-- News Item End -->

            <!-- Additional News Items -->
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.4s">
                <div class="card border-0 shadow-sm transition">
                    <img class="img-fluid" src="{{ asset('/front/img/logo.png') }}" alt="Noticia 2">
                    <div class="card-body">
                        <h5 class="card-title">Impacto del Cambio Climático en la Cosecha de Cacao</h5>
                        <p class="card-text">Análisis de cómo las variaciones climáticas están afectando la calidad y cantidad de las cosechas de cacao.</p>
                        <a href="#" class="btn btn-primary transition">Leer más</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.5s">
                <div class="card border-0 shadow-sm transition">
                    <img src="path/to/image3.jpg" class="card-img-top" alt="Noticia 3">
                    <div class="card-body">
                        <h5 class="card-title">Inversiones en Tecnología para Mejorar la Producción</h5>
                        <p class="card-text">Conoce las últimas inversiones en tecnología para mejorar la eficiencia y sostenibilidad en la producción de cacao.</p>
                        <a href="#" class="btn btn-primary transition">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Noticias Section End -->

    <!-- Footer Section Start -->
    <div class="container-fluid bg-dark footer pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <h1 class="fw-bold text-primary mb-4">F<span class="text-secondary">oo</span>dy</h1>
                    <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h4 class="text-light mb-4">Address</h4>
                    <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 wow fadeInUp" data-wow-delay="0.6s">
                        &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end wow fadeInUp" data-wow-delay="0.6s">
                        Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Section End -->

    <style>
        .transition {
            transition: all 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }
        .btn-primary:hover {
            background-color: #004d99;
        }
    </style>
</div>