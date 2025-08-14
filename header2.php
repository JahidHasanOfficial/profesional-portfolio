  <style type="text/css">
    @media (min-width: 1400px) {
      .container {
        max-width: 1400px;
      }
    }

    @media screen and (max-width: 991px) and (min-width: 767px) {
      .read-more {
        position: absolute;
        top: 10px;
        right: 10px;
      }

      .header-social-links>a {
        font-size: 18px;

      }

      .mobile-nav-toggle {
        font-size: 32px;
      }

      .mobile-nav {
        bottom: inherit !important;
        width: 80%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
    }

    @media (max-width: 766px) {
      .read-more {
        position: absolute;
        top: 10px;
        right: 10px;
      }

      .header-social-links>a {
        font-size: 18px;

      }

      .mobile-nav-toggle {
        font-size: 32px;
      }

      .mobile-nav {
        bottom: inherit !important;
        width: 90% !important;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
    }
  </style>

  <header id="header" class="fixed-top p-2 mt-2 container" style="border-radius:20px ">

    <div class="d-flex align-items-center">

      <a href="index" class="logo mr-auto text-danger"><i> <img src="itm-admin/<?= $com_info['photo'] ?>" alt="Computer Training" width="85" class="img-fluid zoom"></i></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index">Home</a></li>

          <li><a href="about">About</a></li>

          <li><a href="project">Projects</a></li>

          <li><a href="skills">Skills</a></li>

          <li><a href="blog">Blogs</a></li>

          <li><a href="photo-gallery">Photo Gallery</a></li>

          <li><a href="contact">Contact</a></li>

          <!-- <li> <a href="about" class="btn btn-success ml-3 mt-5">Resume</a></li> -->


        </ul>
      </nav>
      <!-- <a href="about" class="btn btn-success ml-3 mt-5">Resume</a> -->

      <div class="header-social-links d-flex align-items-center justify-content-between p-0">
        <!-- <a target="_blank" href="<?= $rowSocial['facebook'] ?>" class="facebook"><i class="icofont-facebook"></i></a> -->
        <a href="about" class="btn btn-success ml-3 px-3 py-3">Resume</a>

        <button type="button" class="mobile-nav-toggle d-lg-none px-2"><i class="icofont-navigation-menu"></i></button>

      </div>





    </div>
  </header>