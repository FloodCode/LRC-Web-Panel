<?php

class Controller_Login extends Controller
{
	
	function action_index()
	{
        $data = array();
        
		if(isset($_POST['login']) && isset($_POST['password']))
		{

            $login = strtolower($_POST['login']);
            $password = hash('sha256', SALT . $_POST['password']);

            $stmt = $GLOBALS['DB']->prepare('SELECT * FROM admins WHERE login = :login AND password = :password');
            $stmt->execute(array(':login' => $login, ':password' => $password));
            $row = $stmt->fetch();

            if(isset($row['id']))
            {
                $_SESSION['admin_id'] = $row['id'];
                $_SESSION['theme'] = $row['theme'];
                header('Location:/');
            }
            else
            {
                $data['error'] = 'Incorrect login or password';
            }
		}
		
        $this->view->title = 'Sing in page';	
		$this->view->generate('login_view.php', 'template_login.php', $data);
        
	}
    
    function action_logout()
    {
        session_destroy();
        header('Location:/');
    }
	
}
