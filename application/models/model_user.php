<?php

class Model_User extends Model
{

    public function get_data()
    {
        $result = [];
        $result['state'] = 'no results';
        
        $uid = null;
        if (isset($_GET['uid']))
        {
            if (is_numeric($_GET['uid']))
            {
                $uid = $_GET['uid'];
            }
            else
            {
                return $result;
            }
        }
        else
        {
            return $result;
        }
        
        $stmt = $GLOBALS['DB']->prepare('SELECT * FROM users WHERE id = ?');
        $stmt->execute(array($uid));
        $row = $stmt->fetch(PDO::FETCH_NAMED);
        
        if (!isset($row['id']))
        {
            return $result;
        }
        
        $result['user'] = $row;
        
        $result['keyboard_entries'] = null;
        $result['clipboard_entries'] = null;
        
        $stmt = $GLOBALS['DB']->prepare('SELECT COUNT(*) FROM keyboard WHERE user_id = ?');
        $stmt->execute(array($uid));
        $row = $stmt->fetch();
        if (isset($row[0]))
        {
            $result['keyboard_entries'] = $row[0];
        }
        
        $stmt = $GLOBALS['DB']->prepare('SELECT COUNT(*) FROM clipboard WHERE user_id = ?');
        $stmt->execute(array($uid));
        $row = $stmt->fetch();
        if (isset($row[0]))
        {
            $result['clipboard_entries'] = $row[0];
        }
        
        
        $result['state'] = 'ok';
        return $result;
    }

}