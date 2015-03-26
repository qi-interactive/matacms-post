<?php

use yii\helpers\Html;
use matacms\widgets\ActiveForm;
use yii\imperavi\ClipsImperaviRedactorPluginAsset;
ClipsImperaviRedactorPluginAsset::register($this);

?>
<div class="post">

    <?php $form = ActiveForm::begin([
        "id" => "form-post"
        ]);    
    ?>

        <?= $form->field($model, 'Title') ?>
        <?= $form->field($model, 'Body')->wysiwyg([
            "plugins" => ['clips']
        ]) ?>
        
        <?= $form->field($model, 'Author') ?>
        <?php  // $form->field($model, 'Lead') ?>

        <?= $form->field($model, 'Lead') ?>
        <?= $form->field($model, 'LeadMedia')->media() ?>

        <?= $form->field($model, 'PublicationDate') ?>

    	<?= $form->field($model, 'URI') ?>

        <?= $form->submitButton() ?>

    <?php ActiveForm::end(); ?>

</div><!-- qwdqwd -->




