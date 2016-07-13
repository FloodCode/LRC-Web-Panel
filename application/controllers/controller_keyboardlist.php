<?php

class Controller_Keyboardlist extends Controller
{

	function __construct()
	{
		$this->model = new Model_Keyboardlist();
		$this->view = new View();
	}
	
	function action_index()
	{
		$data = $this->model->get_data();
        $this->view->title = "Keyboard data list";	
		$this->view->generate('keyboardlist_view.php', 'template_view.php', $data);
	}
}
