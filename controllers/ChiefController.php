<?php

class ChiefController
{
    public function actionIndex()
    {

    }
    public function actionView($id = 1)
    {
            $indexList = array();
            $indexList = Chief::getWorkList($id);
            require_once ROOT . '/views/chief/index.php';
            return true;
    }
}