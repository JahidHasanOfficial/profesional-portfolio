<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('link.php'); ?>


  <meta charset="utf-8">
  <title>Jahid Hasan - Portfolio Full Stack Web Developer</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free HTML Templates" name="keywords">
  <meta content="Free HTML Templates" name="description">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51" style="background-color: #233f5a;">

  <?php include('header.php'); ?>


  <!-- Header Start -->
  <?php include('hero-section.php'); ?>
  <!-- Header End -->


  <!-- About Start -->
  <?php include('about_home.php'); ?>
  <!-- About End -->

  <!-- <style>
    body {
        background: linear-gradient(325deg, #0c2238, #52577a, #3e5c76, #020910);
    }
</style>

<script>
    // ফাংশন তৈরি করুন যা ডিগ্রী মান পরিবর্তন করবে
    function updateGradientDegree() {
        // এলিমেন্ট সিলেক্ট করুন
        const section = document.querySelector('body');
        
        // র্যান্ডম ডিগ্রী জেনারেট করুন (0 থেকে 360 এর মধ্যে)
        const randomDegree = Math.floor(Math.random() * 360);
        
        // নতুন গ্রেডিয়েন্ট স্ট্রিং তৈরি করুন
        const newGradient = `linear-gradient(${randomDegree}deg, #0c2238, #52577a, #3e5c76, #020910)`;
        
        // স্টাইল প্রয়োগ করুন
        section.style.background = newGradient;
    }

    // নির্দিষ্ট সময় পরপর ফাংশন কল করুন (উদাহরণস্বরূপ প্রতি 3 সেকেন্ডে)
    setInterval(updateGradientDegree, 3000);
</script> -->


  <!-- Expericence Start -->
  <?php include('experience.php'); ?>
  <!-- Expericence End -->

  <!-- Skill Start -->
  <?php include('skills.php'); ?>
  <!-- Skill End -->

  <!-- Services Start -->
  <?php include('service.php'); ?>
  <!-- Services End -->

  <!-- Portfolio Start -->
  <?php include('portfolio_home.php'); 
  ?>
  <!-- Portfolio End -->


  <!-- Education Start -->
  <?php include('education.php'); ?>
  <!-- Education End -->


  <!-- Testimonial Start -->
  <?php //include('testimonial.php'); 
  ?>
  <!-- Testimonial End -->


  <!-- Blog Start -->
  <?php include('blog-home.php'); ?>
  <!-- Blog End -->


  <!-- Contact Start -->
  <?php include('contact-home.php'); ?>
  <!-- Contact End -->



  <?php include('footer.php'); ?>