<?php
namespace ImmortalVision\SMS\Contracts;

interface SMS {
	/**
	 * @param $number number to send from
	 * @return $this
	 */
	public function setFrom($number = NULL);

	/**
	 * Set Receivers
	 * @param $receivers number or array of numbers
	 * @return $this
	 */
	public function setReceiver($receivers);

	/**
	 * Prepare message text
	 * @param $message message text
	 * @return $this
	 */
	public function setMessage($message);

	/**
	 * Set flash mode
	 * @param $bool boolean
	 * @return $this
	 */
	public function isFlash($bool);

	/**
	 * Send SMS
	 * @return mixed result
	 */
	public function send();

	public function getCredit();
}