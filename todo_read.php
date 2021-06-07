<?php



// DB接続情報
$dbn = 'mysql:dbname=gsacf_L05_15;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}

$sql = "SELECT * FROM kadai_php WHERE is_deleted=0 ORDER BY created_at ASC";

$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo(); // データ登録失敗次にエラーを表示 
  exit('sqlError:' . $error[2]);
} else {
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  //  var_dump($result);
  //  exit();
  $output = "";
  foreach ($result as $record) {
    $output .= "<tr>";
    // $output .= "<td>{$record["deadline"]}</td>";
    $output .= "<td>{$record["id"]}</td><td>{$record["name1"]}</td><td>{$record["level"]}</td><td>{$record["icon"]}</td>";
    // edit deleteリンクを追加
    $output .= "<td>
           <a href='todo_edit.php?id={$record["id"]}'>編集</a>
           </td>";
    $output .= "<td>
           <a href='todo_delete.php?id={$record["id"]}'>非表示</a>
           </td>";
    $output .= "</tr>";
    // $output .= "<tr><td>{$record["id"]}</td><td>{$record["name1"]}</td><td>{$record["level"]}</td><td>{$record["icon"]}</td></tr>";
  
  }
}




?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登録リスト（一覧画面）</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
  <fieldset>
    <legend>登録リスト（一覧画面）</legend>
    <a href="todo_input.php">登録画面</a>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>名前</th>
          <th>レベル</th>
          <th>icon</th>
        </tr>
      </thead>
      <tbody>
        <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
        <?= $output ?>
      </tbody>
    </table>
  </fieldset>
  <div id="output1"></div>
  <div id="output2"></div>
  <div id="output3"></div>
  <script>
    //3.ページ読み込み：保存データ取得表示
    if (localStorage.getItem("memo")) {
      const JsonData = localStorage.getItem("memo");
      console.log(JsonData);
      const data = JSON.parse(JsonData);
      console.log(data);
      let x = Number(data) - 1
      console.log(x)


      const hoge = <?= json_encode($result) ?>;
      console.log(hoge[x].name1);
      let name2 = hoge[x].name1;
      console.log(hoge[x].level);
      let name3 = hoge[x].level;
      console.log(hoge[x].icon);
      let name4 = hoge[x].icon;
      console.log(name3);
      $('#output1').html(`管理者：${name2}`);
      // $('#output2').html(`レベル：${name3}`);
      // $('#output3').html(`icon：${name4}`);
    }
  </script>


</body>

</html>