<?php

namespace shahimian\posts\components\editor;

use yii\web\AssetBundle;

class EditorAssets extends AssetBundle {

    public $sourcePath = '@vendor/shahimian/yii2-posts/components/editor/assets';

    public $css = [
        'styles.css',
    ];

    public $js = [
        'editor.js',
    ];

}
