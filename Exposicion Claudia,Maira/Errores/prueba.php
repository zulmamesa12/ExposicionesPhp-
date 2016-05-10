<?php
error_reporting(E_ALL);

$foo = $bar; //notice : $bar uninitialized

$bar['foo'] = 'hello'; // no notice, although $bar itself has never been initialized (with "$bar = array()" for example)

$bar = array('foobar' => 'barfoo');
$foo = $bar['foobar'] // ok

$foo = $bar['nope'] // notice : no such index
?>