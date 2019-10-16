<?php


namespace app\models;


use yii\base\Model;

class CallForm extends Model
{

            public $phone;
            public $name;
            public $text;
        /**
             * {@inheritdoc}
             */
            public function rules()
            {
                return [
                    [['phone'], 'number', 'max' => 45],
                    [['text', 'name'], 'safe']
                ];
            }

            /**
             * {@inheritdoc}
             */
            public function attributeLabels()
            {
                return [
                    'id' => 'ID',
                    'name' => 'Name',
                    'text' => 'text',
                ];
            }

}