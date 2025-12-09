<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tai lieu hoc Lap Trinh Web</h1>
    <?php
    echo "<hr>";
    ?>
    <p>Tai lieu hoc HTML</p>
    <p>Tai lieu hoc CSS</p>
    <?php
        echo "<h2>Tai lieu hoc Javascript</h2>";
        echo "<h3>Tai lieu hoc MySQL</h3>";
        echo "<h4>Tai lieu hoc PHP</h4>";
    ?>
    <hr>
    <?php
        $text = "Tu co ban" . " " . "den nang cao";
        echo $text;
    ?>
    <?php
        $name = "Nguyễn Minh Đức";
        $year = 2000;
        $city = "Hà Nội";
        echo "<p>Giá trị của biến name là chuỗi $name";
        echo "<p>Giá trị của biến year là số $year";
        echo "<p>Giá trị của biến city là chuỗi $city";
    ?>
    <?php
    function showValue(){
        global $a;
        $a = 5;
        echo $a;
    }
    showValue();
    echo $a;
    ?>
    <?php
    $a = 1;
    $b = 2;
    function Sum(){
        global $a, $b;
        $b = $a + $b;
    }
    Sum();
    echo $b;
    ?>
    <?php
        define('PI',3.14);
        echo PI;
    ?>
</body>
</html>