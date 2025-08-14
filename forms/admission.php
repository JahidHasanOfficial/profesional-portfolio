<?php require_once '../itm-admin/includes/conn.php'; ?>
<?php require_once '../itm-admin/includes/dbconfig.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['name'])) {
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $phone = trim($_POST['phone']);
  $course = trim($_POST['course']);
  $course_type = trim($_POST['course_type']);

  $errors = [];

  if (empty($course)) {
    $errors['course'] = 'The course field is required!';
  }
  if (empty($course_type)) {
    $errors['course_type'] = 'The course type field is required!';
  }

  if (empty($errors)) {
    $stmt = $con->prepare("INSERT INTO course_apply (name, email, phone, course, course_type) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $course, $course_type);

    if ($stmt->execute() === TRUE) {
?>
      <script>
        alert('Form submitted successfully!');
        window.location.href = '../apply';
      </script>

<?php
    }
  }
}
