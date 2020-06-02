
<?php  

$num=array("1","2","3","4","5");
$year=array("2020","2020","2020","2020","2020");
$month=array("1","2","3","4","5");
$sumvalue=array("85000","81800","78800","77800","77000");

$forecast=[];

function forecast(int $a, int $b,int $c) {
	return  ($a*0.17)+($b*0.33)+($c*0.50);
  }

for ($i = 0; $i < count($num)-3 ; $i++) {
		$forecast = forecast($sumvalue[$i],$sumvalue[$i+1],$sumvalue[$i+2]);
		echo "The number is: $forecast <br>";
    }

?>  

</body>
</html>