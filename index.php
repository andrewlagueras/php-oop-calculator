<?php
require __DIR__.'/vendor/autoload.php';

echo "==================\n";
echo "==================\n";
echo "    calculator\n";
echo "==================\n";
echo "==================\n";

if (!defined('STDIN')) {
        echo 'STDIN required' . "\n";
        die();
}

$input1 = $argv[1];
$input2 = $argv[2];

print_r($argv);