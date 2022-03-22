<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php 
    if(Yii::$app->session->hasFlash('success')){
        echo Yii::$app->session->getFlash('success');
    }
?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model,'name')->textInput(['autofocus' => true]) ; ?>
<?= $form->field($model,'email'); ?>

<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>