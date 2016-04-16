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

    //根据yii2 example P60 将其注释
//    public function actionItemsList()
//    {
//        $newsList = $this->dataItems();
//
//        return $this->render('itemlist',['newsList' => $newsList]);
//    }

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

    //根据yii2 example P52 增加
    public  function actionAdvTest()
    {
        return $this->render('advTest');
    }

    //根据yii2 example P54 增加
    public function actionResponsiveContentTest()
    {
        $responsive = Yii::$app->request->get('responsive',0);

        if($responsive)
        {
            $this->layout = 'responsive';
        }
        else
        {
            $this->layout = 'main';
        }

        return $this->render('responsiveContentTest',['responsive' => $responsive]);
    }

    public function data()
    {
        return[
            [ "id" => 1, "date" => "2015-04-19", "category" => "business", "title" => "Test news
of 2015-04-19" ],
            [ "id" => 2, "date" => "2015-05-20", "category" => "shopping", "title" => "Test news
of 2015-05-20" ],
            [ "id" => 3, "date" => "2015-06-21", "category" => "business", "title" => "Test news
of 2015-06-21" ],
            [ "id" => 4, "date" => "2016-04-19", "category" => "shopping", "title" => "Test news
of 2016-04-19" ],
            [ "id" => 5, "date" => "2017-05-19", "category" => "business", "title" => "Test news
of 2017-05-19" ],
            [ "id" => 6, "date" => "2018-06-19", "category" => "shopping", "title" => "Test news
of 2018-06-19" ]
        ];
    }

    public function actionItemsList()
    {
        // if missing, value will be null
        $year = yii::$app->request->get('year');
        //if missing,value weill be null
        $category = yii::$app->request->get('category');

        $data = $this->data();
        $filteredData = [];

        foreach($data as $d)
        {
            if(($year !=null)&&(date('Y',strtotime($d['date'])) == $year)) $filteredData[] = $d;
            if(($category !=null)&&($d['category'] ==$category)) $filteredData[] =$d;
        }

        return $this->render ('itemList',['year' =>$year,'category' =>$category,'filteredData' => $filteredData]);
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}