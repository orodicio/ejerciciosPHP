<html>
<head>
<title>06.PHP</title>
</head>
<body>
	<?php

echo <<<FOO
    <table style="border-collapse:collapse; border=3px solid white">
    <tr style = "border-collapse:collapse">
    <td style="border- collapse:collapse; background-color: blue; color: white; font-family:sans-serif; font-weight: bold; padding:20px 0 20px 0; text-align:center">Tablero de colores</td>
    </tr>
    <tr>
    <td style="border-collapse: collapse">
	<table style="border-collapse:separate; border:1px solid grey; width:300px">
FOO;
$color1 = random_int(0, 255);
$color2 = random_int(0, 255);
$color3 = random_int(0, 255);
for ($i = 0; $i < 10; $i ++) {
    echo "<tr style=\"border-collapse:separate; border:1px solid grey\">";
    for ($j = 0; $j < 10; $j ++) {
        echo "<td style=\"border-collapse:separate; border:1px solid grey; height:30px; background-color:rgb(" . "$color1" . "," . "$color2" . "," . "$color3" . ")\"></td>";
      }
      if($color1<255){
          $color1=$color1+30;
      }
      if($color2<255){
          $color2=$color2+30;
      }
      if($color3<255){
          $color2=$color2+30;
      }
    echo "</tr>";
}
echo "</table></td></tr></table>";
?>
	</body>
</html>
