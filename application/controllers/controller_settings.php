<?php

class Controller_Settings extends Controller
{

	function action_index()
	{	
        $this->view->title = 'Settings';	
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
    
    function action_changepassword()
    {
        if (isset($_POST['current_password']) && isset($_POST['new_password1']) && isset($_POST['new_password2']))
        {
            $pwd = $_POST['current_password'];
            $new_pwd1 = $_POST['new_password1'];
            $new_pwd2 = $_POST['new_password2'];
            
            if (!isset($_SESSION['admin_id']))
            {
                session_destroy();
                header('Location:/');
            }
            
            $stmt = $GLOBALS['DB']->prepare('SELECT * FROM admins WHERE id = :id');
            $stmt->execute(array(':id' => $_SESSION['admin_id']));
            $row = $stmt->fetch();
            
            if (!isset($row['id']))
            {
                session_destroy();
                header('Location:/');
                die;
            }
            
            if (hash('sha256', SALT . $pwd) !== $row['password'])
            {
                header('Location:/settings/index/?err=1');
                die;
            }
            
            if (strlen($new_pwd1) < 5)
            {
                header('Location:/settings/index/?err=2');
                die;
            }            
            
            if ($new_pwd1 !== $new_pwd2)
            {
                header('Location:/settings/index/?err=3');
                die;
            }
            
            $new_password = hash('sha256', SALT . $new_pwd1);
            $stmt = $GLOBALS['DB']->prepare('UPDATE admins SET password = :password WHERE id = :id');
            $stmt->execute(array(':password' => $new_password, ':id' => $_SESSION['admin_id']));
            
            header('Location:/settings/index/?msg=1');
        }
        else
        {
            header('Location:/settings/index/');
        }
    }
}