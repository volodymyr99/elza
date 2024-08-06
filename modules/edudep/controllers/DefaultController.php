<?php

namespace app\modules\edudep\controllers;

use yii\web\Controller;

/**
 * Default controller for the `edudep` module
 */
class DefaultController extends Controller
{
    public $layout = 'main-edudep';

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
