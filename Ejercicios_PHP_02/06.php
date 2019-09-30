<html>
<head>
<title>06.PHP</title>
</head>
<body>

<?php
$almenas = random_int(1, 10);
echo "$almenas <br/>";
for ($i = 0; $i < 3; $i ++) {
    if ($i == 2) {
        for ($m = 0; $m < (($almenas) + ($almenas - 1)); $m ++) {
            echo "<img src=\"ladrillo.png\" alt=\"ladrillo \"/>";
        }
        break;
    }
    for ($h = 0; $h < $almenas; $h ++) {
        echo "<img src=\"ladrillo.png\" alt=\"ladrillo \"/>" . "<img src=\"espacio.png\" alt=\"espacio \"/>";
    }
    echo "<br/>";
}

?>
</body>
</html>
