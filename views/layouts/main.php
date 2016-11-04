<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\components\AlertWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);


    $items = [];

    $items[] = ['label' => 'Новости', 'url' => ['/']];
    $items[] = ['label' => 'О Нас', 'url' => ['/site/about']];
    $items[] = ['label' => 'Контакты', 'url' => ['/site/contact']];

    if (Yii::$app->user->isGuest) {
        $items[] = ['label' => 'Вход', 'url' => ['/site/login']];
        $items[] = ['label' => 'Регистрация', 'url' => ['/site/signup']];
    }

    if (Yii::$app->user->can('user')){
        $items[] = ['label' => 'Профиль', 'url' => ['/profile']];
        if (Yii::$app->user->can('adminAccess')){
            $items[] = ['label' => 'Панель-управления', 'url' => ['/admin']];
        }
        $items[] = ['label' => 'Выйти (' . Yii::$app->user->identity['username'] . ')', 'url' => ['/site/logout'], 'linkOptions' => ['data-method' => 'post']
        ];
    }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $items,
    ]);
    NavBar::end();
    ?>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>

        <?=AlertWidget::widget()?>

        <?= $content ?>

    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
