<?php

require_once '/../core/paginator.php';

class Model_Keyboardlist extends Model    
{
    
    public function get_data()
    {
        $result = [];
        $result['state'] = 'no results';
        
        $limit = 25;
        if (isset($_GET['limit']))
        {
            $limit = $_GET['limit'];
        }
        
        
        $page = 1;
        if (isset($_GET['page']))
        {
            $page = $_GET['page'];
        }
        $offset = $limit * ($page - 1);
        
        $sqlFilters = array();
        $getParams = array();
        
        if (isset($_GET['uid']))
        {
            if (is_numeric($_GET['uid']))
            {
                array_push($sqlFilters, 'user_id = ' . $_GET['uid']);
                array_push($getParams, 'uid=' . $_GET['uid']);
            }
        }
        
        if (isset($_GET['q']))
        {
            array_push($sqlFilters, 'text LIKE "%' . mysql_real_escape_string($_GET['q']) . '%"');
            array_push($getParams, 'q=' . $_GET['q']);
        }
        
        if (isset($_GET['proc']))
        {
            array_push($sqlFilters, 'process = "' . mysql_real_escape_string($_GET['proc']) . '"');
            array_push($getParams, 'proc=' . $_GET['proc']);
        }
        
        if (isset($_GET['title']))
        {
            array_push($sqlFilters, 'title LIKE "%' . mysql_real_escape_string($_GET['title']) . '%"');
            array_push($getParams, 'title=' . $_GET['title']);
        }
        
        $sqlWhereClause = '';
        if (count($sqlFilters) > 0)
        {
            $sqlWhereClause = ' WHERE ' . implode(' AND ', $sqlFilters);
        }
        
        $stmt = $GLOBALS['DB']->prepare('SELECT * FROM keyboard' . $sqlWhereClause . ' LIMIT :limit OFFSET :offset');
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
        
        $paginator = new Paginator('keyboardlist', 'keyboard', $page, $limit, $sqlFilters, $getParams);
        $result['paginator'] = $paginator->get_paginator();
        
        
        return $result;
    }

}
