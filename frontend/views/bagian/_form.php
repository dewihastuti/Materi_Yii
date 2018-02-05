<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Bagian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bagian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_bagian')->textInput() ?>

    <?= $form->field($model, 'k_d_bagian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_bagian')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
