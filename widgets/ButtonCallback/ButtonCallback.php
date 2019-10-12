<?php


namespace app\widgets\ButtonCallback;


use yii\base\Widget;

class ButtonCallback extends Widget
{
    public $nameButton;
    public $temp;
    public $modalTemp;

    public function init()
    {

        if ($this->nameButton === null) {
            $this->nameButton = 'Записаться на приём';
        }

        if ($this->temp === null) {
            $this->temp = 'default';
        }

        if ($this->modalTemp === null) {
            $this->modalTemp = 'default';
        }

        parent::init();

    }

    public function run()
    {
        return $this->render($this->temp, [
            'nameButton' => $this->nameButton
        ]);
    }
}