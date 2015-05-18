<?php

/**
 * @link http://www.matacms.com/
 * @copyright Copyright (c) 2015 Qi Interactive Limited
 * @license http://www.matacms.com/license/
 */

namespace matacms\post\assets;

use yii\web\AssetBundle;

class ModuleAsset extends AssetBundle
{
	
	public $sourcePath = '@vendor/matacms/matacms-post/web';

	public $js = [
		"js/form.js"
	];

	public $depends = [
		'yii\web\YiiAsset'
	];
	
}
