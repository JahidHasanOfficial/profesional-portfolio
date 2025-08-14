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
<?php
$sql = mysqli_query($con, "SELECT * FROM service_category");
while ($row = mysqli_fetch_assoc($sql)) { ?>
    <li class="btn btn-outline-light me-5"
    >
        <?php echo htmlspecialchars($row['cat_name']); ?>
    </li>
<?php
}
?>


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
               <div class="text-center">
                              <a class="text-white btn bg-info btn-primary" target="blank" href="https://www.youtube.com/">
                                Live Preview
                              </a>
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





        </div>
    </div>
</div>
<!-- Portfolio End -->