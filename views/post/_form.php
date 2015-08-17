<?php

use yii\helpers\Html;
use matacms\widgets\ActiveForm;

?>
<div class="post">

    <?php $form = ActiveForm::begin([
        "id" => "form-post"
        ]);
    ?>

        <?= $form->field($model, 'Title') ?>
        <?= $form->field($model, 'Body')->wysiwyg([
        ]) ?>

        <?= $form->field($model, 'Author') ?>
        <?php  // $form->field($model, 'Lead') ?>

        <?= $form->field($model, 'Lead') ?>
        <?= $form->field($model, 'LeadMedia')->media() ?>

        <?= $form->field($model, 'PublicationDate')->datetime() ?>

    	<?= $form->field($model, 'URI')->slug('Title') ?>

        <?= $form->submitButton($model) ?>

    <?php ActiveForm::end(); ?>

</div>
