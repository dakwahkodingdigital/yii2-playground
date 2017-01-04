<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \app\models\form\Signup */

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>
    <?= Html::errorSummary($model) ?>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <?php
            $form = ActiveForm::begin([
                    'options' => ['class' => 'form-horizontal'],
                    'fieldConfig' => [
                        'template' => '{label} <div class="col-sm-8">{input}</div>',
                        'labelOptions' => ['class' => 'col-sm-2 control-label']
            ]]);
            ?>
            <?= $form->field($model, 'username') ?>
            <?= $form->field($model, 'fullname') ?>
            <?= $form->field($model, 'email') ?>
            <?= $form->field($model, 'password')->passwordInput() ?>
            <div class="form-group">
                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>