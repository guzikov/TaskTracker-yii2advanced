<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Project */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal',
            'fieldConfig' => ['horizontalCssClasses' =>
            [
                    'label' => 'col-sm-2',
                    'offset' => 'col-sm-offset-4',
                    'wrapper' => 'col-sm-8',
                    'error' => '',
                    'hint' => '',
            ]]
    ]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'active')->dropDownList(\common\models\Project::STATUSES) ?>

    <?= $form->field($model, \common\models\Project::RELATION_PROJECT_USERS)->widget
    (\unclead\multipleinput\MultipleInput::className(),[
            'id' => 'project-users-widget',
            'max'               => 10,
            'min'               => 0,
            'allowEmptyList'    => false,
            'enableGuessTitle'  => true,
            'addButtonPosition' => \unclead\multipleinput\MultipleInput::POS_HEADER,
            'columns' => [
                    [
                            'name' => 'project_id',
                            'type' => 'hiddenInput',
                            'defaultValue' =>$model->id,
                    ],
                    [
                        'name' => 'user_id',
                        'type' => 'dropDownList',
                        'title' => 'Пользователь',
                        'items' => \common\models\User::usersList()
                    ],
                    [
                        'name' => 'role',
                        'type' => 'dropDownList',
                        'title' => 'Должность',
                        'items' => \common\models\ProjectUser::ROLES
                    ],
            ]
    ]);
    ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
