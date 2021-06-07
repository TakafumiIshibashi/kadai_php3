<?php
//   var_dump($_POST);
//   exit();
if (
    !isset($_POST['name1']) || $_POST['name1'] == '' ||
    !isset($_POST['level']) || $_POST['level'] == '' ||
    !isset($_POST['id']) || $_POST['id'] == ''
) {
    echo json_encode(["error_msg" => "no input"]);
    exit();
}
$todo = $_POST['name1'];
$level = $_POST['level'];
$id = $_POST['id'];

include("functions.php");
$pdo = connect_to_db();

$sql = "UPDATE kadai_php SET name1=:name1, level=:level,updated_at=sysdate() WHERE id=:id";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name1', $todo, PDO::PARAM_STR);
$stmt->bindValue(':level', $level, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    header("Location:todo_read.php");
    exit();
}
