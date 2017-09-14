<?php

class DirectorController
{
    public function actionIndex()
    {

    }

    public function actionView($id = 1)
    {
        $indexList = array();
        $indexList = Director::getWorkList($id);
        require_once ROOT . '/views/Director/index.php';
        return true;
    }
}