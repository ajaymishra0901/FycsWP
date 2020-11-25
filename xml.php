<?php
	$myXMLData =
	"<?xml version='1.0' encoding='UTF-8'?>
	<note>
	<to>Tove</to>
	<from>Jani</from>
	<heading>Reminder</heading>
	<body>Don't forget me this weekend!</body>
	</note>";
	$xml=simplexml_load_string($myXMLData) or die("Error:file does not exist");
	foreach($xml as $element=>$content){
		echo $element.":";
		echo"<b>".$content."</b><br>";
	}
?>