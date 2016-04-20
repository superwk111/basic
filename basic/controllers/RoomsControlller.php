<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/20
 * Time: 10:35
 */

namespace app\controllers;

use yii;
use yii\web\Controller;
use app\models\Room;

class RoomsController extends Controller
{
    public function actionCreate()
    {
        $model = new Room();
        $modelCanSave = false;

        if($model -> load(yii::$app->request->post()) && $model ->validate()) {
            $modelCanSave = true;
        }

        return $this->render('create', [
            'model' => $model,
            'modelSaved' => $modelCanSave
        ]);
    }
}