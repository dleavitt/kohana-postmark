<?php defined('SYSPATH') or die('No direct script access.');

class Kohana_Postmark_Adapter implements Mail_Postmark_Adapter_Interface {
	
	public static function getApiKey()
	{
		return Kohana::config('postmark.api_key');
	}
	
	public static function setupDefaults(Mail_Postmark &$mail)
	{
		$mail->from(Kohana::config('postmark.from_address'), Kohana::config('postmark.from_name'));
	}
	
	public static function log($logData)
	{
		Kohana::$log->add(Kohana::INFO, Arr::get($logData, 'return'));
	}
}

