<?php
include_once("xml2php.php");
$xml ="<?xml version='1.0'?>  
<moleculedb>  
    <molecule name='Benzine'>  
        <symbol>ben</symbol>  
        <code>A</code>  
    </molecule>  
    <molecule name='Water'>  
        <symbol>h2o</symbol>  
        <code>K</code>  
    </molecule>
	<molecule name='Parvez'>  
        <symbol>h2o</symbol>  
        <code>K</code>  
    </molecule>
</moleculedb>";
$array = XML2Array::createArray($xml);
echo "<pre>";
print_r($array);
?>