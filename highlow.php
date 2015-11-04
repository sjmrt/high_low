<?php

var_dump($argv);

if ($argc < 3 || (!is_numeric($argv[1]) || !is_numeric($argv[2]))) {
	exit("Please give me two numbers!" . PHP_EOL);
}

if ($argv[1] > $argv[2]){
	$max = $argv[1];
	$min = $argv[2];
} else {
	$max = $argv[2];
	$min = $argv[1];
}

$random = mt_rand($min, $max);

$guesscount = 1;

do	{
	fwrite(STDOUT, 'Guess a number ');

	$guess = trim(fgets(STDIN));

	if (!is_numeric($guess)){
		fwrite(STDOUT, "Try a number between {$min} and {$max}" . PHP_EOL);
	} else if ($guess == $random){
			if ($guesscount == 1){
			fwrite(STDOUT, "YOU'RE A WIZARD HARRY! FIRST TRY" . PHP_EOL);
			} else if($guesscount < 4){
			fwrite(STDOUT, "GOOD GUESS, Correct! It only took you {$guesscount} tries".PHP_EOL);
			} else if($guesscount > 10){
			fwrite(STDOUT, "Finally right, I can't believe it took you {$guesscount} tries.".PHP_EOL);
			} else{
			fwrite(STDOUT, "Correct, it took you {$guesscount} tries." . PHP_EOL);
			}
		} else if($guess > $random){
			fwrite(STDOUT, "Too High! ");
		} else if($guess < $random){
			fwrite(STDOUT, "Too Low! ");
		} 
	$guesscount+=1;

} while ($guess != $random);

?>