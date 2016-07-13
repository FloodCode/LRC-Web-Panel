<?php

class Controller_Contacts extends Controller
{
	
	function action_index()
	{
        $this->view->title = "Contacts";
		$this->view->generate('contacts_view.php', 'template_view.php');
	}
}
