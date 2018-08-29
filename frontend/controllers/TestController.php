<?php
/**
 * Created by PhpStorm.
 * User: guzepp
 * Date: 23.08.2018
 * Time: 11:38
 */

namespace frontend\controllers;

use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex(){

        $message = "Hello World in frontend test Controller";
        return $this->render('index', [
            'message' => $message
        ]);
    }

    public function actionChat(){

        return $this->render('chat', []);
    }


}