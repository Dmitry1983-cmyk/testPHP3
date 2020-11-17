<!Doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="index.php" method="post">
    <div class="frame_">
        <div class="data_user">
            <h1>Вход</h1>
            <hr>
            <label ><b>Email</b></label><br>
            <input type="text" class="txt" placeholder="Ведите email" name="email"  maxlength="30"><br>

            <div class="btn_div">
                <input type="submit" name="inside" class="inside" value="inside"><br/>
                <input type="submit" name="login" class="login" value="login">
            </div>
    </div>
<?php
//$mysqli = new mysqli("localhost", "dmitrycmyk1983","BarabashLbvf83", "dmitry_cmyk1983");
$mysqli = new mysqli("localhost", "root","", "testphp_database");

if ($mysqli->connect_errno) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['login']))
{
    header('Location: Registration.php');
}
if(isset($_POST['email']))
{
    if(isset($_POST['inside']))
    {
        $sql = "select * from test_table where emailuser = '".$_POST['email']."' ";
        $result = mysqli_query($mysqli, $sql);

        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach ($rows as $row) //$row['nameuser']
        {
            setcookie('testcookie',$row['nameuser']);
            header('Location: Product_set.php');
        }
    }
}
?>

</form>

<script src="script.js"></script>

</body>
</html>
