<?php

/**
 * @link http://www.matacms.com/
 * @copyright Copyright (c) 2015 Qi Interactive Limited
 * @license http://www.matacms.com/license/
 */

use yii\db\Schema;
use yii\db\Migration;

class m150227_195615_init extends Migration {

	public function safeUp() {
		$this->createTable('{{%mata_post}}', [
			'Id'                   => Schema::TYPE_PK,
			'Title'             => Schema::TYPE_TEXT . ' NOT NULL',
			'Author'             => Schema::TYPE_STRING . '(128)',
			'Lead'             => Schema::TYPE_TEXT . '(128)',
			'Body'	=> Schema::TYPE_TEXT . ' NOT NULL',
			'URI'	=> Schema::TYPE_STRING . '(255) NOT NULL',
			'PublicationDate' => Schema::TYPE_DATETIME . ' NOT NULL'
			]);
	}

	public function safeDown() {
		$this->dropTable('{{%mata_post}}');
	}

}
