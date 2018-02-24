<?php

namespace Lloricode\Calculator\Operation;

use Lloricode\Calculator\OperationAbstract;


class Multiplication extends OperationAbstract
{

        const TYPE = 'Mutiplication';

        public function execute($newValue, $result)
        {
                return $newValue * $result;
        }

        public function getType() :string
        {
                return self::TYPE;
        }
}