<?php

namespace BomberNet\Reflector;

use ReflectionClass;
use function count;
use function array_key_exists;

trait MethodsTrait
	{
		public function methodParameters (string $methodName):array
			{
				static $methods=[];
				return array_key_exists ($methodName,$methods)?$methods[$methodName]:$methods[$methodName]=(new ReflectionClass ($this))->getMethod ($methodName)->getParameters ();
			}
		
		public function methodParamCount (string $methodName):int
			{
				static $methods=[];
				return array_key_exists ($methodName,$methods)?$methods[$methodName]:$methods[$methodName]=count ($this->methodParameters ($methodName));
			}
	}
