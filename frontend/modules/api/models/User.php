<?php
namespace frontend\modules\api\models;

use common\models\Project;
use common\models\ProjectUser;


/**
 * User model
 *
 */
class User extends \common\models\User
{
    public function fields()
    {
        return ['id', 'username'];
    }

    public function extraFields()
    {
        return ['projectUsers', 'projects'];
    }

    public function getProjectUsers()
    {
        return $this->hasMany(ProjectUser::className(), ['user_id' => 'id']);
    }

    public function getProjects()
    {
        return $this->hasMany(Project::className(), ['id' => 'project_id'])->via('projectUsers');
    }

}
