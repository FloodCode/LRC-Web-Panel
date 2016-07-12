<?php

require_once '/../core/paginator.php';

class Model_Keyboardlist extends Model    
{
    
    public function get_data()
    {
        $result = [];
        $result['state'] = 'no results';
        
        $limit = 25;
        if (isset($_GET['perpage']))
        {
            $limit = $_GET['perpage'];
        }
        
        
        $page = 1;
        if (isset($_GET['page']))
        {
            $page = $_GET['page'];
        }
        $offset = $limit * ($page - 1);
        
        $stmt = $GLOBALS['DB']->prepare('SELECT * FROM keyboard LIMIT :limit OFFSET :offset');
        $stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', (int)$offset, PDO::PARAM_INT);
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
        
        $paginator = new Paginator('keyboardlist', 'keyboard', '', $page, $limit);
        $result['paginator'] = $paginator->get_paginator();
        
        return $result;
    }

}
