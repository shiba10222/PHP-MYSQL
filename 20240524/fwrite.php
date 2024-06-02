<?php
$handle=fopen('output.txt', 'a+');// 開啟檔案
fwrite($handle, "Hello world".PHP_EOL);// 寫入檔案
fwrite($handle, "This is line two".PHP_EOL);
fwrite($handle, "This is line three".PHP_EOL);
fwrite($handle, "This is line four".PHP_EOL);
fclose($handle);