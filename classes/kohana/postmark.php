<?php defined('SYSPATH') or die('No direct script access.');

class Kohana_Postmark {
	
	public static function compose()
	{
		if ( ! class_exists('Mail_Postmark'))
		{
			require Kohana::find_file('vendor', 'postmark/Postmark');
		}
		
		return Mail_Postmark::compose();
	}
}

require Kohana::find_file('vendor', 'postmark/Adapter_Interface');

class Mail_Postmark_Adapter extends Postmark_Adapter { }