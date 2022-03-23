<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Users;


class UsersController extends Controller 
{
    public function actionIndex()
    {
        //mencari data di database
        $user = Users::find()->all();
       return $this->render('index',['user' => $user]);
    }
}