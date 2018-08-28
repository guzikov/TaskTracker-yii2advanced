<?php
/**
 * Created by PhpStorm.
 * User: guzepp
 * Date: 23.08.2018
 * Time: 11:47
 */

namespace backend\controllers;
use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex(){
        $message = "Hello World in backend testController";

        return $this->render('index', [
            'message' => $message
        ]);
    }
}