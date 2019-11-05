<?php

namespace shahimian\posts;

use yii\web\AssetBundle;

class PostsAsset extends AssetBundle {

    public $sourcePath = '@vendor/shahimian/yii2-posts/assets';

    public $depends = [
        'shahimian\assets\fonts\Assets',
        'assets\table\Assets',
    ];

}
