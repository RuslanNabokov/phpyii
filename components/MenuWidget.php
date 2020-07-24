<?php

namespace  app\components;
use yii\base\Widget;
use app\models\Category;

class menuWidget extends  Widget
{
public  $tpl;
public  $data;
public  $tree;
public  $menuHtml;

public  function  init(){
    parent::init();
    if ($this->tpl  === null ){
        $this->tpl = 'menu';
    }
    $this->tpl .= '.php';
}
    public  function  run(){
//        return 'MENU';
        //return $this->tpl;
       $this->data = Category::find()->indexBy('id  ')->all();

       debug($this->data);
       return 1;

    }
    protected  function  getTree(){

    }

}