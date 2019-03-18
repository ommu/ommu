<?php
/**
 * m190318_120101_ommu_core_auth_rule
 * 
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2019 OMMU (www.ommu.co)
 * @created date 18 March 2019, 19:05 WIB
 * @link https://github.com/ommu/ommu
 *
 */

use Yii;
use yii\db\Schema;

class m190318_120101_ommu_core_auth_rule extends \yii\db\Migration
{
	public function up()
	{
		$tableOptions = null;
		if ($this->db->driverName === 'mysql') {
			$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
		}
		
		$tableName = Yii::$app->db->tablePrefix . 'ommu_core_auth_rule';
		if(!Yii::$app->db->getTableSchema($tableName, true)) {
			$this->createTable('ommu_core_auth_rule', [
				'name' => Schema::TYPE_STRING . '(64) NOT NULL',
				'data' => Schema::TYPE_TEXT,
				'created_at' => Schema::TYPE_INTEGER . '(11)',
				'updated_at' => Schema::TYPE_INTEGER . '(11)',
				'PRIMARY KEY ([[name]])',
			], $tableOptions);
		}
	}

	public function down()
	{
		$this->dropTable('ommu_core_auth_rule');
	}
}