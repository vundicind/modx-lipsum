<?php class LoripsumNet {

// inspired by http://stackoverflow.com/questions/20633310/how-to-get-random-text-from-lorem-ipsum-in-php

function __construct(){
	}//




public function getParagraphs($n){
		$lipsumUrl = 'http://loripsum.net/api';
		$parasStr = file_get_contents($lipsumUrl . '/' . $n . '/medium/plaintext');

		return preg_split('/\n+/', $parasStr);
	}//




};// end class LoripsumNet
