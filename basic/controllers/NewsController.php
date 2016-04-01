<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/23
 * Time: 16:03
 */
//1.specify namespace at the top (in basic application usually app\controllers);
namespace app\controllers;

//2.specify 'use' path for used class;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

//3.controller class must extend yii\web\Controller class;
//This line is equivalent to
//class NewsController extends yii\web\Controller
class NewsController extends  Controller
{
    //4.actions are handled from controller functions whose name starts with 'action' and
    //the first letter of each word is uppercase;
   public function dataItems()
   {
       $newList = [
           [ 'id' => 1,'title' => 'First World War', 'date' => '1914-07-28'],
           [ 'id' => 2,'title' => 'Second World War', 'date'=> '1939-09-01'],
           [ 'id' => 3,'title' => 'First man on the moon','date'=>'1969-07-20']
       ];

       return $newList;
   }

    public function actionItemList()
    {
        $newsList = $this->dataItems();

        return $this->render('itemlist',['newsList' => $newsList]);
    }

    public function actionItemDetail($id)
    {
        $newList = $this->dataItems();

        $item = null;
        foreach($newList as $n)
        {
            if ($id == $n['id']) $item = $n;
        }

        return $this->render('itemDetail',['item' => $item]);
    }
}