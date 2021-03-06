<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Signup';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div style="margin-top:90px" class="container">
<div class="site-signup p-lg-5 m-lg-4">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row justify-content-center">

            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email')?>

                <?= $form->field($model, 'password')->passwordInput() ?>
                
                <div class="form-group">
                    <?= Html::submitButton('Regístrate', ['class' => 'btn btn-outline-info', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
    </div>
</div>
</div>
