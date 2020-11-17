<!Doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Add</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="add.php" method="post" enctype="multipart/form-data">
    <?php

    //$mysqli = new mysqli("localhost", "dmitrycmyk1983","BarabashLbvf83", "dmitry_cmyk1983");
    $mysqli = new mysqli("localhost", "root","", "testphp_database");

    if ($mysqli->connect_errno) {
        die("Connection failed: " . mysqli_connect_error());
    }

echo '
<div class="frame_add">
        <div class="data_add">
            <h1>Add</h1>
            <hr>
            
            <div class="image">
            <input class="image_input" name="img_uploadCat" type="file" />
            <img src="https://images.g2crowd.com/uploads/product/image/social_landscape/social_landscape_b036e85a65d2a2071d4eb61cfecb93bf/pick-me.png" alt="" name="withoutImg" />
            </div>
            
            <input type="submit" value="Загрузить" />
            
            <p class="f_name">Выбранный файл:</p>
            <label ><b>Category</b></label><br>
            <input type="text" class="txt"  placeholder="Category" name="category"  maxlength="30"><br>
            <label ><b>Title</b></label><br>
            <input type="text" class="txt" placeholder="Title" name="title"  maxlength="30"><br>
            <label ><b>Price</b></label><br>
            <input type="number" class="txt" placeholder="Price" name="price"  maxlength="30"><br>
            <label ><b>Description</b></label><br>
            <input type="text" class="txt" placeholder="Description" name="desc"  maxlength="30"><br>
            <div class="btn_div">
                <input type="submit" name="save" class="inside" value="save"><br/>
            </div>
        </div>
    </div>
';

    //---------file-------------


    $file_name=$_COOKIE["file_name"];
    $_COOKIE["testcookie"];
    if(isset($_POST['category']) && isset($_POST['title']) && isset($_POST['price']) && isset($_POST['desc']) )
    {
        if(isset($_POST['save']))
        {

            //$mysqli->query("insert into dmitry_cmyk1983.test_datatest_data(imageuser,category,titleproduct,priceproduct,description,testid)values('https://upload.wikimedia.org/wikipedia/en/6/60/No_Picture.jpg','".$_POST['category']."','".$_POST['title']."','".$_POST['price']."','".$_POST['desc']."',(select Id from test_table where nameuser='".$_COOKIE["testcookie"]."'));");
            $mysqli->query("insert into test_data(imageuser,category,titleproduct,priceproduct,description,testid)values('https://upload.wikimedia.org/wikipedia/en/6/60/No_Picture.jpg','".$_POST['category']."','".$_POST['title']."','".$_POST['price']."','".$_POST['desc']."',(select Id from test_table where nameuser='".$_COOKIE["testcookie"]."'));");
            //echo '<script>alert("Ok")</script>';
        }
    }
    ?>
</form>

<script src="script.js"></script>
</body>
</html>