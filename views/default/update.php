<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model shahimian\posts\models\Posts */

$this->title = 'بروز رسانی متن: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'مدیریت محتوا', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'بروز رسانی';
?>
<div class="posts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
