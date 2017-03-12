<?php

if(YII_ENV_DEV) {
    return [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=127.0.0.1;dbname=blog',
        'username' => 'root',
        'password' => 'contur',
        'charset' => 'utf8',
    ];
} else {
    return [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=127.0.0.1;dbname=blog',
        'username' => 'root',
        'password' => 'contur',
        'charset' => 'utf8',
    ];
}
