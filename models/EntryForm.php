<?php

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public string $name = '';
    public string $email = '';

    public function rules() {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}