<?php


namespace app\controllers;


use app\models\Page;
use yii\web\Controller;

class PagesController extends Controller
{
    public function actionIndex()
    {
        $pages = Page::find()->all();

        return $this->render('index',[
            'title' => 'Page view',
            'pages' => $pages
        ]);
    }
    public function actionView($id)
    {
        $page = Page::findOne($id);

        return $this->render('view',
            [
                'page' => $page
            ]
        );
    }
}
