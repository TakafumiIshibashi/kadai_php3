<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>（入力画面）</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <form action="todo_create2.php" method="post">
        <fieldset>
            <legend>登録画面</legend>
            <div>
                登録ID: <input type="text" id="text_area1" name="name2">
            </div>
            <!-- <div>
        レベル: <input type="text" name="level">
      </div> -->
            <div>
                <!-- <button>ログイン</button> -->
                <button id="save"><a href="todo_read2.php">ログイン</a></button>
            </div>
        </fieldset>
    </form>
    <!-- <div class="block">
        <ul>
            <li class="header2">Sunday</li>
            <li class="style1"><textarea id="text_area1"></textarea></li>
            <li class="style1"><textarea id="text_area2"></textarea></li>
            <li class="style1"><textarea id="text_area3"></textarea></li>
            <li class="style1"><textarea id="text_area4"></textarea></li>
            <li class="style1"><textarea id="text_area5"></textarea></li>
            <li class="style1"><textarea id="text_area6"></textarea></li>
        </ul>
    </div> -->
    <script>
        //1.Save クリックイベント
        $("#save").on("click", function() {

            const data = 
                ($("#text_area1").val());
            

            // console.log(date);
            const JsonData = JSON.stringify(data);
            // console.log(JsonData);
            localStorage.setItem("memo", JsonData);
        });
    </script>
</body>

</html>