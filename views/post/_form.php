<?php

use yii\helpers\Html;
use matacms\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model matacms\post\models\Post */
/* @var $form ActiveForm */
$locator = new \yii\di\ServiceLocator();
?>
<div class="post">

    <?php $form = ActiveForm::begin([
        "id" => "form-post"
        ]); 
    ?>

        <?= $form->field($model, 'Title') ?>
        <?= $form->field($model, 'Body')->wysiwyg() ?>
        
        <?= $form->field($model, 'Author') ?>
        <?= $form->field($model, 'Author') ?>
        <?php  // $form->field($model, 'Lead') ?>


        <?= $form->field($model, 'Lead')->media() ?>


        <?= $form->field($model, 'PublicationDate')->dateTime() ?>

    	<?= $form->field($model, 'URI') ?>
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>

    <?php ActiveForm::end(); ?>

</div><!-- qwdqwd -->
