<?php

if(!defined('PHP_EOL')) {
	define('PHP_EOL', "\n");
}

if(isset($argv[1])) {
	if (base64_encode(base64_decode($argv[1])) === $argv[1]){
		echo base64_decode($argv[1]) . PHP_EOL;
	} else {
		echo base64_encode($argv[1]) . PHP_EOL;
	}
} else {
	exit('please supply a string to base64 encode OR a base64 string to decode' . PHP_EOL);
}
