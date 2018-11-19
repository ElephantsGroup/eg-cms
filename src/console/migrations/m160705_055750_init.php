<?php

use yii\db\Migration;
use elephantsGroup\user\models\User;

class m160705_055750_init extends Migration
{
    public function safeUp()
    {
        $this->insert('{{%auth_rule}}', [
            'name' => 'isProfileOwner',
            'data' => 'O:24:"app\rbac\UserProfileRule":3:{s:4:"name";s:14:"isProfileOwner";s:9:"createdAt";i:1467629406;s:9:"updatedAt";i:1467629406;}',
            'created_at' => 1467629406,
            'updated_at' => 1467629406
        ]);
        $this->insert('{{%auth_item}}', [
            'name' => '/admin/*',
            'type' => 2,
            'created_at' => 1467629406,
            'updated_at' => 1467629406
        ]);
        $this->insert('{{%auth_item}}', [
            'name' => '/debug/*',
            'type' => 2,
            'created_at' => 1467629406,
            'updated_at' => 1467629406
        ]);
        $this->insert('{{%auth_item}}', [
            'name' => '/gii/*',
            'type' => 2,
            'created_at' => 1467629406,
            'updated_at' => 1467629406
        ]);
        $this->insert('{{%auth_item}}', [
            'name' => '/user/admin/*',
            'type' => 2,
            'created_at' => 1467629406,
            'updated_at' => 1467629406
        ]);
        $this->insert('{{%auth_item}}', [
            'name' => '/user/profile/index',
            'type' => 2,
            'created_at' => 1467629406,
            'updated_at' => 1467629406
        ]);
        $this->insert('{{%auth_item}}', [
            'name' => '/user/profile/show',
            'type' => 2,
            'created_at' => 1467629406,
            'updated_at' => 1467629406
        ]);
        $this->insert('{{%auth_item}}', [
            'name' => 'code_management',
            'type' => 2,
            'created_at' => 1467629406,
            'updated_at' => 1467629406
        ]);
        $this->insert('{{%auth_item}}', [
            'name' => 'code_manager',
            'type' => 1,
            'created_at' => 1467629406,
            'updated_at' => 1467629406
        ]);
        $this->insert('{{%auth_item}}', [
            'name' => 'show_profile_index',
            'type' => 2,
            'created_at' => 1467629406,
            'updated_at' => 1467629406
        ]);
        $this->insert('{{%auth_item}}', [
            'name' => 'user_manager',
            'type' => 1,
            'created_at' => 1467629406,
            'updated_at' => 1467629406
        ]);
        $this->insert('{{%auth_item}}', [
            'name' => 'super_admin',
            'type' => 1,
            'created_at' => 1467629406,
            'updated_at' => 1467629406
        ]);
        $this->insert('{{%auth_item}}', [
            'name' => 'user_management',
            'type' => 2,
            'created_at' => 1467629406,
            'updated_at' => 1467629406
        ]);
        $this->insert('{{%auth_item}}', [
            'name' => 'show_profile_show',
            'type' => 2,
            'rule_name' => 'isProfileOwner',
            'created_at' => 1467629406,
            'updated_at' => 1467629406
        ]);
        $this->insert('{{%auth_item_child}}', [
            'parent' => 'code_management',
            'child' => '/admin/*',
        ]);
        $this->insert('{{%auth_item_child}}', [
            'parent' => 'code_management',
            'child' => '/debug/*',
        ]);
        $this->insert('{{%auth_item_child}}', [
            'parent' => 'code_management',
            'child' => '/gii/*',
        ]);
        $this->insert('{{%auth_item_child}}', [
            'parent' => 'user_management',
            'child' => '/user/admin/*',
        ]);
        $this->insert('{{%auth_item_child}}', [
            'parent' => 'show_profile_index',
            'child' => '/user/profile/index',
        ]);
        $this->insert('{{%auth_item_child}}', [
            'parent' => 'show_profile_show',
            'child' => '/user/profile/show',
        ]);
        $this->insert('{{%auth_item_child}}', [
            'parent' => 'code_manager',
            'child' => 'code_management',
        ]);
        $this->insert('{{%auth_item_child}}', [
            'parent' => 'super_admin',
            'child' => 'code_manager',
        ]);
        $this->insert('{{%auth_item_child}}', [
            'parent' => 'user_manager',
            'child' => 'user_management',
        ]);
        $this->insert('{{%auth_item_child}}', [
            'parent' => 'super_admin',
            'child' => 'user_manager',
        ]);

        $user = Yii::createObject([
            'class'    => User::className(),
            'scenario' => 'create',
        ]);

        $user->username = 'admin';
        $user->password = '12345678';
        $user->email = 'a_majd_8@yahoo.com';
        $user->confirmed_at = 1467629406;
        $user->flags = 100;
        $user->save();

        $this->insert('{{%auth_assignment}}', [
            'item_name' => 'super_admin',
            'user_id' => $user->id,
            'created_at' => 1467629406
        ]);
    }

    public function safeDown()
    {
    }
}
