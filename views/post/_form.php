<?php

use yii\helpers\Html;
use matacms\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model matacms\post\models\Post */
/* @var $form ActiveForm */
$locator = new \yii\di\ServiceLocator();
?>
<div class="post">

    <?php $form = ActiveForm::begin(); 
    ?>

        <?= $form->field($model, 'Title') ?>
        <?= $form->field($model, 'Body')->wysiwyg() ?>
        
        <?= $form->field($model, 'Lead')->wysiwyg() ?>
        <?= $form->field($model, 'Author') ?>


        <?php if (Yii::$app->getModule("category") != null): ?>

        	<?= $form->field($model, 'Lead')->category() ?>

        <?php endif; ?>



    	<?= $form->field($model, 'URI') ?>
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>

    <?php ActiveForm::end(); ?>

</div><!-- qwdqwd -->
