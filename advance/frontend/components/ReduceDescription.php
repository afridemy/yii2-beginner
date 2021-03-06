<?php

/**
 * Created by PhpStorm.
 * User: femiibiwoye
 * Date: 29/08/2017
 * Time: 9:44 AM
 */

namespace frontend\components;

use yii\base\Widget;
use yii\helpers\Html;

class ReduceDescription extends Widget
{
    public $body;
    public $count = 50;

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        $descr = explode(" ",$this->body);
        if(count($descr) <= $this->count){
            $this->body;
        }else{
            array_splice($descr,$this->count);
            $this->body = implode(" ",$descr).'...';
        }

    }

    public function run()
    {
        return Html::decode($this->body,$this->count);
    }
}