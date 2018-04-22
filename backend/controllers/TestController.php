<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/13 0013
 * Time: 02:21
 */

namespace backend\controllers;
use Yii;
use yii\web\Controller;
use yii\helpers\VarDumper;
use common\models\AdminModel;
use helpers\Dump;

class TestController extends Controller
{

    public function actionIndex()
    {
        // $user = AdminModel::findByUsername('admin');
        $auth = Yii::$app->authManager;
        $roles = $auth->getRoles();
        $permit = $auth->getPermissions();
        $assign = $auth->getAssignments(1);

        $password_hash = Yii::$app->security->generatePasswordHash('111111');

        Dump::dump($password_hash);
    }


    public function actionAdd()
    {
        echo 'add somth';
    }















}