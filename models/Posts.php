<?php

namespace shahimian\posts\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property string $id
 * @property string $user_id
 * @property string $title
 * @property string $content
 * @property boolean $is_live_page
 * @property string $created_at
 * @property string $updated_at
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'title', 'content', 'created_at', 'updated_at'], 'required'],
            [['user_id','is_live_page'], 'integer'],
            [['title', 'content'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'شناسه',
            'user_id' => 'شناسه کاریری',
            'title' => 'عنوان',
            'content' => 'محتوا',
            'is_live_page' => 'فقط در صفحه پخش زنده نمایش داده شود',
            'created_at' => 'تاریخ نشر',
            'updated_at' => 'تاریخ بروز رسانی',
        ];
    }
}
