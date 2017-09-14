<?php
class WorkerController
{
    public function actionIndex()
    {

    }
    public function actionView($id)
    {
        $indexList = array();
        $indexList = Worker::getWorkList($id);
        require_once ROOT . '/views/worker/index.php';
        return true;
    }
}