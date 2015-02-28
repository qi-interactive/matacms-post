<?php

use mata\widgets\DynamicForm;
use matacms\post\assets\ModuleAsset;

ModuleAsset::register($this);

echo DynamicForm::widget([
	'model' => new matacms\post\models\Post(),
	'fieldAttributes' => [
	'Title' => [
	'fieldType' => "textInput"
	],
	'Lead' => [
		'fieldType' => "wysiwyg"
	],
	'Body' => [
	'fieldType' => "wysiwyg"
	]
	]
	]);

?>