<!-- Portfolio Start -->
<div class="container-fluid pb-3" id="portfolio">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <!-- <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Portfolio</h1> -->
            <h1 class="text-uppercase text-primary">Portfolio</h1>
        </div>




        <div class="row">
            <div class="col-12 text-center mb-2">
                <ul class="list-inline mb-4" id="portfolio-flters">
                    <li class="btn btn-outline-light mr-5 active" data-filter="*">All</li>
                    <li class="btn btn-outline-light mr-5" data-filter=".first">Design</li>
                    <li class="btn btn-outline-light mr-5" data-filter=".second">Development</li>
                    <li class="btn btn-outline-light mr-5" data-filter=".third">Marketing</li>
                </ul>
            </div>
        </div>
        <div class="row">


            <style>
                .owl-carousel .carousel-control-prev-icon,
                .owl-carousel .carousel-control-next-icon {
                    background-size: 100% 100%;
                    width: 30px;
                    height: 30px;
                }

                .owl-nav {
                    position: absolute;
                    top: 50%;
                    width: 100%;
                    display: flex;
                    justify-content: space-between;
                    transform: translateY(-50%);
                    padding: 0 10px;
                }
            </style>




            <!-- Owl Carousel CSS -->
            <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
            <link href="assets/lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">

            <!-- Portfolio Section -->
            <div class="col-lg-6 col-md-6 mb-4 portfolio-item first">
                <div class="rounded overflow-hidden">
                    <!-- Carousel -->
                    <div class="owl-carousel portfolio-carousel position-relative">
                        <div>
                            <img src="assets/img/portfolio-1.jpg" class="img-fluid w-100" alt="Portfolio 1">
                        </div>
                        <div>
                            <img src="assets/img/portfolio-2.jpg" class="img-fluid w-100" alt="Portfolio 2">
                        </div>
                        <div>
                            <img src="assets/img/portfolio-3.jpg" class="img-fluid w-100" alt="Portfolio 3">
                        </div>
                    </div>

                    <!-- Project Info -->

                </div>
                <div class="p-3">
                    <h5 class="mb-1">Accounting Software</h5>
                    <p class="text-white mb-0">
                        A custom-built accounting management tool for business operations. <br>
                        A custom-built accounting management tool for business operations. <br>
                        A custom-built accounting management tool for business operations. <br>
                    </p>

                </div>
                <div class="row g-4">
                    <div class="row">
                        <!-- PHP -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card border-0 text-center p-4">
                                <div class="d-flex align-items-center justify-content-center">
                                    <i class="fab fa-php fa-2x text-primary"></i>
                                    <h5 class="fw-bold ms-3 ml-3 mb-0">PHP</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Laravel -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card border-0 text-center p-4">
                                <div class="d-flex align-items-center justify-content-center">
                                    <i class="fab fa-laravel fa-2x text-danger"></i>
                                    <h5 class="fw-bold ms-3 ml-3 mb-0">Laravel</h5>
                                </div>
                            </div>
                        </div>

                        <!-- JavaScript -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card border-0 text-center p-4">
                                <div class="d-flex align-items-center justify-content-center">
                                    <i class="fab fa-link fa-2x text-warning"></i>
                                    <h5 class="fw-bold ms-3 ml-3 mb-0">Live</h5>
                                </div>
                            </div>
                        </div>







                    </div>

                </div>
            </div>



            <!-- jQuery (Required for Owl Carousel) -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <!-- Owl Carousel JS -->
            <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>

            <script>
                $(document).ready(function() {
                    $(".portfolio-carousel").owlCarousel({
                        items: 1,
                        loop: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        smartSpeed: 700,
                        nav: true,
                        dots: false,
                        navText: [
                            '<span class="carousel-control-prev-icon bg-dark rounded-circle p-2"></span>',
                            '<span class="carousel-control-next-icon bg-dark rounded-circle p-2"></span>'
                        ]
                    });
                });
            </script>





            <div class="col-lg-6 col-md-6 mb-4 portfolio-item second">
                <div class="position-relative overflow-hidden mb-2">
                    <img class="img-fluid rounded w-100" src="assets/img/portfolio-2.jpg" alt="">
                    <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                        <a href="assets/img/portfolio-2.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-4 portfolio-item third">
                <div class="position-relative overflow-hidden mb-2">
                    <img class="img-fluid rounded w-100" src="assets/img/portfolio-3.jpg" alt="">
                    <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                        <a href="assets/img/portfolio-3.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-4 portfolio-item first">
                <div class="position-relative overflow-hidden mb-2">
                    <img class="img-fluid rounded w-100" src="assets/img/portfolio-4.jpg" alt="">
                    <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                        <a href="assets/img/portfolio-4.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-4 portfolio-item second">
                <div class="position-relative overflow-hidden mb-2">
                    <img class="img-fluid rounded w-100" src="assets/img/portfolio-5.jpg" alt="">
                    <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                        <a href="assets/img/portfolio-5.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-4 portfolio-item third">
                <div class="position-relative overflow-hidden mb-2">
                    <img class="img-fluid rounded w-100" src="assets/img/portfolio-6.jpg" alt="">
                    <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                        <a href="assets/img/portfolio-6.jpg" data-lightbox="portfolio">
                            <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio End -->