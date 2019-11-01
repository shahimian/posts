<?php

namespace shahimian\posts;

use yii\web\AssetBundle;

class PostsAsset extends AssetBundle {

    public $sourcePath = '@vendor/shahimian/yii2-posts/assets';

    public $css = [
        'quill/quill.snow.css',
    ];

    public $js = [
        'quill/quill.js',
    ];

}
