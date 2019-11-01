<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model shahimian\posts\models\Posts */

$this->title = 'ایجاد محتوا';
$this->params['breadcrumbs'][] = ['label' => 'مدیریت محتوا', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
