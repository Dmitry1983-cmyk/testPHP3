<!Doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Registration form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="Registration.php" method="post">
    <div class="frame_">
        <div class="data_user">
            <h1>Registration</h1>
            <hr>
            <label ><b>Name</b></label><br>
            <input type="text" class="txt" placeholder="Ведите имя" name="name"  maxlength="30"><br>
            <label ><b>Email</b></label><br>
            <input type="text" class="txt" placeholder="Ведите email" name="email"  maxlength="30"><br>

            <div class="btn_div">
                <input type="submit" name="save" class="inside" value="save"><br/>
                <input type="submit" name="cancel" class="login" value="cancel">
            </div>
        </div>

    <?php
     //$mysqli = new mysqli("localhost", "dmitrycmyk1983","BarabashLbvf83", "dmitry_cmyk1983");
    $mysqli = new mysqli("localhost", "root","", "testphp_database");

    if ($mysqli->connect_errno) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST['cancel']))
    {
        header('Location: index.php');
    }
    if(isset($_POST['name']) && isset($_POST['email']))
    {
        if(isset($_POST['save']))
        {
            $mysqli->query("insert into test_table(nameuser,emailuser)values('".$_POST['name']."','".$_POST['email']."');");
            //echo '<script>alert("Ok")</script>';
            header('Location: index.php');
        }
    }
    ?>
</form>

</body>
</html>	