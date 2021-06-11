<?php
namespace frontend\models;

use Yii;
use yii\base\Model;

class Form extends Model {
    public $name;
    public $email;
    public $password;
    public function rule() {
        return [
            ['name','string','min' =>2,'max' =>10],
            ['emal','emal'],
            [['name','email','password'],'require']
        ];
    }
}