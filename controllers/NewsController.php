<?php


namespace app\controllers;
use app\models\News;
use app\modules\admin\models\Product;
use Yii;

class NewsController extends AppController {

    public function actionView() {
        $title = 'Lorem Ipsum!';
        $newsBody = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.
    Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer
    took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
    but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
    software like Aldus PageMaker including versions of Lorem Ipsum.';

        $this->setMeta('E-SHOPPER | News');
        return $this->render('view', compact('title', 'newsBody'));
    }

    public function actionCreate()
    {
        $model = new News();

        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->session->setFlash('success', "Success! Product {$model->title} was added!");
            return $this->redirect(['view']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

}