<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FORMS</title>
</head>

<body>
  <form action="./112. postSend.php" method="POST">
    <h2>我用 POST 傳資料</h2>
    職業：<select name="job">
      <option value="教師">教師</option>
      <option value="會計師">會計師</option>
      <option value="工程師" selected>工程師</option>
    </select><br>
    留言：<textarea name="comment" rows="3"></textarea><br>
    <input type="submit" value="送出">
    <input type="reset" value="取消">
  </form>
</body>

</html>