<?php 

// make sure the file is being included by Kohana (prevents users from accessing files directly from the url
defined('SYSPATH') or die('No direct script access.');

class Controller_Website extends Controller_Template {
	
	// default template (can be changed in children classes)
	public $template = "index"; 
	
	public function before()
	{
			// like 'super();' in Java
			parent::before();
			
			// new variable called 'stylesheets'
			$this->template->stylesheets =  array("css"=>"css/bootstrap.css"); 
	}
	
}

?>