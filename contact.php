<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('link.php'); ?>

  <title>Contact- Jahid Hasan</title>


  <style>
    .is-invalid {
      color: #dc3545;
    }

    input,
    select {
      padding: 16px 18px !important;
      height: auto !important;
    }

    input:focus,
    select:focus {
      box-shadow: none !important;
      border-color: #16BE45 !important;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include('header.php'); ?>
  <!-- End Header -->

  <main id="main">
    <?php include('breadcrumb.php'); ?>

    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our Contact Us</h2>
        </div>



        <div class="row justify-content-center contact" data-aos="fade-up">
          <div class="col-lg-12">

            <div class="info-wrap rounded">
              <div class="row">


                <div class="col-lg-3 info mb-5 mt-lg-3">
                  <i class="icofont-phone"></i>
                  <h4>Phone Number </h4>
                  <p>+88 01865-277323</p>
                </div>


                <div class="col-lg-3 info mb-5 mt-lg-3">
                  <i class="icofont-envelope"></i>
                  <h4>Email</h4>
                  <p>jahidhasanofficial23@gmail.com</p>
                </div>


                <div class="col-lg-6 info mb-5 mt-lg-3">
                  <i class="icofont-google-map"></i>
                  <h4>Location </h4>
                  <p>Khaja Super Market, 2<sup>nd</sup> to 7<sup>th</sup> Floor, Kallyanpur Bus Stop, Mirpur Road, Dhaka-1207.</p>
                </div>



              </div>
            </div>

          </div>


          <div class="col-lg-12 mt-5">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form rounded">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>


          <!-- <div class="row mt-5 justify-content-center" data-aos="fade-up">
            <div class="col-lg-12">
              <div class="map-section">
                <iframe class="rounded" style="border:0; width: 100%; height: 500px;" src="" frameborder="0" allowfullscreen></iframe>
              </div>
            </div>
          </div> -->

          <div class="col-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.1329018210627!2d90.35816927592818!3d23.778281287704303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0bb9c3ef1df%3A0x8d9c442526d5fdb9!2sKallyanpur%20Bus%20Stand%20Masjid!5e0!3m2!1sen!2sbd!4v1741508404321!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>


        </div>

    </section>

  </main>

  <!-- ======= Footer ======= -->
  <?php include('footer.php'); ?>
  <!-- End Footer -->