<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TypeDish */

$this->title = 'Редактирование типа блюда: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Типы блюда', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="type-dish-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
