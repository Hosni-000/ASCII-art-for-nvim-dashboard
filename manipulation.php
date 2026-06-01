#! /usr/bin/php
<?php
// defining path of ascii art
// please put the art in that file name "draft.php"
$draft_file = __DIR__ . "/draft.txt";

if (!file_exists($draft_file)) {
	die("Please make a file named draft.txt");
}

// important to read eachline and ignoring the newline sign 
// that will ruin the art
$file = file($draft_file, FILE_IGNORE_NEW_LINES);
echo "dashboard.section.header.val = {" . PHP_EOL;

foreach ($file as $line) {
	echo "'" . $line . "'," . PHP_EOL;
}
echo "}" . PHP_EOL;
