<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->title = 'Reset password';
$this->params['breadcrumbs'][] = $this->title;
?>

<aside class="l-sidebar l-sidebar_left">

    <?= $this->render('left', [
    ]); ?>

</aside>
<div class="g-flexMiddleChild middleWrapper">

    <div class="middleWrapper__container">
        <div class="headerBox">
            <h1 class="headerBox__title"><?= Html::encode($this->title) ?></h1>
        </div>

        <form method="post" action="<?= Url::to(['site/reset-password-by-sms']) ?>">
            <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
            <input type="password" name="password" value="">
            <input type="submit" name="submitform" value="Подтвердить">
        </form>

    </div>

</div>
<aside class="l-sidebar l-sidebar_right">

    <?= $this->render('right', [
    ]); ?>

</aside>


