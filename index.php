<?php
require_once "vendor/autoload.php";

$url = new \Cankie7474\MyTest\MyUrl();
echo $url->slugify('https://www.example.org', 'Das ist ein langer Text.');
