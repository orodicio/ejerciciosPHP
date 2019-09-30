<html>
<head>
<title>Online PHP Script Execution</title>
</head>
<body>
<?php
$n1 =  random_int(1,9);
for($i = 1; $i <= $n1;$i++){
    for($j = 1; $j <= $i;$j++){
        if($i % 2 == 1){
            ?>
            <span style="color:blue;"><?php echo $i; ?></span>
           <?php
           }else{
           ?>
            <span style="color:red;"><?php echo $i; ?></span>
           <?php
           }
       }
       echo "<br/>";
       
   }
?>
</body>
</html>