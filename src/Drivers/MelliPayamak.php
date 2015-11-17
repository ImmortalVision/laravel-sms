<?php
namespace Pezhvak\SMS\Drivers;

use Pezhvak\SMS\Contracts\SMS;

/**
 * Driver for the MeliPayamak
 *
 * @author     Pezhvak IMV
 * @link       https://github.com/pezhvak/laravel-sms
 */
class MelliPayamak implements SMS {

	public function exec($endpoint, $receivers, $parameters){
		ini_set("soap.wsdl_cache_enabled", "0");
		try {
			$client = new SoapClient("http://87.107.121.54/post/send.asmx?wsdl");
			$parameters['username'] = config('SMS.services.melipayamak');
			$parameters['password'] = "demo";
			$parameters['from'] = "10000.";
			$parameters['to'] = array("912...");
			$parameters['text'] =iconv($encoding, 'UTF-8//TRANSLIT',"سلام");
			$parameters['isflash'] = true;
			$parameters['udh'] = "";
			$parameters['recId'] = array(0);
			$parameters['status'] = 0x0;
			echo $client->GetCredit(array("username"=>"wsdemo","password"=>"wsdemo"))->GetCreditResult;
			echo $client->SendSms($parameters)->SendSmsResult;
			echo $status;
		} catch (SoapFault $ex) {
			echo $ex->faultstring;
		}
	}

	public function send()
	{



	}
}