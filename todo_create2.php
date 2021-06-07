<?php
// var_dump($_POST);
// exit();


if (
    !isset($_POST['name1']) || $_POST['name1'] == ''
    // || !isset($_POST['level']) || $_POST['level'] == '' 
) {
    exit('ParamError');
}
// exit("ok");

$name1 = $_POST['name1'];
// $level = $_POST['level'];

include("functions.php");


// DB接続情報
// $dbn = 'mysql:dbname=gsacf_L05_15;charset=utf8;port=3306;host=localhost';
// $user = 'root';
// $pwd = '';

// DB接続
// try {
//     $pdo = new PDO($dbn, $user, $pwd);
// } catch (PDOException $e) {
//     echo json_encode(["db error" => "{$e->getMessage()}"]);
//     exit();
// }

// exit("ok");

//  INSERT INTO kadai_php (id, name, Icon, level, competition, created_at, updated_at) VALUES(NULL, '吉田', 'NULL', '1', 'NULL', sysdate(), sysdate())
$sql = 'INSERT INTO kadai_php(id, name1, level, created_at, updated_at, icon)  VALUES(NULL, :name1, "1", sysdate(), sysdate(), "NULL")';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name1', $name1, PDO::PARAM_STR);
// $stmt->bindValue(':level', $level, PDO::PARAM_STR);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo(); // データ登録失敗次にエラーを表示 
    exit('sqlError:' . $error[2]);
} else {
    // 登録ページへ移動
    header('Location:todo_input.php');
    exit("ok");
}
