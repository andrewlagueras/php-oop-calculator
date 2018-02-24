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
$input3 = $argv[3];
$input4 = $argv[4];

print_r($argv);
use Lloricode\Calculator\Calculator;
use Lloricode\Calculator\Operation\Multiplication;
use Lloricode\Calculator\Operation\Addition;

$calulator = new Calculator;

$calulator->compute(new Addition, $input1);
$calulator->result();

$calulator->compute(new Multiplication, $input2);
$calulator->result();

// $calulator->compute(new Division, $input3);
$calulator->result();

// $calulator->compute(new Subtraction, $input4);
$calulator->result();
