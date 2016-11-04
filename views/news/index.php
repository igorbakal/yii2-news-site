<?php
use yii\helpers\Url;
$this->title = 'Новости';
?>
<?php foreach ($articles as $article) :?>
<div class="well well-lg">
                <h2>
                    <?=$article->title?>
                </h2>
                <p>
                    <?=$article->short?>
                </p>
                <p>
                    <a class="btn btn-primary btn-large" href="<?=Url::to(['news/view', 'id' => $article->id])?>">Подробнее</a>
                </p>
</div>
<?php endforeach;?>
