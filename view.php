<!Doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>View</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="add.php" method="post">


    <?php
    //$mysqli = new mysqli("localhost", "dmitrycmyk1983","BarabashLbvf83", "dmitry_cmyk1983");
    $mysqli = new mysqli("localhost", "root","", "testphp_database");

    if ($mysqli->connect_errno) {
        die("Connection failed: " . mysqli_connect_error());
    }

echo '
    <div class="frame_add">
        <div class="cater">
            <div class="ctr">
                <h1>Category</h1> 
                ';

    $sql = mysqli_query ($mysqli, "select *from test_table left join test_data on test_table.Id=test_data.Id where nameuser='".$_COOKIE["testcookie"]."' ");

    echo '<select class="slct" name="slct">';


    while ($result = mysqli_fetch_array($sql)){

        echo ' <option>'.$result['category'].'</option>';

    }
    echo '</select>';

           echo '
            </div>
            <hr>
           ';
    echo '
           <div class="carts">
                ';
    if(isset($_POST['slct']))
    {
        echo '
    <div class="cart">
                    <div class="image_cart">
                        <p>Title Price</p>
                        <div class="desc"></div>
                    </div>
    ';
    }
    echo '
                </div>
            </div>

        </div>
    </div>
          ';



    ?>

</form>

</body>
</html>