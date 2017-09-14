<?php
function connectDB()
{
    global $link;
    $link = mysqli_connect("localhost", "root", "", "work");
    mysqli_query($link,'SET NAMES "utf-8"');
}

function closeDB()
{
    global $link;
    mysqli_close($link);
}