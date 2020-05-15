<?php

    use yii\helpers\Html;
    use app\assets\NewsAsset;

    NewsAsset::register($this);
?>
<section>
    <div class="container">
        <?php if( Yii::$app->session->hasFlash('success') ): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo Yii::$app->session->getFlash('success'); ?>
            </div>
        <?php endif;?>
        <p class="text-right"><i class="fa fa-plus-circle" aria-hidden="true"></i> <a href="<?=\yii\helpers\Url::to(['news/create']) ?>">Add news</a></p>

        <div class="card" style="width: 80%;">
            <div class="card-body">
                <h2 class="card-title"><?= $title?></h2>
                <p class="card-text"><?= $newsBody?></p>
                <a href="#" class="btn btn-primary btn-lg btn-block" onclick="test()">Test JS :)</a>
            </div>
        </div>

    </div>
</section>