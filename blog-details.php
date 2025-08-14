
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'link.php' ?>
  
  <?php
if (isset($_GET['blog'])) {
  $slug = $_GET['blog'];

  $sql = mysqli_query($con, "SELECT * FROM blog_section WHERE slug = '$slug'");
  $row = mysqli_fetch_array($sql);
}
?>

  <meta name="author" content="<?= $row['author'] ?>">
  <meta name="keyword" content="<?= $row['keyword'] ?>">
  <meta name="description" content="<?= $row['description'] ?>">
  <title><?= $row['title'] ?></title>
  <link rel="canonical" href="<?= $row['canonical_link'] ?>" />

</head>

<body>
 
  <?php include('header.php'); ?> 

  <main id="main"> 
   
   <?php include('breadcrumb.php'); ?>
 
    <section id="blog" class="blog">
      <div class="container">
	  <div class="section-title">
          <h2><?= $row['title'] ?></h2>
        </div> 
		
        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single rounded" data-aos="fade-up"> 
              <div class="entry-img">
                <img src="itm-admin/user/user_images/<?= $row['userPic'] ?>" width="100%" class="img-fluid">
              </div>
             

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="#"><?= $row['author'] ?></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><?php echo  date('d-M-Y H:i:sa',strtotime($row['date'])); ?></a></li>
                  <!-- <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="#">12 Comments</a></li>-->
                </ul>
              </div>

              <div class="entry-content">
			  
				<?= $row['details'] ?>

              </div>
 

              </div>

            </article> 
			
			
			<div class="col-lg-4">

            <div class="sidebar rounded" data-aos="fade-left">

              <h3 class="sidebar-title text-center alert-warning p-2 rounded">Recent Posts</h3>
			  
              <div class="sidebar-item recent-posts"> 
			  
			  <?php
        $sql = mysqli_query($con, "SELECT * FROM blog_section  order by id desc limit 15  ");
        while ($row = mysqli_fetch_assoc($sql)) { ?>
		
				<div class="post-item clearfix">
                  <img src="itm-admin/user/user_images/<?= $row['userPic'] ?>" width="100%">
                  <h4><a href="blog-details?blog=<?= $row['slug'] ?>"><?= $row['title']; ?></a></h4>
                  <time><?php echo  date('d-M-Y H:i:sa',strtotime($row['date'])); ?></time>
                </div> 
				
				
				<?php
		}  
		?>
              </div>  
               
            </div>  
          </div> 



		  
		  

          </div>
        </div>

      </div>
    </section> 

  </main> 

  
   <?php include('footer.php'); ?>
  