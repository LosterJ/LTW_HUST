<?php
    session_start();
    $games = array(
        array(
            "name" => "Cây Cam Ngọt Của Tôi",
            "tags" => "José Mauro, Tiểu thuyết, Sách văn học, Sách tiếng việt",
            "price" => 70200,
            "in-cart" => false
        ),
        array(
            "name" => "Hành Tinh Của Một Kẻ Nghĩ Nhiều",
            "tags" => "Nguyễn Đoàn Minh Thư, Sách tư duy, Kỹ năng sống, Sách tiếng việt",
            "price" => 58700,
            "in-cart" => false
        ),
        array(
            "name" => "Những Người Hàng Xóm",
            "tags" => "Nguyễn Nhật Ánh, Truyện dài, Sách văn học, Sách tiếng việt",
            "price" => 87800,
            "in-cart" => false
        ),
        array(
            "name" => "Người Giàu Có Nhất Thành Babylon",
            "tags" => "George Samuel Clason, Bài học kinh doanh, Sách kinh tế, Sách tiếng việt",
            "price" => 60800,
            "in-cart" => false
        ),
        array(
            "name" => "English Grammar in Use",
            "tags" => "Raymond Murphy, Skills, Education, English Books",
            "price" => 169100,
            "in-cart" => false
        ),
        array(
            "name" => "The Art of Godzilla",
            "tags" => "Abbie Bernstein, Fiction&Fantasy, Literature, English Books",
            "price" => 437000,
            "in-cart" => false
        )
    );
    $_SESSION["games"] = $games;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    
</body>
</html>
<form action="store.php" method="GET">
    <input type="submit" value="Shopping">
</form>