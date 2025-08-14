 <section id="pricing" class="pricing">
   <div class="container" data-aos="fade-up">
     <div class="section-title">
       <h2>Our Projects</h2>
     </div>

     <div class="row">

       <?php
        $sql = mysqli_query($con, "SELECT * FROM project limit 4");
        while ($row = mysqli_fetch_assoc($sql)) { ?>

         <div class="col-lg-4 col-md-6 mt-3 mb-5  zoom ">
           <span class="advanced">PHP</span>
           <a href="project-details?project=<?= $row['slug'] ?>">
             <img src="itm-admin/user/user_images/<?= $row['userPic'] ?>" class="img-fluid" alt="" width="100%" /> </a>
           <div class="box featured">
             <h3 class="bg-white"> <a href="project-details?project=<?= $row['slug'] ?>" class="text-dark"> <?= substr($row['name'], 0, 50) ?> </a> </h3>


             <a href="<?= $row['live_link'] ?>" class="btn-buy bg-dark">Live</a>
             <a href="<?= $row['github_link'] ?>" class="btn-buy bg-dark">Github</a>
             <a href="project-details?project=<?= $row['slug'] ?>" class="btn-buy bg-dark">View Details</a>

           </div>
         </div>

       <?php
        }
        ?>

     </div>

     <!-- <div class="text-center"> 
		
		<a href="our-courses" class="btn btn-success ml-3 mt-5">See More Courses</a>
		
		</div> -->


   </div>
 </section>