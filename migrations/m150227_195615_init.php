<?php

/*
 * This file is part of the mata project.
 *
 * (c) mata project <http://github.com/mata/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use yii\db\Schema;
use yii\db\Migration;

/**
 * @author Dmitry Erofeev <dmeroff@gmail.com
 */
class m150227_195615_init extends Migration {

	public function up() {
		$this->createTable('{{%mata_post}}', [
			'Id'                   => Schema::TYPE_PK,
			'Title'             => Schema::TYPE_TEXT . ' NOT NULL',
			'Author'             => Schema::TYPE_STRING . '(128)',
			'Lead'             => Schema::TYPE_TEXT . '(128)',
			'Body'	=> Schema::TYPE_TEXT . ' NOT NULL',
			'URI'	=> Schema::TYPE_STRING . '(255) NOT NULL'
			]);
	}

	public function down() {
		$this->dropTable('{{%mata_post}}');
	}
}