<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FORMS</title>
</head>

<body>
  <!-- action 屬性 = 指定資料導向 -->
  <form action="./112. getSend.php" method="GET">
    <!-- name 屬性 = $_GET 陣列的 key 名稱 -->
    <h2>我用 GET 傳資料</h2>
    姓名：<input type="text" name="name"><br>
    Email：<input type="text" name="email"><br>
    <input type="submit" value="送出">
    <input type="reset" value="取消">
  </form>
</body>

</html>