<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use shahimian\posts\PostsAsset;

PostsAsset::register($this);


/* @var $this yii\web\View */
/* @var $searchModel shahimian\posts\models\PostsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'مدیریت محتوا';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('ایجاد محتوا', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <table class="acc-table">
        <thead>
            <tr>
                <td>ردیف</td>
                <td>عنوان</td>
                <td>تاریخ ایجاد</td>
                <td>تاریخ بروز رسانی</td>
            </tr>
        </thead>
        <tbody>
            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_posts',
            ]) ?>
        </tbody>
    </table>
</div>
