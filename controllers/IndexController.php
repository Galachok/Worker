<?php
class IndexController
{
    public function actionIndex()
    {
        $indexList = array();
        $indexList = Index::getWorkList(1);
        require_once ROOT . '/views/index/index.php';
        return true;
    }
   public function actionView($id = 1)
    {
        $indexList = array();
        $indexList = Index::getWorkList($id);
        require_once ROOT . '/views/index/index.php';
        return true;
    }
}