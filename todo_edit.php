<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB連携型todoリスト（編集画面）</title>
</head>

<body>
    <form action="todo_update.php" method="POST">
        <fieldset>
            <legend>DB連携型todoリスト（編集画面）</legend>
            <a href="todo_read.php">一覧画面</a>
            <div>
                名前: <input type="text" name="name1" value="<?= $record["name1"] ?>">
            </div>
            <div>
                レベル: <input type="text" name="level" value="<?= $record["level"] ?>">
            </div>
            <div>
                <input type="hidden" name="id" value="<?= $record["id"] ?>">
            </div>
            <div>
                <button>submit</button>
            </div>

        </fieldset>
    </form>

</body>

</html>