<?php

class Model_Userlist extends Model
{

    public function get_data()
    {
        $result = [];
        $result['state'] = 'no results';
        
        $stmt = $GLOBALS['DB']->prepare('SELECT * FROM users;');
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_NAMED);
        
        if (count($rows) == 0)
        {
            return $result;
        }
        else
        {
            $result['state'] = 'ok';
            $result['items'] = $rows;
        }
        
        return $result;
    }

}
