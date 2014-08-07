<?php
/*
	Lipsum
	
	
	Author: Radu Dumbrăveanu
	Email: vundicind@gmail.com
	Date: August 2014


******************************/

$path = $modx->getOption('core_path').'components/lipsum/';
if(!class_exists('Lipsum')){ 
		require $path.'lipsum.class.php';
};
		$Lipsum = new Lipsum($modx);

// Outputness
$output = '';

$nOfParas = $scriptProperties['paras'];
$provider = $scriptProperties['provider'];

$paras = $Lipsum->getParagraphs($nOfParas, $provider);
foreach($paras as $para)
    $output .= '<p>' . $para .'</p>';

return $output;