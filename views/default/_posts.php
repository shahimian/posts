<?php
use yii\helpers\Html;
?>

<tr>
    <td><?= $model->id ?></td>
    <td><?= Html::a($model->title, ["default/view", "id" => $model->id]) ?></td>
    <td><?= $model->created_at ?></td>
    <td><?= $model->updated_at ?></td>
</tr>
