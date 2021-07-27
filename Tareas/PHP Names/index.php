<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="UTF-8" />
  <link type="text/css" rel="stylesheet" href="CSS/style.css">
  <title>PHP 1</title>
</head>

<body>

  <h1 class="Title">NAME DB</h1>

  <div class="Forms">
    <form action="index.php" method="POST">

      <p>

        COPY THE NAME: <br><br><input class="Copy" type="var" name="Name">
      </p>

      <div class="Result">

        <input class="Button" type="submit" value="OK">
      </div>

    </form>
  </div>

  <?php include 'db.php'; ?>

</body>

</html>