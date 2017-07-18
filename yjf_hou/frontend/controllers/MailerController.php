<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use PHPMailer;

/**
 * Site controller
 */
class MailerController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actionIndex()
    {
       return $this->render("index");
}
}
        