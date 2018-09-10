<?php

namespace frontend\controllers\api;

use yii\rest\ActiveController;


/**
 * ProjectController implements the CRUD actions for Project model.
 */
class ProjectController extends ActiveController
{
    public $modelClass = 'frontend\modules\api\models\Project';

}
