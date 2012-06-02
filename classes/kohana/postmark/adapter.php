<?php defined('SYSPATH') or die('No direct script access.');

class Kohana_Postmark_Adapter implements Mail_Postmark_Adapter_Interface {
	
	public static function getApiKey()
	{
		return Kohana::$config->load('postmark.api_key');
	}
	
	public static function setupDefaults(Mail_Postmark &$mail)
	{
		$mail->from(Kohana::$config->load('postmark.from_address'), Kohana::$config->load('postmark.from_name'));
	}
	
	public static function log($logData)
	{
    // Kohana::$log->add(Log::INFO, Arr::get($logData, 'return'));
	}
}

