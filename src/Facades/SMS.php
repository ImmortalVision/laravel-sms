<?php

namespace Pezhvak\SMS\Facades;

class SMS extends Facade {
	protected static function getFacadeAccessor()
	{
		return 'SMS';
	}
}