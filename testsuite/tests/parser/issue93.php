<?php
require_once(dirname(__FILE__) . '/../../../php-sql-parser.php');
require_once(dirname(__FILE__) . '/../../test-more.php');

$sql="select 1 as `a` order by `a`";
$parser = new PHPSQLParser($sql, true);
$p = $parser->parsed;

print_r($p);

$expected = getExpectedValue(dirname(__FILE__), 'issue93.serialized');
eq_array($p, $expected, 'simple query');