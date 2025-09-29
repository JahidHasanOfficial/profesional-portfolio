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
                        <li class="btn btn-outline-light me-5">
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

                .image-section {
                    height: 300px;
                    overflow: hidden;
                }
                .s{
                    
                    background-color: #284864;
                    background-clip: border-box;
                    border: 1px solid rgba(0, 0, 0, 0.125);
                    border-radius: 0.25rem;
                    box-shadow: rgb(38, 72, 102) 3px 3px 6px 0px inset, rgba(29, 23, 23, 0.5) -3px -3px 6px 1px inset;
                }
                
            </style>

            <!-- Owl Carousel CSS -->
            <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
            <link href="assets/lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">

            <!-- Service Section -->
            <!-- Service Section -->

            <?php
            $sql = mysqli_query($con, "SELECT * FROM service");
            while ($row = mysqli_fetch_assoc($sql)) {
                $service_id = $row['id'];
                $title = $row['title'];
                $subtitle = $row['subtitle'];
                $live_link = $row['live_link'];
                $details = $row['details'];

                // Fetch all images for this service
                $img_sql = mysqli_query($con, "SELECT * FROM service_images WHERE service_id='$service_id'");
                $images = [];
                while ($img_row = mysqli_fetch_assoc($img_sql)) {
                    $images[] = $img_row['image_name'];
                }
            ?>
                <div class="col-lg-6 col-md-6 mb-4 portfolio-item">
                    <div class="rounded overflow-hidden">
                        <!-- Carousel -->
                        <div class="owl-carousel portfolio-carousel image-section position-relative">
                            <?php
                            if (!empty($images)) {
                                foreach ($images as $img) {
                                    echo '<div><img src="itm-admin/user/user_images/' . $img . '" class="img-fluid w-100" alt="' . htmlspecialchars($title) . '"></div>';
                                }
                            } else {
                                echo '<div><img src="assets/img/placeholder.jpg" class="img-fluid w-100" alt="No Image"></div>';
                            }
                            ?>
                        </div>
                    </div>

                    <!-- Project Info -->
                    <div class="p-3">
                        <h5 class="mb-1 text-white"><?= htmlspecialchars($title) ?></h5>
                        <p class="text-white mb-0"><?= htmlspecialchars($subtitle) ?></p>
                    </div>

                    <div class="mt-2 gap-5 ">
                        <a class="btn btn-outline-light" target="_blank" href="#">
                            Details
                        </a>
                        <a class="btn btn-outline-light" target="_blank" href="<?= htmlspecialchars($live_link) ?>">
                            Live Preview
                        </a>
                    </div>
                </div>
            <?php } ?>

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