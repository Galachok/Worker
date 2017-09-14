<?php

class DB
{
    public static function getConnection()
    {
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'work';
        $link = mysqli_connect($host, $user, $password, $database);
        mysqli_query($link,"SET NAMES utf-8");
        mysqli_query($link,"SET CHARACTER SET utf-8");
        mysqli_query($link,"SET character_set_client = utf-8");
        mysqli_query($link,"SET character_set_connection = utf-8");
        mysqli_query($link,"SET character_set_results = utf-8");
        return $link;
    }
}