<?php
namespace common\modules\chat\widgets;

use common\modules\chat\widgets\assets\ChatAsset;
use Yii;

class Chat extends \yii\bootstrap\Widget
{
    public function init()
    {
        ChatAsset::register($this->view);
    }

    public function run()
    {
        return $this->render('chat');
    }
}
