<?php require_once '../itm-admin/includes/conn.php'; ?>
<?php require_once '../itm-admin/includes/dbconfig.php'; ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['name']) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = null;
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $entry_date = date('Y-m-d');

  $contactReg = mysqli_query($con, "INSERT INTO contact_info (name, email, phone, subject, message, entry_date) VALUES ('$name','$email', '$phone', '$subject', '$message', '$entry_date')");
  if (isset($contactReg)) { ?>
    <script>
      alert('Form submitted successfully!');
      window.location.href = '../contact';
    </script>

<?php
  }
}
