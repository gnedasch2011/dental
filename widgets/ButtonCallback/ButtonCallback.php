<?php


namespace app\widgets\ButtonCallback;


use yii\base\Widget;

class ButtonCallback extends Widget
{
    public $nameButton;
    public $temp;
    public $modalTemp;
    public $classList;

    public function init()
    {

        if ($this->nameButton === null) {
            $this->nameButton = 'Записаться на приём';
        }

        if ($this->temp === null) {
            $this->temp = 'default';
        }

        if ($this->modalTemp === null) {
            $this->modalTemp = '#exampleModal';
        }

        if ($this->classList === null) {
            $this->classList = 'btn btn-dark btn-theme-colored btn-xl';
        }

        parent::init();

    }

    public function run()
    {
        return $this->render($this->temp, [
            'nameButton' => $this->nameButton,
            'modalTemp' => $this->modalTemp,
            'classList' => $this->classList,
        ]);
    }
}