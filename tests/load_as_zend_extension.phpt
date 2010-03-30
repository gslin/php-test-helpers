--TEST--
Loading test_helpers as zend_extension
--INI--
zend_extension=modules/test_helpers.so
--SKIPIF--
<?php
if (!extension_loaded('test_helpers')) die('skip test_helpers extensionnot loaded');
?>
--FILE--
<?php
// The test framework will load the extension as PHP extension, we verify that a second load attempt is made
// This test has some flaws, the major one is that it expects a specific .so file at a specific location ...
echo "done";
?>
--EXPECT--
PHP Warning:  Module 'test_helpers' already loaded in Unknown on line 0

Warning: Module 'test_helpers' already loaded in Unknown on line 0
done
