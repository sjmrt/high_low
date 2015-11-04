<?php

$random = mt_rand(1, 100);

do	{fwrite(STDOUT, 'Guess a number ');

	$guess = fgets(STDIN);

	if ($guess == $random){
		fwrite(STDOUT, "Correct!");
		} else if($guess > $random){
			fwrite(STDOUT, "Too High! ");
		} else if($guess < $random){
			fwrite(STDOUT, "Too Low! ");
		}
} while ($guess != $random);

?>