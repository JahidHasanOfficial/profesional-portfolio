<!DOCTYPE html>
<html lang="en">

<head>
 <?php include('link.php'); ?>

    <title>About Us - Jahid Hasan</title>


</head>

<body>

   
  <?php include('header.php'); ?>
 
 <?php include('breadcrumb.php'); ?>
   
  <main id="main">

<?php
$sql = mysqli_query($con, "SELECT * FROM about_section");
$rowabt = mysqli_fetch_array($sql);
?>   
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up"><br><br>
       
        <div class="row mb-5 align-items-center">
          <div class="col-12 col-lg-6 col-xl-5 mb-5 m-lg-0" data-aos="fade-right">
            <div class="video-content shadow overflow-hidden h-auto" style="border-radius: 12px;">
              <img src="itm-admin/user/user_images/<?= $rowabt['userPic'] ?>" alt="About" class="img-fluid">
              <button class="video-play-button border-0" data-toggle="modal" data-target="#exampleModal" data-video-src="https://www.youtube.com/embed/uM8qS7rm6KA?autoplay=1">
                <span></span>
              </button>
            </div>
          </div>

          <div class="col-12 col-lg-6 col-xl-7" data-aos="fade-left">
            <div class="row justify-content-xl-center">
              <div class="col-12 col-xl-11">
			<h2 class="mb-3 text-uppercase">About Us</h2>
            <p class="lead fs-4 text-secondary mb-3"><strong><?= $rowabt['about_title'] ?> </strong></p>
            <p class="mb-5"><?= $rowabt['about_subtitle'] ?></p>
		
              </div>
            </div>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-12 mb-3">
            <p><?= $rowabt['details_02'] ?></p>
          </div>
          
        </div>

        <div class="row mb-5 align-items-center border-top pt-5">
<?php
$sql = mysqli_query($con, "SELECT * FROM mission");
$rowmiso = mysqli_fetch_array($sql);
?>
          <div class="col-12 col-lg-6 col-xl-7 mb-5 m-lg-0 d-none d-lg-block" data-aos="fade-left">
            <h3 class="mb-3"><?= $rowmiso['name'] ?></h3>
            <p> <?= $rowmiso['details'] ?></p>
          </div>

          <div class="col-12 col-lg-6 col-xl-5 mb-5 m-lg-0" data-aos="fade-right">
            <img src="itm-admin/user/user_images/<?= $rowmiso['userPic'] ?>" alt="Mission" class="img-fluid  rounded" width="90%">
          </div>

        </div>

        <div class="row mb-5 align-items-center border-top pt-5">
<?php
$sql = mysqli_query($con, "SELECT * FROM vision");
$rowviso = mysqli_fetch_array($sql);
?>
          <div class="col-12 col-lg-6 col-xl-5 mb-5 m-lg-0" data-aos="fade-right">
            <img src="itm-admin/user/user_images/<?= $rowviso['userPic'] ?>" alt="Vision" class="img-fluid rounded" width="90%">
          </div>

          <div class="col-12 col-lg-6 col-xl-7 m-lg-0" data-aos="fade-left">
            <h3 class="mb-3"><?= $rowviso['name'] ?></h3>
            <p><?= $rowviso['details'] ?></p>
          </div>
        </div>

       

      </div>
    </section>

    <?php include('partner-work.php'); ?>

    <?php include 'video-modal.php' ?>

  </main>

 

  <?php include('footer.php'); ?>