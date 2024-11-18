<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
	<title>{{ $title ?? 'web cacao' }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    

    <!-- Favicon -->
    <link href="{{asset('/front/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('/front/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('/front/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('/front/css/style.css')}}" rel="stylesheet">

    @livewireStyles
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">

        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>info@example.com</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Follow us:</small>
                <a class="text-body ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-body ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>


        </div>
       



        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">

            <a href="index.html"  class="navbar-brand ms-4 ms-lg-0">

                <h1 class="fw-bold text-primary m-0" >CACAO <span class="text-secondary">CUL</span>TURA </h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a wire:navigate class="nav-item nav-link active" href="{{ route('home') }}">Inicio</a>
                    <a wire:navigate class="nav-item nav-link" href="{{ route('aboutuS') }}">About</a>
                    <a wire:navigate class="nav-item nav-link" href="{{ route('productS') }}">Nosotros</a>
                    <a wire:navigate class="nav-item nav-link" href="{{ route('contactUs') }}">Contacto</a>
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Productos y Servicios</a>
                        <div class="dropdown-menu m-0">
                            <a wire:navigate class="dropdown-item" href="{{ route('blogGrid') }}">Blog</a>
                            <a wire:navigate class="dropdown-item" href="{{ route('services') }}">Servicios</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a wire:navigate class="dropdown-item" href="{{ route('News') }}">Noticias</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
            
                    <!-- Nueva Opción Desplegable para Publicaciones -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Publicaciones</a>
                        <div class="dropdown-menu m-0">
                            <a wire:navigate class="dropdown-item" href="#">Revista Cacao</a>
                            <a wire:navigate class="dropdown-item" href="#">Boletin</a>
                            <a wire:navigate class="dropdown-item" href="#">Editoriales</a>
                            <a wire:navigate class="dropdown-item" href="{{ route('Multimedia') }}">Multimedia</a>
                            <a wire:navigate class="dropdown-item" href="#">Estadisticas Cacaoteras</a>

                        </div>
                    </div>
                </div>
            </div>
            




                  
                

                
                <!-- /navigation -->
               

                <div class="d-none d-lg-flex ms-2">
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                        <small class="fa fa-search text-body"></small>
                    </a>
                    <a class="btn-sm-square bg-white rounded-circle ms-3"href="{{ url('/dashboard') }}">
                        <small class="fa fa-user text-body"></small>
                    </a>
                    <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                        <small class="fa fa-shopping-bag text-body"></small>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End
    
    aqca va lo -->


    <!-- Carousel Start -->
    {{ $slot }}

    
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/front/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('/front/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('/front/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('/front/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src= "{{asset('/front/js/main.js') }}"></script>
    @livewireScripts
</body>

</html>