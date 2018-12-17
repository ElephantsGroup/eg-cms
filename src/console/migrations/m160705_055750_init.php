<?php

use yii\db\Migration;
use yii\db\Query;

class m160705_055750_init extends Migration
{
    public function safeUp()
    {
		$db = \Yii::$app->db;
		$query = new Query();
		if($db->schema->getTableSchema("{{%auth_rule}}",true) !== null)
		{
			if (!$query->from('{{%auth_rule}}')->where(['name' => 'isProfileOwner'])->exists())
				$this->insert('{{%auth_rule}}', [
					'name' 				=> 'isProfileOwner',
					'data' 				=> 'O:24:"app\rbac\UserProfileRule":3:{s:4:"name";s:14:"isProfileOwner";s:9:"createdAt";i:'. time() .';s:9:"updatedAt";i:'. time() .';}',
					'created_at' 		=> time(),
					'updated_at' 		=> time()
				]);
		}
        if ($db->schema->getTableSchema("{{%auth_item}}", true) !== null)
		{
			if (!$query->from('{{%auth_item}}')->where(['name' => '/debug/*'])->exists())
				$this->insert('{{%auth_item}}', [
					'name' 			=> '/debug/*',
					'type'			=> 2,
					'created_at'	=> time(),
					'updated_at'	=> time()
				]);
			if (!$query->from('{{%auth_item}}')->where(['name' => '/gii/*'])->exists())
				$this->insert('{{%auth_item}}', [
					'name'			=> '/gii/*',
					'type'			=> 2,
					'created_at'	=> time(),
					'updated_at'	=> time()
				]);
			if (!$query->from('{{%auth_item}}')->where(['name' => '/user/admin/*'])->exists())
				$this->insert('{{%auth_item}}', [
					'name'			=> '/user/admin/*',
					'type'			=> 2,
					'created_at'	=> time(),
					'updated_at'	=> time()
				]);
			if (!$query->from('{{%auth_item}}')->where(['name' => '/user/profile/index'])->exists())
				$this->insert('{{%auth_item}}', [
					'name'			=> '/user/profile/index',
					'type'			=> 2,
					'created_at'	=> time(),
					'updated_at'	=> time()
				]);
			if (!$query->from('{{%auth_item}}')->where(['name' => '/user/profile/show'])->exists())
				$this->insert('{{%auth_item}}', [
					'name'			=> '/user/profile/show',
					'type'			=> 2,
					'created_at'	=> time(),
					'updated_at'	=> time()
				]);
			if (!$query->from('{{%auth_item}}')->where(['name' => 'code_management'])->exists())
				$this->insert('{{%auth_item}}', [
					'name'			=> 'code_management',
					'type'			=> 2,
					'created_at'	=> time(),
					'updated_at'	=> time()
				]);
			if (!$query->from('{{%auth_item}}')->where(['name' => 'code_manager'])->exists())
				$this->insert('{{%auth_item}}', [
					'name'			=> 'code_manager',
					'type'			=> 1,
					'created_at'	=> time(),
					'updated_at'	=> time()
				]);
			if (!$query->from('{{%auth_item}}')->where(['name' => 'show_profile_index'])->exists())
				$this->insert('{{%auth_item}}', [
					'name'			=> 'show_profile_index',
					'type'			=> 2,
					'created_at'	=> time(),
					'updated_at'	=> time()
				]);
			if (!$query->from('{{%auth_item}}')->where(['name' => 'user_manager'])->exists())
				$this->insert('{{%auth_item}}', [
					'name'			=> 'user_manager',
					'type'			=> 1,
					'created_at'	=> time(),
					'updated_at'	=> time()
				]);
			if (!$query->from('{{%auth_item}}')->where(['name' => 'super_admin'])->exists())
				$this->insert('{{%auth_item}}', [
					'name'			=> 'super_admin',
					'type'			=> 1,
					'created_at'	=> time(),
					'updated_at'	=> time()
				]);
			if (!$query->from('{{%auth_item}}')->where(['name' => 'user_management'])->exists())
				$this->insert('{{%auth_item}}', [
					'name'			=> 'user_management',
					'type'			=> 2,
					'created_at'	=> time(),
					'updated_at'	=> time()
				]);
			if (!$query->from('{{%auth_item}}')->where(['name' => 'show_profile_show'])->exists())
				$this->insert('{{%auth_item}}', [
					'name'			=> 'show_profile_show',
					'rule_name' 	=> 'isProfileOwner',
					'type'			=> 2,
					'created_at'	=> time(),
					'updated_at'	=> time()
				]);
		}
        if ($db->schema->getTableSchema("{{%auth_item_child}}", true) !== null)
		{
			if (!$query->from('{{%auth_item_child}}')->where(['parent' => 'code_management', 'child' => '/debug/*'])->exists())
				$this->insert('{{%auth_item_child}}', [
					'parent' 	=> 'code_management',
					'child' 	=> '/debug/*',
				]);
			if (!$query->from('{{%auth_item_child}}')->where(['parent' => 'code_management', 'child' => '/gii/*'])->exists())
				$this->insert('{{%auth_item_child}}', [
					'parent' 	=> 'code_management',
					'child' 	=> '/gii/*'				
				]);
			if (!$query->from('{{%auth_item_child}}')->where(['parent' => 'user_management', 'child' => '/user/admin/*'])->exists())
				$this->insert('{{%auth_item_child}}', [
					'parent'	=> 'user_management',
					'child'		=> '/user/admin/*'
				]);
			if (!$query->from('{{%auth_item_child}}')->where(['parent' => 'show_profile_index', 'child' => '/user/profile/index'])->exists())
				$this->insert('{{%auth_item_child}}', [
					'parent'	=> 'show_profile_index',
					'child'		=> '/user/profile/index'
				]);
			if (!$query->from('{{%auth_item_child}}')->where(['parent' => 'show_profile_show', 'child' => '/user/profile/show'])->exists())
				$this->insert('{{%auth_item_child}}', [
					'parent'	=> 'show_profile_show',
					'child'		=> '/user/profile/show'
				]);
			if (!$query->from('{{%auth_item_child}}')->where(['parent' => 'code_manager', 'child' => 'code_management'])->exists())
				$this->insert('{{%auth_item_child}}', [
					'parent'	=> 'code_manager',
					'child'		=> 'code_management'
				]);
			if (!$query->from('{{%auth_item_child}}')->where(['parent' => 'super_admin', 'child' => 'code_manager'])->exists())
				$this->insert('{{%auth_item_child}}', [
					'parent'	=> 'super_admin',
					'child'		=> 'code_manager'
				]);
			if (!$query->from('{{%auth_item_child}}')->where(['parent' => 'user_manager', 'child' => 'user_management'])->exists())
				$this->insert('{{%auth_item_child}}', [
					'parent'	=> 'user_manager',
					'child'		=> 'user_management'
				]);
			if (!$query->from('{{%auth_item_child}}')->where(['parent' => 'super_admin', 'child' => 'user_manager'])->exists())
				$this->insert('{{%auth_item_child}}', [
					'parent'	=> 'super_admin',
					'child'		=> 'user_manager'
				]);
		}
        if ($db->schema->getTableSchema("{{%auth_assignment}}", true) !== null)
		{
			if (!$query->from('{{%auth_assignment}}')->where(['item_name' => 'super_admin', 'user_id' => 1])->exists())
				$this->insert('{{%auth_assignment}}', [
					'item_name'	=> 'super_admin',
					'user_id'	=> 1,
					'created_at' => time()
				]);
		}
	}
    public function safeDown()
    {
    }
}
