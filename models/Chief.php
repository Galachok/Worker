<?php
class Chief
{
    public static function getWorkList($page)
    {
        if ($page == "") {
            $page = 1;
        }
        $minstr = trim(htmlspecialchars($page - 1));
        if ($minstr != 0) {
            $minstr *= 10;
        }
        if(isset($_GET['id'])){
            $_SESSION[__CLASS__ . 'Controller'] = trim(htmlspecialchars($_GET['id']));
        }
        if(isset($_SESSION[__CLASS__ . 'Controller'])){
            $link = DB::getConnection();
            $array = array();
            $query = "SELECT COUNT(*) as all_work FROM `worker` as w where id_chief=" . $_SESSION[__CLASS__ . 'Controller'];
            $result_count = mysqli_query($link, $query);
            $row = mysqli_fetch_assoc($result_count);
            $array[] = $row['all_work'];
            $query = "SELECT name_worker,id_worker FROM `worker` as w where id_chief=" . $_SESSION[__CLASS__ . 'Controller'] . " limit " . $minstr . ",10";
            mysqli_query($link, "SET NAMES 'utf8';");
            $result = mysqli_query($link, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                $array[] = $row['name_worker'];
                $array[] = $row['id_worker'];
            }
            mysqli_close($link);
            mysqli_free_result($result);
            return $array;
        }
        else{
            header('Location: /');
        }
    }
}