<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    label{
    width: 100px;
    padding-right: 10px;
    float: left;
    }
    </style>
</head>
<body>
<form method="post">
    <label>Nhap so hang</label>
    <input type="text" name="row"><br>
    <label>Nhap so cot</label>
    <input type="text" name="col"><br>
    <input type="submit" value="Find">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $row = $_POST["row"];
    $col = $_POST["col"];
    $arr = array();
    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            $arr[$i][$j] = rand(1, 1000);
            echo $arr[$i][$j] . " ";
        }
        echo "<br>";
    }
    $max = $arr[0][0];
    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            if ($arr[$i][$j] > $max) {
                $max = $arr[$i][$j];
            }
        }
    }
    echo "<br>GTLN ".$max;
}
?>

</body>
</html>