<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 10;
        $b = 20;
        if ($a > $b) {
            print("Sai");
        }
        else if ($a < $b) {
            print("Dung");
        }
        else {
            print("Nothing Happen");
        }
        ?>
    <?php
        $a = 10;
        switch ($a) {
            case 0:
                print("Gia tri la 0");
                break;
            case 1:
                print("Gia tri la 10");
                break;
            case 2:
                print("Gia tri khong xac dinh");
                break;
        }
    ?>
    <?php
        for ($x = 0; $x < 10; $x++) {
            echo $x;
        }
    ?>
    <?php
        $arr = array(1,2,3,4,5);
        foreach ($arr as $x) {
            echo $x;
        }
    ?>
    <?php
        $x = 0;
        while ($x > 5) {
            echo "Gia tri " . $x;
            $x++;
        }
    ?>
    <?php
        $x = 0;
        do {
            echo "Gia tri " . $x;
        }
        while ($x > 5)
    ?>
    <?php
        for ($i = 0; $i < 10; $i++) {
            if ($i == 5) {
                break;
            }
            echo "$i ";
        }
    ?>
    <?php
        for ($i = 0; $i < 10; $i++) {
            if ($i == 3) {  
                continue;
            }
            echo "$i ";
        }
    ?>
</body>
</html>