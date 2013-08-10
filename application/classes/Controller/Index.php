<?php

class Controller_Index extends Controller_Website {
	
	public function action_index()
	{
		$this->response->body(View::factory("index")); 
	}
	
}

?>