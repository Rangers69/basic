<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Posts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="posts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'post_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'post_description')->textarea(['rows' => 6]) ?>

    <?php 
     $listData=ArrayHelper::map(\app\models\Users::find()->all(),'user_id','username'); 

    echo $form->field($model, 'author_id')->dropDownList(
        $listData,
        ['prompt'=>'Select...'],
        ['user_id'=>'username'],

        ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
