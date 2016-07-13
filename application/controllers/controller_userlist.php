<?php

class Controller_Userlist extends Controller
{

	function __construct()
	{
		$this->model = new Model_Userlist();
		$this->view = new View();
	}
	
	function action_index()
	{
		$data = $this->model->get_data();
        $this->view->title = "User list";
		$this->view->generate('userlist_view.php', 'template_view.php', $data);
	}
}