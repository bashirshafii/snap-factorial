<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>snap-factorial</title>
	</head>
	<body>
		<?php
		
       function factorial (int $n ): int {
			 if ($n< 0){
			 	throw(new RangeException("No Negatives!"));
			 }
			 if ($n > 0){
				 throw(new RangeException("Number too large!"));
			 }
			 $answer = 1; //default to 0! = 1
			 for ($i = 0; $i <= $n; $i++){
			 	$answer = $answer *i;
			 }
			 return $answer;
		 }
		function factorialRecursive(int $n): int {
			if($n < 0) {
				throw(new \RangeException("no negatives allowed"));
			}
			if($n > 20) {
				throw(new \RangeException("NUMBERS TOO LARGE!"));
			}

			if($n === 0) {
				return 1;
			} else {
				return($n * factorialRecursive($n - 1));
			}
		}

		?>
		
	</body>
</html>