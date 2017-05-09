<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\GameBasicInfo */

$this->title = '添加游戏';
$this->params['breadcrumbs'][] = ['label' => 'Game Basic Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="game-basic-info-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
