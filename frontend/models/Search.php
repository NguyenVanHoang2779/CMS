<?php
namespace common\models;
use yii\base\Model;
use yii\db\ActiveRecord;
class Search extends ActiveRecord
{
	public static function tableName()
	{
		return 'video';
	}
	public function rules()
	{
		return [
			[['videoTitle','video'],'string','required'],
			
		];
	}
	public function attributesLabels()
	{
		return [
				'videoTitle'=>'Tiêu đề',
				'Video' => 'Url đẹp',
		];
	}
}