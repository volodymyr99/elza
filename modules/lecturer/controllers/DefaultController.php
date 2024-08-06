<?php

namespace app\modules\lecturer\controllers;

use yii\web\Controller;

/**
 * Default controller for the `lecturer` module
 */
class DefaultController extends Controller
{
     public $layout = 'main-lecturer';

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
