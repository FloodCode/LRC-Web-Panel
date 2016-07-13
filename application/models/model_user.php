<?php

class Model_User extends Model
{

    public function get_data()
    {
        $result = [];
        $result['state'] = 'no results';
        
        $uid = -1;
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
        
        $stmt = $GLOBALS['DB']->prepare('SELECT * FROM users WHERE id = ?;');
        $stmt->execute(array($uid));
        $rows = $stmt->fetchAll(PDO::FETCH_NAMED);
        
        if (count($rows) == 0)
        {
            return $result;
        }
        else
        {
            $result['state'] = 'ok';
            $result['user'] = $rows[0];
        }
        
        return $result;
    }

}
