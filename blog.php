 

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'link.php' ?>

    <title>Blog - Jahid Hasan</title>

</head>

<body>
 
  <?php include('header.php'); ?> 

  <main id="main"> 
    <?php include('breadcrumb.php'); ?>
 
    <section id="blog" class="blog">
      <div class="container">
	   <div class="section-title">
          <h2>Our Blog</h2>
        </div>

        <div class="row">
		
<?php
        $sql = mysqli_query($con, "SELECT * FROM blog_section");
        while ($row = mysqli_fetch_assoc($sql)) { ?>
	
          <div class="col-lg-4 entries"> 
            <article class="entry" data-aos="fade-up">

              <div class="entry-img">
              <a href="blog-details?blog=<?= $row['slug'] ?>">
			  <img src="itm-admin/user/user_images/<?= $row['userPic'] ?>" alt="" class="img-fluid">
			  </a>
              </div>

              <h2 class="entry-title">
                <a href="blog-details?blog=<?= $row['slug'] ?>"><?php echo $row['title']; ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html"><?= $row['author']; ?></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"> <?php echo  date('d-M-Y H:i:sa',strtotime($row['date'])); ?></a></li> 
                </ul>
              </div>

              <div class="entry-content">               			
                <div class="read-more mt-3"><hr>
				<center>  <a href="blog-details?blog=<?= $row['slug'] ?>">Read More</a> </center>
                </div>
				
              </div>

            </article>
	</div>	
	
	<?php
		}  
		?>

          </div>
	</section>
     

  </main> 

  
   <?php include('footer.php'); ?>
  