<?php

namespace Lloricode\Calculator;


use Lloricode\Calculator\OperationAbstract;

class Calculator
{
        private $_result;
        private $_type;


        public function compute(OperationAbstract $operation, int $value)
        {
                $this->_result = $operation->execute($value, $this->_result);
                $this->_type = $operation->getType();
        }

        public function result()
        {
                echo "Operation: {$this->_type}: {$this->_result}\n";
        }
}