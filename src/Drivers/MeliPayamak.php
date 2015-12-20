<?php
namespace ImmortalVision\SMS\Drivers;

use ImmortalVision\SMS\SMSBase;
use SoapClient;

/**
 * Driver for the MeliPayamak
 *
 * @author     Pezhvak IMV
 * @link       https://github.com/pezhvak/laravel-sms
 */
class MeliPayamak extends SMSBase {

	protected $driver = 'melipayamak';
	private $connection = NULL;

	function __construct()
	{
		ini_set("soap.wsdl_cache_enabled", "0");
	}

	protected function getConnection()
	{
		return is_null($this->connection) ? $this->connection = new SoapClient(parent::getDriverSettings('endpoint')) : $this->connection;
	}

	public function exec($endpoint, $options)
	{
		try {
			/*$parameters = [];
			$parameters['username'] = $this->getDriverSettings('username');
			$parameters['password'] = $this->getDriverSettings('passwords');
			$parameters['from'] = $this->getDriverSettings('numbers')['default'];
			$parameters['to'] = [];
			$parameters['text'] = '';
			//$parameters['text'] = $parameters['text'];//iconv(, 'UTF-8//TRANSLIT',"سلام");
			$parameters['isflash'] = false;
			$parameters['udh'] = "";
			$parameters['recId'] = array(0);
			$parameters['status'] = 0x0;
			$parameters = array_merge($parameters, $options);*/
			//echo $client->GetCredit(array("username" => "wsdemo", "password" => "wsdemo"))->GetCreditResult;
			//echo $client->SendSms($parameters)->SendSmsResult;
		} catch (SoapFault $ex) {
			echo $ex->faultstring;
		}
	}

	public function send()
	{
		parent::send();
		$params = $_params = $this->params;
		$_params['to'] = $params['receivers'];
		$_params['text'] = $params['message'];
		$_params['isflash'] = isset($params['is_flash']) ? $params['is_flash'] : false;
		$_params['udh'] = '';
		//$_params['recId'] = [];
		//$_params['status'] = [];
		//unset($_params['is_flash']);
		//unset($_params['receivers']);

		//dd($_params);
		return $this->getConnection()->SendSms($_params);
	}

	public function getCredit()
	{
		return $this->getConnection()->GetCredit(['username' => $this->getDriverSettings('username'), 'password' => $this->getDriverSettings('password')])->GetCreditResult;
	}
}