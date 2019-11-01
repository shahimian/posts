<?php

namespace shahimian\posts\components\ViewPosts;

use yii\base\Widget;
use yii\helpers\Html;
use shahimian\posts\models\Posts;

class ViewPosts extends Widget {
    public $sort;
    public $limit;
    public $type;

    public function run() {
        if($this->type === null) {
            $this->type = 'list';
        }
        //if(!Posts::find()->count())
            //return;
        $posts = Posts::find()->limit($this->limit)->orderBy("id {$this->sort}");
        if($this->type == 'row')
            $posts->where(['is_live_page' => 1]);
        $posts = $posts->all();
        if($this->type == 'list' || $this->type == 'row') {
            return $this->render($this->type, [
                'posts' => $posts,
            ]);
        }
    }
}
