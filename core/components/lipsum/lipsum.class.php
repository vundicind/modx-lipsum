<?php 
require_once (dirname(__FILE__) . '/lipsumcom.class.php');
require_once (dirname(__FILE__) . '/loripsumnet.class.php');

class Lipsum {


function __construct( &$modx ){
		$this->modx =& $modx;
	}//




public function getParagraphs($n, $provider = 'lipsum.com'){
		$retArray = array();
		
		switch($provider) {
		    case 'loripsum.net':
			$lipsum = new LoripsumNet;
			$retArray = $lipsum->getParagraphs($n);
			break;
		    case 'lipsum.com':
		    default:
			$lipsum = new LipsumCom;
			$retArray = $lipsum->getParagraphs($n);
		}
		return $retArray;
	}//




};// end class Lipsum
