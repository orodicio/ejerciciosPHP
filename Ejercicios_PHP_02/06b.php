<html>
<head>
<title>06.PHP</title>
</head>
<body>
	<code><?php
$almenas = random_int(1, 10);
for ($i = 0; $i < 3; $i ++) {
    if ($i == 2) {
        for ($m = 0; $m < ((4 * $almenas) + ($almenas - 1)); $m ++) {
            echo "*";
        }
        break;
    }
    for ($h = 0; $h < $almenas; $h ++) {
        echo "****&nbsp";
    }
    echo "<br/>";
}

?></code>
</body>
</html>
