<?php
header('Content-type: text/xml');

echo "<applications xmlns:i=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns=\"http://schemas.datacontract.org/2004/07/\">";

foreach($applications as $app){
	echo "<application>";
		$app_assoc = get_object_vars($app);
		array_pop($app_assoc);
		foreach($app_assoc as $key=>$value){
			echo "<{$key}>";
			echo "<![CDATA[".$value."]]>";
			echo "</{$key}>";
		}
	echo "</application>";
}
	
echo "</applications>";
