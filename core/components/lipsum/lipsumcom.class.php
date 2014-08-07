<?php class LipsumCom {

// inspired by http://www.softabar.com/files/LoremIpsum4J.java

function __construct(){
	}//




public function getParagraphs($n){
		$lipsumUrl = 'http://www.lipsum.com/feed/xml';
		$parasStr = simplexml_load_file($lipsumUrl . '?amount=' . $n . '&what=paras&start=yes')->lipsum;
		
		return preg_split('/\n+/', $parasStr);
	}//




};// end class LipsumCom
