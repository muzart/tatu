<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15.05.2018
 * Time: 12:46
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;

class ChatController extends Controller
{
    public function actionSendChat()
    {
        $message = $_POST['message'];
        if (empty($message)) {
            echo \sintret\chat\ChatRoom::data();
        } elseif ($message) {
            $model = new \sintret\chat\models\Chat;
            $model->message = $message;
            if ($model->save()) {
                echo \sintret\chat\ChatRoom::data();
            } else {
                print_r($model->getErrors());
                exit(0);
            }
        }
    }
}