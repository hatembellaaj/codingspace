<html>
<body>

Welcome <?php echo "la liste d'entier : " .$_POST["liste"]; ?><br>
<?php 
$ch=$_POST["liste"];
$Tab = explode(" ", $ch);

function calculer($t){
	
    $s=0;
    $min=$t[0];
    $max=$t[0];
    for($i=0; $i<count($t); $i++)
    {
    	$s+=$t[$i];
        if($t[$i]<$min)
        	$min = $t[$i];
        elseif ($t[$i] > $max)
        	$max=$t[$i];
    }
    echo "la somme des entiers est : " .$s."<br>";
    echo "min = ".$min."<br>";
    echo "max = ".$max."<br>";
}
calculer($Tab);
?>


</body>
</html>