<?php

$handle = fopen('soubor.txt', 'r');
$text = fread($handle, 1000);
echo $text;