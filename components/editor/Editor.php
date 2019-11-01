<?php

namespace shahimian\posts\components\editor;

use yii\base\Widget;
use shahimian\posts\models\Posts;

class Editor extends Widget {
    
    public $id;
    
    public function run(){
        $value = $this->id ? Posts::findOne($this->id)->content : '';
        return $this->render('index', ['post' => $value]);
    }
}
