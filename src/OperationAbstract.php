<?php

namespace Lloricode\Calculator;


abstract class OperationAbstract
{
        abstract public function execute($newValue, $result);
        abstract public function getType() :string;
}
