<?php
/**
 * Created by PhpStorm.
 * User: guzepp
 * Date: 23.08.2018
 * Time: 11:54
 */

namespace console\controllers;
use yii\console\Controller;

class TestController extends Controller
{
    /**
     * Output test param in console
     * @param @param
     */
    public function actionIndex($param){
        echo "Hello World in console Test Controller, параметр: " . $param . PHP_EOL;
    }
}