<?php


namespace app\widgets\RealizedObject;


use yii\base\Widget;

class RealizedObject extends Widget
{

    public $group;
    public $arrRealized;

    public function init()
    {
        if ($this->group === null) {
            $this->group = 'protezirovanie_implants';
        }
        $arr = [
            'karies' => [
                'images/realized_obj/karies/1/1.jpg' => 'images/realized_obj/karies/1/2.jpg'
            ],
            'otbel' => [
                'images/realized_obj/otbel/1/1.jpg' => 'images/realized_obj/otbel/1/2.jpg',
                'images/realized_obj/otbel/2/1.jpg' => 'images/realized_obj/otbel/2/2.jpg'
            ],
            'protezirovanie_implants' => [
                'images/realized_obj/protezirovanie_implants/1/1.jpg' => 'images/realized_obj/protezirovanie_implants/1/2.jpg'
            ],
            'vinir' => [
                'images/realized_obj/vinir/1/1.jpg' => 'images/realized_obj/vinir/1/2.jpg'
            ]
        ];
        $this->arrRealized = [];
        $this->arrRealized = $arr[$this->group];
        parent::init();

    }

    public function run()
    {

        return $this->render('realizedObjects', [
            'arrRealized' => $this->arrRealized,
            'group' => $this->group,

        ]);
    }
}