<?php

require_once './php/ReflectionTypeHint.php';
require_once './php/UTF8.php';
require_once './php/Text/Yoficator.php';

function yof($s)
{
	$t = new Text_Yoficator();
	return $t->parse($s);
}

$f = $_ENV["YOFICATE"];
echo(yof($f));
