<?php

class Controller_Clipboardlist extends Controller
{

	function __construct()
	{
		$this->model = new Model_Clipboardlist();
		$this->view = new View();
	}
	
	function action_index()
	{
		$data = $this->model->get_data();		
		$this->view->generate('clipboardlist_view.php', 'template_view.php', $data);
	}
}
