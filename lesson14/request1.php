【ここに入力】
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>PHP入門教室</title>
</head>
<body>
<h3>アンケート</h3>
<form method="POST" action="request2.php">
  <div class="container">
    <label for="name">名前：</label><br />
【ここに入力】
  </div>
  <div class="container">
    <label for="email">メールアドレス：</label><br />
【ここに入力】
  </div>
  <div class="container">
    <label for="zip">郵便番号：</label><br />
【ここに入力】
  </div>
  <div class="container">
    性別：<br />
【ここに入力】
  </div>
  <div class="container">
    <label for="age">年齢：</label><br />
    <select id="age" name="age">
【ここに入力】
    </select>
  </div>
  <div class="container">
    ご使用のOS：<br />
【ここに入力】
  </div>
  <div class="container">
      <label for="memo">サイトへのご意見：</label><br />
【ここに入力】
  </div>
  <input type="hidden" name="quest_num" value="XXX15204" />
  <input type="submit" value="送信" />
</form>
</body>
</html>