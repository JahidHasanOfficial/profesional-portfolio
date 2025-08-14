<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('link.php'); ?>

  <?php
  if (isset($_GET['project']) && !empty($_GET['project'])) {
    $id = $_GET['project'];
    $stmt_edit = $DB_con->prepare('SELECT * FROM project WHERE slug =:uid ');
    $stmt_edit->execute(array(':uid' => $id));
    $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
    extract($edit_row);
  } ?>

  <title><?php echo $name; ?></title>

</head>

<body>

  <?php include('header.php'); ?>
  <?php include('breadcrumb.php'); ?>

  <main id="main">

    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2><?php echo $name; ?></h2>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="course-info d-flex justify-content-between align-items-center p-0">
              <img src="itm-admin/user/user_images/<?php echo $userPic; ?>" class="img-fluid image-radius" alt="<?php echo $name; ?>" width="100%" />
            </div>
          </div>
          <br>

          <div class="col-12">
             <a href="<?php echo $live_link; ?>" class="btn-buy bg-dark px-3 py-4">Live</a>
             <a href="<?php echo $github_link; ?>" class="btn-buy bg-dark">Github</a>
          </div>

          <div class="col-12 border rounded">
            <div class="mt-3"> </div>
            <?php echo $details; ?>

          </div>
        </div>

      </div>
    </section>

  </main>

  <?php include('footer.php'); ?>