<?php

namespace Lloricode\Calculator\Operation;

use Lloricode\Calculator\OperationAbstract;


class Addition extends OperationAbstract {

	const TYPE = 'Addition';

	public function execute($newValue, $result) {
		return $newValue + $result;
	}

	public function getType() :string
	{
		return self::TYPE;
	}
}