<?php

namespace frontend\controllers\api;

use yii\data\ActiveDataProvider;
use yii\rest\Controller;
use common\models\User;


class UserController extends Controller
{

    /**
     * @return mixed
     */
    public function actionIndex()
    {
        $dp = new ActiveDataProvider(['query' => \frontend\modules\api\models\User::find()]);
        $dp->pagination->pageSize = 2;
        return $dp;

    }

    /**
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return \frontend\modules\api\models\User::findOne($id);
    }
}
