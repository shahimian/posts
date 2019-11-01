<?php
use yii\helpers\Html;
foreach($posts as $post):
?>
    <?= Html::a($post->title, ['/posts/default/view', 'id' => $post->id], ['target' => '_blank']) ?>
<?php
endforeach;
?>
