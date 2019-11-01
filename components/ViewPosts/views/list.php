<?php
use yii\helpers\Html;
foreach($posts as $post):
?>
<div>
    <!-- <div class="audio"></div> -->
    <!-- <div class="video"></div> -->
    <div class="title"><?= Html::a($post->title, ['/posts/default/view', 'id'=>$post->id]) ?></div>
</div>
<?php
endforeach;
