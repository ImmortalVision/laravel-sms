<?php
namespace ImmortalVision\SMS;

class SMSResult {

	public $result;
	public $deliveryID;
	public $status;

	function __construct($params)
	{
		// create above like $deliverID = [0=>['number'=>'0935...','id'=>'359235', 'status'=>'sent'], 1=>...]
	}
}