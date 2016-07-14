<?php

class Controller_Login extends Controller
{
	
	function action_index()
	{
        $data = array();
        
		if(isset($_POST['login']) && isset($_POST['password']))
		{

            $login = $_POST['login'];
            $password = $_POST['password'];
            $password = SALT . $password;
            $password = hash('sha256', $password);

            $stmt = $GLOBALS['DB']->prepare('SELECT id FROM admins WHERE login = :login AND password = :password');
            $stmt->execute(array(':login' => $login, ':password' => $password));
            $row = $stmt->fetch();

            if(isset($row['id']))
            {
                $_SESSION['admin_id'] = $row['id'];
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
