<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GajiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gaji-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'gaji_pokok') ?>

    <?= $form->field($model, 'tunjangan_gaji') ?>

    <?= $form->field($model, 'golongan') ?>

    <?= $form->field($model, 'id_gaji') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
