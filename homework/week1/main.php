<?php

	// Homework 1

	$i = 1;
	while($argv[$i] !== null){
		$input .= " " . $argv[$i];
		$i++;
	}

	echo "FINAL Input: " . $input . "\n";

	function multiplyText($str) {
		$result = '';

		for ($i = 1; $i <= 5; $i++) {
			$result .= $i . ': ' . $str . PHP_EOL;
		}

		return $result;
	}

	if ($input === null) {
		echo "You did not say anything!\n";
	} else {
		echo "Your string is this long: " . strlen($input) . PHP_EOL;
		echo "Your string backwards: " . strrev($input) . PHP_EOL;
		echo "Your string uppercase: " . strtoupper($input) . PHP_EOL;

		echo multiplyText($input);
	}