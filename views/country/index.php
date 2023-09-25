
<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>

<?php $form = \yii\bootstrap5\ActiveForm::begin(); ?>

    <?= $form->field($country, 'name') ?>

    <?= $form->field($country, 'code') ?>
    <?= $form->field($country, 'population') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>



