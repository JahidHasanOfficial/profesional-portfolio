<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('link.php'); ?>

    <title>Photo Gallery - Jahid Hasan</title>
 
 
</head>

<body>

  <?php include('header.php'); ?>

  <main id="main">
 <?php include('breadcrumb.php'); ?> 
 
    <section id="portfolio" class="portfolio">
      <div class="container">
	    <div class="section-title m-0 p-0" data-aos="fade-up">
        <h2>Our Photo Gallery</h2>
      </div>
	    

        <div class="row  container mt-5"  data-aos="fade-up">
 <?php
      $sql = mysqli_query($con, "SELECT * FROM gallery_image");
      while ($row = mysqli_fetch_assoc($sql)) { ?>
	  
          <div class="col-lg-4 col-md-6 portfolio-item filter-app zoom">
            <a href="itm-admin/user/user_images/<?= $row['userPic'] ?>" data-gall="portfolioGallery" class="venobox preview-link" title="<?= $row['title'] ?>">           
		    <img src="itm-admin/user/user_images/<?= $row['userPic'] ?>" class="img-fluid" alt="<?= $row['title'] ?>">
            </a> 
          </div>
<?php
      }
      ?>
           	 
        </div>
 
      </div>
    </section> 

  </main> 

  <!-- ======= Footer ======= -->
  <?php include('footer.php'); ?>
  <!-- End Footer -->
  
  