<!Doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Product set</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="Product_set.php" method="post">
    <div class="frame_">
        <div class="data_user">
            <h1>Product</h1>
            <hr>
            <div class="btn_div">
                <input type="submit" name="add" class="inside" value="add"><br/>
                <input type="submit" name="show" class="login" value="show">
            </div>
        </div>
    </div>
    <?php
     echo $_COOKIE["testcookie"];
    if(isset($_POST['add']))
    {
        header('Location: add.php');
    }
    if(isset($_POST['show']))
    {
        header('Location: view.php');
    }
    ?>
</form>

</body>
</html>