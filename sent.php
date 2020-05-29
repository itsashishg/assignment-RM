<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Phone Book App</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>


  <div class="main">
    <div class="thanks-message">Thanks for contacting us!</div>
    <div class="display-contact">
      <div class="form-title">Submitted</div>

      <div class="form-item">■ Name</div>
      <?php echo $_POST['name']; ?>

      <div class="form-item">■ Phone Number</div>
      <?php echo $_POST['phonen']; ?>
      
      <div class="form-item">■ Email</div>
      <?php echo $_POST['email']; ?>



    </div>
  </div>


</body>
</html>