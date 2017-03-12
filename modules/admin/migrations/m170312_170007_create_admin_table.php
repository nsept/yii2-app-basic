<?php

namespace app\modules\admin\migrations;

use yii\db\Migration;

/**
 * Handles the creation of table `admin`.
 */
class m170312_170007_create_admin_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('admin', [
            'id' => $this->primaryKey(),
            'username' => $this->string(20)->notNull()->unique(),
            'password_hash' => $this->string(60)->notNull(),
            'auth_key' => $this->string(32)->notNull(),
        ], 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');

        $this->insert('admin', [
            'username' => 'admin',
            'password_hash' => \Yii::$app->security->generatePasswordHash('admin'),
            'auth_key' => \Yii::$app->security->generateRandomString()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('admin');
    }
}
