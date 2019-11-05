<?php

use yii\helpers\Html;
use shahimian\posts\PostsAsset;

PostsAsset::register($this);

/* @var $this yii\web\View */
/* @var $model shahimian\posts\models\Posts */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'کتابخانه', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>به تاریخ: <span><?= $model->created_at ?></span> ایجاد شده و در تاریخ <span><?= $model->updated_at ?></span> بروز رسانی شده است.</p>

    <p>
        <?= Html::a('بروز رسانی', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('حذف', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= $model->content ?>

</div>
