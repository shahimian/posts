<?php

namespace shahimian\posts\components;

use yii\base\Widget;
use yii\helpers\Html;

class SummaryPost extends Widget {
    public $id;
    public $content;
    public $words;

    public function run()
    {
        $img = $this->findImageTag();
        $p = $this->findParagraph();
        $limit = $this->limitParagraph($p);
        return ( strlen($img) ? Html::img($img) : '' ) . '<div>' . $limit . '...' . Html::a('ادامه مطلب', ['post', 'id' => $this->id]) . '</div>';
    }

    public function findImageTag()
    {
        $expr = '<img src="';
        $img = substr($this->content, strpos($this->content, $expr) + strlen($expr));
        $img = substr($img, 0, strpos($img, '"'));
        return $img;
    }

    public function findParagraph()
    {
        $content = $this->endImageTag();
        $expr = '<p>';
        $str = substr($content, strpos($content, $expr) + strlen($expr));
        $expr = '</p>';
        $str = substr($str, 0, strpos($str, $expr));
        return $str;
    }

    public function endImageTag()
    {
        $img = $this->findImageTag();
        if(strlen($img)){
            return substr($this->content, strpos($this->content, '>') + 1);
        }
        return '';
    }

    public function limitParagraph($para)
    {
        $i = 0;
        $str = '';
        while($this->words > $i){
            $str .= substr($para, strlen($str), strpos($para, ' '));
            $i++;
        }
        return $str;
    }
}