<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>snap-factorial</title>
	</head>
	<body>
		<?php
		
       function factorial ($n, $x){

			 for($i=1;$i<=$n-1;$i++)
			 if ($n< 0){
			 	echo " $n can not be less than zero";
			 }
			 {
				 $x*=($i+1);
			 }
			 echo "The factorial of  $n = $x"."\n";
		 }
		 factorial(-1,1);
		?>
		
	</body>
</html>