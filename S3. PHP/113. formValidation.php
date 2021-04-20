<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Form</title>
</head>

<body>

  <?php
  // 宣告空變數
  $name = $email = $job = $status = $comment = '';
  // 驗證 data
  function valid($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  // data 存進變數
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = valid($_POST["name"]);
    $email = valid($_POST["email"]);
    $job = valid($_POST["job"]);
    $status = valid($_POST["status"]);
    $comment = valid($_POST["comment"]);
  }
  ?>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
    <table width=600>
      <tr>
        <td>
          <h2>應徵表</h2>
        </td>
        <td></td>
      </tr>
      <tr>
        <td>姓名：</td>
        <td><input type="text" name="name"></td>
      </tr>
      <tr>
        <td>email：</td>
        <td><input type="email" name="email"></td>
      </tr>
      <tr>
        <td>職業：</td>
        <td>
          <select name="job">
            <option value="工程師">工程師</option>
            <option value="建築師">建築師</option>
            <option value="設計師">設計師</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>求職狀態：</td>
        <td>
          <input type="radio" name="status" value="就業中">就業中
          <input type="radio" name="status" value="待業中">待業中
          <input type="radio" name="status" value="學生">學生
        </td>
      </tr>
      <tr>
        <td>備註</td>
        <td>
          <textarea name="comment" rows="5"></textarea>
        </td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="submit" value="送出">
          <input type="reset" value="取消">
        </td>
      </tr>
    </table>
  </form>

  <?php
  echo "<h2>User 輸入</h2>";
  echo "姓名 = $name <br>";
  echo "email = $email <br>";
  echo "職業 = $job <br>";
  echo "求職狀態 = $status <br>";
  echo "備註 = $comment <br>";
  ?>
</body>

</html>