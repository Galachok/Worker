<?php
class News
{
//    public static function getNewsItemById($id)
//    {
//        $id=intval($id);
//        $link=DB::getConnection();
//        $result = mysqli_query($link, "SELECT * FROM `news` WHERE id_news=".$id);
//        mysqli_close($link);
//        $newsItem = mysqli_fetch_assoc($result);
//        return $newsItem;
//    }

    public static function getNewsList()
    {
        $link=DB::getConnection();
        $result = mysqli_query($link, "SELECT * FROM `news` ORDER BY id_news DESC");
        mysqli_close($link);
        $newsList = array();
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $newsList[$i]['id_news'] = $row['id_news'];
            $newsList[$i]['title_news'] = $row['title_news'];
            $newsList[$i]['intro_text_news'] = $row['intro_text_news'];
            $i++;
        }
        return $newsList;
    }
}