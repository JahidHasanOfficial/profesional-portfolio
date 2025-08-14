   <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <div class="faq-list">
          <ul>
		  
            
<?php
            $sql = mysqli_query($con, "SELECT * FROM faq_section limit 10");
            while ($row = mysqli_fetch_assoc($sql)) {
            ?>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help text-danger"></i> <a data-toggle="collapse" href="#faq-list-<?= $row['id'] ?>" class="collapsed"><?= $row['title'] ?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-<?= $row['id'] ?>" class="collapse" data-parent=".faq-list">
                <p>
                  <?= $row['details'] ?>
                </p>
              </div>
            </li>
<?php } ?>

     
          </ul>
        </div>

      </div>
    </section>