<?php
//   var_dump($_POST);
//   exit();

$id = $_GET["id"];

include("functions.php");
$pdo = connect_to_db();

// $sql = 'DELETE FROM users_table WHERE id=:id';
$sql = 'UPDATE kadai_php SET is_deleted=1 WHERE id=:id';


$stmt = $pdo->prepare($sql);
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
