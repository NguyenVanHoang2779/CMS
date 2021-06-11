<?php

namespace frontend\models;

use yii;
use yii\base\Model;
use common\models\Video;

/**
 * Signup form
 */
class ListVideo extends Model
{
    public $videoTitle;
    public $cate;
    public $channel;
    public $items;
    // public $isNew;
    // public $isHot;
    



    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // ['videoTitle', 'trim'],
            ['videoTitle', 'required'],
            // ['videoTitle', 'unique', 'targetClass' => '\common\models\video', 'message' => 'This videoTitle has already been taken.'],
            // ['videoTitle', 'string', 'min' => 3, 'max' => 255],

            ['cate', 'required'],
            ['channel', 'required'],
            // ['isNew', 'required'],
            // ['isHot', 'required'],
            ['items','required'],
        ];
    }

    /**
     * Signs video up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function listVideo()
    {
        if (!$this->validate()) {
            return null;
        }
       
        $data = new Video();
        $data->videoTitle = $this->videoTitle;
        $data->cate = $this->cate;
        $data->channel = $this->channel;
        $data->items = $this->items;
        $data = Video::findAll([
            'videoTitle' =>   $data->videoTitle,
             'cate' =>  $data->cate,
             'channel' =>   $data->channel,
             'items' =>   $data->items ,
        ]);
        return $data;
        
     
        /**
         * Sends confirmation email to video
         * @param video $user user model to with email should be send
         * @return bool whether the email was sent
         */
    }
}
