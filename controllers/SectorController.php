<?php
class SectorController
{
    public function actionIndex()
    {

    }
    public function actionView($id)
    {
            $indexList = array();
            $indexList = Sector::getWorkList($id);
            require_once ROOT . '/views/sector/index.php';
            return true;
    }
}