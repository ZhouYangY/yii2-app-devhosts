<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AppDevhosts */

$this->title = 'Update App Devhosts: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'App Devhosts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="app-devhosts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>