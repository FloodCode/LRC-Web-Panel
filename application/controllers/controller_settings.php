<?php

class Controller_Settings extends Controller
{

	function action_index()
	{	
        $this->view->title = "Settings";	
		$this->view->generate('settings_view.php', 'template_view.php');
	}
    
    function action_setcolor()
    {
        if (isset($_GET['color'])) {
            if (is_string($_GET['color']))
            {
                $_SESSION['theme'] = $_GET['color'];
                
                $stmt = $GLOBALS['DB']->prepare('UPDATE admins SET theme = :theme WHERE id = :id');
                $stmt->execute(array(':theme' => $_GET['color'], ':id' => $_SESSION['admin_id']));
                $row = $stmt->fetch();
            }
        }
        
        header('Location:/settings/index/');
    }
}