<?php

namespace app\modules\admin;

use yii\base\BootstrapInterface;

class Bootstrap implements BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        \Yii::setAlias('@admin', __DIR__);
    }
}
