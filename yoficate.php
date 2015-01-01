<?php

require_once './ReflectionTypeHint.php';
require_once './UTF8.php';
require_once './Text/Yoficator.php';

function yof($s)
{
	$t = new Text_Yoficator();
	return $t->parse($s);
}

$f = file_get_contents("php://stdin");
echo(yof($f));
