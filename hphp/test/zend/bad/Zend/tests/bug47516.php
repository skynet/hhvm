<?php
$s='substr';

$htm=<<<DOC
{$s(<<<'ppp'
abcdefg
ppp
,0,3)}
DOC;

echo "$htm\n";

$htm=<<<DOC
{$s(<<<ppp
abcdefg
ppp
,0,3)}
DOC;

echo "$htm\n";

$htm="{$s(<<<'ppp'
abcdefg
ppp
,0,3)}
";

echo "$htm\n";
?>
