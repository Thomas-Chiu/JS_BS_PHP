<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SEND</title>
</head>

<body>
  <h3>GET 的資料會傳到這裡</h3>
  <p>
    Key = name, value = <?php echo $_GET["name"]; ?>
  </p>
  <p>
    Key = email, value = <?php echo $_GET["email"]; ?>
  </p>

  <a href="./111. getForms.php">
    <input type="button" value="返回 forms">
  </a>
</body>

</html>