<?php
use yii\helpers\Url;
$this->title = 'Новость: '. $article->title;
?>
    <div class="well well-lg">
        <h2>
            <?=$article->title?>
        </h2>
        <p>
            <?=$article->content?>
        </p>
    </div>
