<?php

class GameController extends Controller
{
    public function filters() 
    {
        return array(
            'checkUpdate',
            'checkSig - dcz',
        );
    }

    public function action2048($aid)
    {
        $this->layout = FALSE;
        $this->render('dcz_in_app');
    }

    public function actionDcz($aid)
    {
        $this->layout = FALSE;
        $this->render('dcz');
    }
}

