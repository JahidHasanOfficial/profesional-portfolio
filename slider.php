 <section id="hero">
  
	  
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

	
      <div class="carousel-inner" role="listbox">

	  
	  <?php
      $sql = mysqli_query($con, "SELECT * FROM slider_section  order by id desc limit 1"); 
      while ($row = mysqli_fetch_assoc($sql)) {
      ?>
		<div class="carousel-item active col-md-12" style="background-image: url(itm-admin/user/user_images/<?= $row['userPic'] ?>);">
	    <div class="carousel-container text-center">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h4><?= $row['slider_title'] ?></h4>              
             </div>
          </div>
        </div>
	  <?php } ?>  
	  
	  <?php
      $sql = mysqli_query($con, "SELECT * FROM slider_section");
      while ($row = mysqli_fetch_assoc($sql)) {
      ?>
	  <div class="carousel-item col-md-12" style="background-image: url(itm-admin/user/user_images/<?= $row['userPic'] ?>);">
	    <div class="carousel-container text-center">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h4><?= $row['slider_title'] ?></h4>
             </div>
          </div>
        </div>
	  <?php } ?>  
	  
      </div>
	  
		
	

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
   
      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
	  
    </div>
	
	 
  </section>