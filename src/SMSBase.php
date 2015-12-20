<?php
namespace ImmortalVision\SMS;

use ImmortalVision\SMS\Contracts\SMS;

/**
 * Driver for the MeliPayamak
 *
 * @author     Pezhvak IMV
 * @link       https://github.com/pezhvak/laravel-sms
 */
class SMSBase implements SMS {

	protected $driver = '';
	protected $params = [];

	protected function getConnection() { }

	protected function getDriverSettings($key)
	{
		return config('SMS.connections.' . $this->driver . '.' . $key);
	}

	public function setFrom($number = NULL)
	{
		$this->params['from'] = is_null($number) ? $this->getDriverSettings('numbers')['default'] : $number;

		return $this;
	}

	public function setMessage($message)
	{
		$this->params['message'] = $message;

		return $this;
	}

	public function setReceiver($receivers)
	{
		$this->params['receivers'] = is_array($receivers) ? $receivers : [$receivers];

		return $this;
	}

	public function isFlash($boolean)
	{
		$this->params['is_flash'] = boolval($boolean);

		return $this;
	}


	public function send()
	{
		$this->params['username'] = $this->getDriverSettings('username');
		$this->params['password'] = $this->getDriverSettings('password');
		if (! isset($this->params['from']))
			$this->setFrom();
	}

	public function getCredit()
	{
	}

	public function clear()
	{
		$this->params = [];
	}
}