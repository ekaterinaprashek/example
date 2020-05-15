<?php

use yii\helpers\Html;
use app\assets\NewsAsset;

NewsAsset::register($this);

$this->title = 'Create News';
?>
<div class="news-create container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
