<?php

namespace foo;

class foo {
	
}

class_alias(__NAMESPACE__ .'\foo', 'bar');


var_dump(class_exists('\bar'));
var_dump(class_exists('bar'));
var_dump(class_exists('foo\bar'));
var_dump(class_exists('foo\foo'));
var_dump(class_exists('foo'));

?>
