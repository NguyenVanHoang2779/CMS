<?php

namespace frontend\models;

use yii;
use yii\base\Model;
use common\models\Video;
use yii\web\UploadedFile;
use yii\helpers\VarDumper;
/**
 * Signup form
 */
class CreatVideo extends Model
{
    public $videoTitle;
    public $cate;
    public $channel;
    public $publistTime;
    public $videoDesc;
    public $videoImage;
    public $videoMedia;
    public $items;
    public $pathImage;
    public $pathVideo;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // ['videoTitle', 'trim'],
            ['videoTitle', 'required'],
            // ['videoTitle', 'unique', 'targetClass' => '\common\models\video', 'message' => 'This videoTitle has already been taken.'],
            ['videoTitle', 'string', 'min' => 3, 'max' => 255],

            ['cate', 'required'],
            ['channel', 'required'],
            ['publistTime', 'required'],
            ['items', 'required'],

            ['videoDesc', 'required'],
            [['videoImage'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png,jpg, jpeg'],
            [['videoMedia'], 'file', 'skipOnEmpty' => false, 'extensions' => 'mp4'],
            // ['videoImage','required'],
            // ['password', 'string', 'min' => Yii::$app->params['video.passwordMinLength']],
        ];
    }

    /**
     * Signs video up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function upLoad()
    {
        
        if (!$this->validate()) {
            return null;
        }
        $video = new Video();
        $video->videoTitle = $this->videoTitle;
        $video->cate = $this->cate;
        $video->channel = $this->channel;
        $video->publistTime = $this->publistTime;
        $video->videoDesc = $this->videoDesc;
        $video->pathImage = $this->pathImage;
        $video->pathVideo = $this->pathVideo;
        $video->items = $this->items;
        return $video->save();
        // foreach ($this->videoImage as $file) {
        //     $file->saveAs('C:\Users\Admin\Pictures\lừa lọc khách hàng/' . $file->baseName . '.' . $file->extension);
        // }
        // foreach ($this->videoMedia as $file) {
        //     $file->saveAs('C:\Users\Admin\Pictures\lừa lọc khách hàng/' . $file->baseName . '.' . $file->extension);
        // }
        
      
    }
   
   

    /**
     * Sends confirmation email to video
     * @param video $user user model to with email should be send
     * @return bool whether the email was sent
     */
}
