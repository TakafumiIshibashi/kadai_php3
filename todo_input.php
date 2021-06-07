<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>新規アカウント作成（登録画面）</title>
</head>

<body>
  <form action="todo_create.php" method="post">
    <fieldset>
      <legend>登録画面</legend>
      <div>
        氏名: <input type="text" name="name1">
      </div>
      <!-- <div>
        レベル: <input type="text" name="level">
      </div> -->
      <div>
        <button>新規登録</button>
      </div>
      <a href="login.php">ログイン画面</a>
    </fieldset>
  </form>
  <a href="login2.php">管理者画面</a>
</body>

</html>


<!-- INSERT INTO kadai_php (id, name, Icon, level, competition, created_at, updated_at) VALUES(NULL, '吉田', 'NULL', '1', 'NULL', sysdate(), sysdate()) -->